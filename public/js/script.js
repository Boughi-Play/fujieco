$("#samourai").hover(over, out);

function over() {
TweenMax.to('#bras', 0.1, {y:-25, rotation:15, ease:Power0.easeOut});
TweenMax.to('#katana', 0.1, {y:-40, rotation: 5, skew: 15, ease:Power0.easeOut});
TweenMax.to("#chapeau", 0.1, {y:-4, rotation: 3, ease:Power0.easeOut});
TweenMax.to("#samourai", 0.5, {x:-100, ease:Power2.easeInOut});


}

function out() {
  
TweenMax.to('#bras', 0.1, {y:5, rotation:-5.5, ease:Power0.easeOut});
TweenMax.to('#katana', 0.1, {y:15, rotation: -4, ease:Power0.easeOut});
TweenMax.to("#chapeau", 0.2, {y:5, rotation: 3, ease:Power0.easeOut});
TweenMax.to("#samourai",0.5, {x:100, ease:Power2.easeInOut});


}