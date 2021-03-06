<style>
    #calendar-container {
        position: relative;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    #calendar {
        margin: 10px auto;
        padding: 10px;
        max-width: 1100px;
        height: 700px;
    }

</style>

<div>
    <div id='calendar-container' wire:ignore>
        <div id='calendar'></div>
    </div>
</div>
@push('scripts')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>
    <script>


        create_UUID = () => {
            let dt = new Date().getTime();
            const uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, c => {
                let r = (dt + Math.random() * 16) % 16 | 0;
                dt = Math.floor(dt / 16);
                return (c == 'x' ? r : (r & 0x3 | 0x8)).toString(16);
            });
            return uuid;
        }
        
        document.addEventListener('livewire:load', function() {
            const Calendar = FullCalendar.Calendar;
            const calendarEl = document.getElementById('calendar');
            const calendar = new Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,listYear'
                },
                locale: '{{ config('app.locale') }}',
                events: JSON.parse(@this.events),
                editable: true,
                eventResize: info => @this.eventChange(info.event),
                eventDrop: info => @this.eventChange(info.event),


                                    selectable: true,


                select: arg => {
                    @if(auth()->check() && auth()->user()->email == 'admin@fujitsu.com')
                    
                    const title = prompt('Titre :');
                    const id = create_UUID();

                    if (title) {
                        calendar.addEvent({
                            id: id,
                            title: title,
                            start: arg.start,
                            end: arg.end,
                            allDay: arg.allDay
                        });
                        @this.eventAdd(calendar.getEventById(id));
                    };
                    calendar.unselect();
                    @endif
                },
                eventClick: info => {
                    @if(auth()->check() && auth()->user()->email == 'admin@fujitsu.com')
                    if (confirm("Voulez-vous vraiment supprimer cet ??v??nement ?")) {
                        info.event.remove();
                        @this.eventRemove(info.event.id);
                    }
                
                    @endif
                }


            });
            calendar.render();
        });
    </script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
@endpush
