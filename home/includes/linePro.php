<style>
        /*

Demo for my blog post: https://blog.sarasoueidan.com/horizontal-portfolio-layout

Also available on Github: https://github.com/SaraSoueidan/horizontal-portfolio-layout

*/
@import url(https://fonts.googleapis.com/css?family=Lato:300,100,400);

* {
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box;
  position: relative;
  list-style-type: none
}

a {
  color: inherit;
  text-decoration: none
}

a.link {
  color: #C4290D
}

html,
body {
  min-height: 100%
}

body {
  background: #eee url('https://subtlepatterns.com/patterns/pw_pattern.png');
  font: 300 20px/1.5 "Lato", sans-serif;
  color: #333
}

header {
  background-color: white;
  padding: 0 30px;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
  z-index: 10;
  line-height: 2em
}

header a {
  font-size: 20px
}

.demo-wrapper {
  padding: 30px
}

h1 {
  font-size: 42px;
  margin: 0;
  font-weight: 300;
  margin-bottom: 30px;
  letter-spacing: -1px;
  text-align: center
}

.portfolio-items {
  height: 400px;
  overflow-x: scroll;
  overflow-y: hidden;
  white-space: nowrap;
  margin-bottom: 30px;
  position: relative
}

.portfolio-items > li {
  display: inline-block;
  vertical-align: top
}

.item {
  width: 300px;
  height: 202px;
  margin: 150px 20px 0;
  padding: 5px;
  border-radius: 2px;
  background-color: white;
  font-size: 14px;
  opacity: 0;
  position: relative;
  top: -300px;
  box-shadow: 0px 10px 10px -5px rgba(0,0,0,0.5);
  -webkit-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  transform: rotate(-135deg);
  -webkit-transition: all .3s ease, opacity 2s ease,  top 1s ease;
  -o-transition: all .3s ease, opacity 2s ease,  top 1s ease;
  transition: all .3s ease, opacity 2s ease,  top 1s ease
}

.item:nth-child(even) {
  margin-top: 100px
}

.item:hover {
  height: 270px;
  padding: 15px;
  -webkit-transform: translateY(-68px);
  -ms-transform: translateY(-68px);
  -o-transform: translateY(-68px);
  transform: translateY(-68px)
}

.item:hover .date {
  -webkit-transform: translate3d(0, 61px, 0);
  -ms-transform: translate3d(0, 61px, 0);
  -o-transform: translate3d(0, 61px, 0);
  transform: translate3d(0, 61px, 0)
}

.item:hover figcaption {
  -webkit-animation: show .25s ease-in .120s forwards;
  -o-animation: show .25s ease-in .120s forwards;
  animation: show .25s ease-in .120s forwards
}

.item:hover p:nth-of-type(1) span {
  -webkit-animation: slideOut .25s ease-out .15s forwards;
  -o-animation: slideOut .25s ease-out .15s forwards;
  animation: slideOut .25s ease-out .15s forwards
}

.item:hover p:nth-of-type(2) span {
  -webkit-animation: slideOut .2s  ease-out .3s forwards;
  -o-animation: slideOut .2s  ease-out .3s forwards;
  animation: slideOut .2s  ease-out .3s forwards
}

.item:hover .view {
  height: 170px
}

.item:hover .view img {
  top: -20px;
  left: -20px;
}

.falldown {
  top: 0;
  opacity: 1;
  -webkit-transform: rotate(0);
  -ms-transform: rotate(0);
  -o-transform: rotate(0);
  transform: rotate(0)
}

figure {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.view {
  overflow: hidden;
  width: 100%;
  height: 190px;
  position: relative
}

.view img {
  width: 300px;
  height: 190px;
  -webkit-transition: width .3s ease;
  -o-transition: width .3s ease;
  transition: width .3s ease;
  position: absolute;

}

figcaption {
  height: 60px;
  width: 100%;
  padding: 0;
  position: absolute;
  bottom: 0;
  overflow: hidden;
  opacity: 0
}

figcaption p {
  line-height: 25px !important;
  font: bold 12px/18px "Arial", sans-serif;
  text-transform: uppercase;
  padding: 0 10px;
  margin: 5px 0;
  width: 100%;
  background-color: #f0f0f0;
  color: #333
}

figcaption span {
  left: -100%;
  opacity: 0
}

figcaption a {
  color: #CC320F
}

.date {
  z-index: 1;
  width: 50px;
  height: 30px;
  line-height: 30px;
  color: #fff;
  font-weight: bold;
  text-align: center;
  border-radius: 1px;
  background-color: #CC320F;
  position: absolute;
  bottom: 30px;
  left: 15px;
  -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.12, 1.6, 0.91, 0.92);
  -o-transition: -o-transform 0.5s cubic-bezier(0.12, 1.6, 0.91, 0.92);
  transition: -webkit-transform 0.5s cubic-bezier(0.12, 1.6, 0.91, 0.92);
  transition: -ms-transform 0.5s cubic-bezier(0.12, 1.6, 0.91, 0.92);
  transition: -o-transform 0.5s cubic-bezier(0.12, 1.6, 0.91, 0.92);
  transition: transform 0.5s cubic-bezier(0.12, 1.6, 0.91, 0.92)
}

@keyframes slideOut {
  0% {
    left: -100%;
    opacity: 0
  }

  95% {
    left: 0;
    opacity: 0.2
  }

  100% {
    opacity: 1;
    left: 0
  }
}

@keyframes show {
  to {
    opacity: 1
  }
}

::-webkit-scrollbar {
  width: 7px;
  height: 7px;
  cursor: pointer
}

::-webkit-scrollbar-track {
  background-color: #ddd;
  border-radius: 10px
}

::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background-color: #C4290D
}

@-webkit-keyframes slideOut {
  0% {
    left: -100%;
    opacity: 0
  }

  95% {
    left: 0;
    opacity: 0.2
  }

  100% {
    opacity: 1;
    left: 0
  }
}

@-o-keyframes slideOut {
  0% {
    left: -100%;
    opacity: 0
  }

  95% {
    left: 0;
    opacity: 0.2
  }

  100% {
    opacity: 1;
    left: 0
  }
}

@-webkit-keyframes show {
  to {
    opacity: 1
  }
}

@-o-keyframes show {
  to {
    opacity: 1
  }
}

</style>

<div class="demo-wrapper">
    
    <!-- <h1>Horizontal Portfolio Layout With CSS3 Animations and jQuery</h1> -->
  
      <ul class="portfolio-items">
      <li class="item">
        <figure>
          <div class="view">
           <img src="https://s.cdpn.io/9674/1.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?thetwoandthebubbles">The Two and The Bubbles</a></span></p>
            <p><span>By Vlad Gerasimov</span></p>
          </figcaption>
        </figure>
        <div class="date">2005</div>
      </li>
      
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/2.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?christmas_ice_skating">Christmas Ice Skating</a></span></p>
            <p><span>By Vlad Gerasimov</span></p>
          </figcaption>
        </figure>
        <div class="date">2008</div>
      </li>
  
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/3.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?love_knows_no_boundaries">Love Knows No Boundaries</a></span></p>
            <p><span>By Vlad Gerasimov</span></p>
          </figcaption>
        </figure>
        <div class="date">2008</div>
      </li>
     
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/7.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?sandal">Sandal</a></span></p>
            <p><span>By Vlad Gerasimov </span></p>
          </figcaption>
        </figure>
        <div class="date">2009</div>
      </li>
      
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/13.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?skiing">Skiing</a></span></p>
            <p><span>By Vlad Gerasimov</span></p>
          </figcaption>
        </figure>
        <div class="date">2004</div>
      </li>
      
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/33.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?knight_lady">The Knight and The Lady</a></span></p>
            <p><span>By Vlad Gerasimov</span></p>
          </figcaption>
        </figure>
        <div class="date">2009</div>
      </li>
  
      <li class="item">
        <figure>
          <div class="view">
           <img src="https://s.cdpn.io/9674/11.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?friends_c2">Friends</a></span></p>
            <p><span>By Vlad Gerasimov</span></p>
          </figcaption>
        </figure>
        <div class="date">2008</div>
      </li>
  
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/10.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?coiffure">Coiffure</a></span></p>
            <p><span>By Vlad Gerasimov</span></p>
          </figcaption>
        </figure>
        <div class="date">2004</div>
      </li>
  
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/12.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?pc_mac">Get a Mac</a></span></p>
            <p><span>By Vlad Gerasimov</span></p>
          </figcaption>
        </figure>
        <div class="date">2007</div>
      </li>
  
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/15.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?connection">Connection</a></span></p>
            <p><span>By Vlad Gerasimov </span></p>
          </figcaption>
        </figure>
        <div class="date">2006</div>
      </li>
  
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/16.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?alice_dragon_tree">Alice, Her Dragon, and The Christmas Tree</a></span></p>
            <p><span>By Vlad Gerasimov </span></p>
          </figcaption>
        </figure>
        <div class="date">2011</div>
      </li>
  
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/18.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?inseparable">Inseparable</a></span></p>
            <p><span>By Vlad Gerasimov </span></p>
          </figcaption>
        </figure>
        <div class="date">2009</div>
      </li>
  
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/5.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?pregnant">Pregnant</a></span></p>
            <p><span>By Vlad Gerasimov </span></p>
          </figcaption>
        </figure>
        <div class="date">2006</div>
      </li>
  
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/6.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?xmas_tree">Christmas Tree</a></span></p>
            <p><span>By Vlad Gerasimov </span></p>
          </figcaption>
        </figure>
        <div class="date">2009</div>
      </li>
      
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/8.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?thetwoandthemouse">The Two and The Mouse</a></span></p>
            <p><span>By Vlad Gerasimov </span></p>
          </figcaption>
        </figure>
        <div class="date">2005</div>
      </li>
  
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/9.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?punctuation">Punctuation</a></span></p>
            <p><span>By Vlad Gerasimov </span></p>
          </figcaption>
        </figure>
        <div class="date">2006</div>
      </li>
      
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/4.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?internet_cafe">Internet Cafe</a></span></p>
            <p><span>By Vlad Gerasimov </span></p>
          </figcaption>
        </figure>
        <div class="date">2012</div>
      </li>
      
      <li class="item">
        <figure>
          <div class="view">
            <img src="https://s.cdpn.io/9674/21.jpg" />
          </div>
          <figcaption>
            <p><span><a href="http://www.vladstudio.com/wallpaper/?raring_ringtail_blue">Raring Ringtail</a></span></p>
            <p><span>By Vlad Gerasimov </span></p>
          </figcaption>
        </figure>
        <div class="date">2013</div>
      </li>
  
    </ul>
    </div>

    <script>
            //checks if element it is called on is visible (only checks horizontally
  (function($) {
    var $window = $(window);
    
    $.fn.isVisible = function(){
      var $this = $(this),
        Left = $this.offset().left,
        visibleWidth = $window .width();

      return Left < visibleWidth;  
    }
  })(jQuery);

  (function($){
    var list = $('.portfolio-items'),
        showVisibleItems = function(){
        list.children('.item:not(.falldown)').each(function(el, i){
            var $this = $(this);
            if($this.isVisible()){
              $this.addClass('falldown');
            }
          });
        };
    
    //initially show all visible items before any scroll starts
    showVisibleItems();
    
    //then on scroll check for visible items and show them
    list.scroll(function(){
      showVisibleItems();
    });
    
    //image hover pan effect
    list.on('mousemove','img', function(ev){
        var $this = $(this),
            posX = ev.pageX, 
            posY = ev.pageY,
            data = $this.data('cache');
      //cache necessary variables
          if(!data){
            data = {};
            data.marginTop = - parseInt($this.css('top')),
            data.marginLeft = - parseInt($this.css('left')),
            data.parent = $this.parent('.view'),
            $this.data('cache', data); 
          }

      var originX = data.parent.offset().left,
          originY =  data.parent.offset().top;
      
        //move image
        $this.css({
            'left': -( posX - originX ) / data.marginLeft,
            'top' : -( posY - originY ) / data.marginTop
        }); 
    });
    
    
    list.on('mouseleave','.item', function(e){
      $(this).find('img').css({
        'left': '0', 
        'top' : '0'
      });
    });
    
    list.mousewheel(function(event, delta) {

        this.scrollLeft -= (delta * 60);
      
        event.preventDefault();

    });
  })(jQuery);

    </script>