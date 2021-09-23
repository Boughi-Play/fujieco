<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Event;
use Illuminate\Support\Arr;

class Calendar extends Component
{
    public $events = [];
    public function eventChange($event)
    {
        if(auth()->check() && auth()->user()->email == 'admin@fujitsu.com'){
            $e = Event::find($event['id']);
            $e->start = $event['start'];
            if(Arr::exists($event, 'end')) {
                $e->end = $event['end'];
            }
            $e->save();
        }
    }
    public function render()
    {
        $this->events = json_encode(Event::all());
        return view('livewire.calendar');

    }
    public function eventAdd($event)
{
    if(auth()->check() && auth()->user()->email == 'admin@fujitsu.com')
        Event::create($event);
}
public function eventRemove($id)
{
    if(auth()->check() && auth()->user()->email == 'admin@fujitsu.com')
        Event::destroy($id);
}
}
