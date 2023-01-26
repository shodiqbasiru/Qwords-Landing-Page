var textType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

textType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new textType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #ff6900}";
    document.body.appendChild(css);
};

// eventScroll
function changeBg(){
    // var scroll = window.scrollY;
    
    //     console.log(scroll);

    var navbar = document.getElementById('navbar');
    var scroll = window.scrollY;
    if (scroll < 100 ) {
      navbar.classList.remove('bgNavChangeBlack')
      navbar.classList.remove('bgNavChangeWhite');
    } else if (scroll<= 749 && scroll>=100) {
        navbar.classList.remove('bgNavChangeBlack');
        navbar.classList.add('bgNavChangeWhite');
    } else if (scroll<=1451 && scroll>=750) {
      navbar.classList.remove('bgNavChangeWhite');
      navbar.classList.add('bgNavChangeBlack');
    } else if (scroll<=2123 && scroll>=1452){
        navbar.classList.remove('bgNavChangeBlack');
        navbar.classList.add('bgNavChangeWhite');
    } else if (scroll<=3207 && scroll>=2124){
      navbar.classList.remove('bgNavChangeWhite');
      navbar.classList.add('bgNavChangeBlack');
    } else if (scroll<=5273 && scroll>=3208){
        navbar.classList.remove('bgNavChangeBlack');
        navbar.classList.add('bgNavChangeWhite');
    } else {
        navbar.classList.remove('bgNavChangeWhite');
        navbar.classList.add('bgNavChangeBlack');
    }
}

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function stickyNav() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky");
    } else {
      navbar.classList.remove("sticky");
    }
}
window.onscroll = function() {stickyNav()};
window.addEventListener('scroll',changeBg);


  
// coruosel
var solutionItems = document.querySelectorAll(".item label");
var timer;
function cycleTestimonials(index) {
   timer = setTimeout(function() {
    var evt;
    if (document.createEvent){
      evt = document.createEvent('MouseEvent');
      evt.initMouseEvent('click', true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
    } else {
      evt = new MouseEvent("click", {
            view: window,
            bubbles: true,
            cancelable: true,
            clientX: 20
          });
    }
    var ele = "." + solutionItems[index].className;
    var ele2 = document.querySelector(ele)
    ele2.dispatchEvent(evt);
    index++; // Increment the index
    if (index >= solutionItems.length) {
      index = 0; 
    }
    cycleTestimonials(index);
    document.querySelector(".solutions").addEventListener("click", function() {
      clearTimeout(timer); 
    });
  }, 3000); 
}

cycleTestimonials(0);
  