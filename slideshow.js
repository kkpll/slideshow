
var DIRECTION = {
    NEXT : '+',
    PREV : '-'
};

function Slideshow(id){
    this.id       = id;
    this.lasttime = 0;
    this.interval = 3;
    this.length   = 0;
    this.position = 0;
    this.count    = 0;
    this.ready    = false;
    this.timer    = false;
}

Slideshow.prototype.init = function(){

    var self = this,
    slideshow = document.getElementById(this.id),
    images = slideshow.getElementsByClassName('slideshow__images')[0],
    nextbtn = slideshow.getElementsByClassName('slideshow__btns__btn--next')[0],
    prevbtn = slideshow.getElementsByClassName('slideshow__btns__btn--prev')[0];

    this.length = images.children.length;

    images.innerHTML += images.innerHTML;

    nextbtn.onclick = function(event){
        event.preventDefault();
        self.slide(DIRECTION.NEXT);
    };

    prevbtn.onclick = function(event){
        event.preventDefault();
        self.slide(DIRECTION.PREV);
    };

    ['load','resize'].forEach(function(e){

       window.addEventListener(e,function(){

           if ( self.timer !== false ) {
               clearTimeout(self.timer);
               self.ready = false;
           };

           self.timer = setTimeout(function() {

               console.log('resize');

               var image = images.getElementsByClassName('slideshow__images__image')[0];

               self.move = (image.clientWidth / slideshow.clientWidth) * 100;
               self.position = 0;
               self.count = 0;

               images.style.transform = 'translateX(0)';

               self.ready = true;

           }, 200 );

       });

   });

   ["webkitTransitionEnd","mozTransitionEnd","oTransitionEnd","transitionend"].forEach( function( transitionend ){

       images.addEventListener( transitionend, function(event){

           event.target.classList.remove('transition');
           self.ready = true;

       }, true);

    });

} //end of Slideshow.prototype.init

Slideshow.prototype.slide = function(direction){

    if( this.ready === true ){
        this.ready = false;
    }else{
        return;
    }

    var self = this,
    slideshow = document.getElementById(this.id),
    images = slideshow.getElementsByClassName('slideshow__images')[0];
    imageLength = this.length;

    if( direction === DIRECTION.NEXT){

        if( this.count === imageLength || this.count === 0 ){
            images.style.transform = "translateX(0)";
            this.position = 0;
            this.count = 0;
        }

        this.position -= this.move;
        this.count ++;

    }else if( direction === DIRECTION.PREV ){

        if( Math.abs(this.count) === imageLength || this.count === 0 ){
            this.position = -( this.move * imageLength );
            images.style.transform = "translateX(" + this.position + "%)";
            this.count = 0;
        }

        this.position += this.move;
        this.count--;
    }

    setTimeout( function(){

        images.classList.add('transition');
        images.style.transform = "translateX(" + self.position + "%)";

    }, 100 );

}

Slideshow.prototype.loop = function(){

    var self = this;

    (function loop(timestamp){

        if( ( timestamp - self.lasttime ) / 1000 > self.interval ){

            self.lasttime = timestamp;
            self.slide( DIRECTION.NEXT );
        }

        requestAnimationFrame( loop );

    })();

}
