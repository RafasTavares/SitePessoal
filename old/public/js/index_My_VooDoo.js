var mouseX = 0, mouseY = 0;
$(document).mousemove(function(e){
   mouseX = e.pageX;
   mouseY = e.pageY; 
});

var follower = $(".iris");
var xp = 0, yp = 0;
var loop = setInterval(function(){
    xp += (mouseX - xp) ;
    yp += (mouseY - yp) ;
    follower.css({"margin-left":(xp/60), "margin-top":(yp/90)});
    
}, 30);

$('.head').one("mouseover",function(){
  $('.text').css("opacity",1);
});

$('.wrapper').on('click',function(){
  $(this).toggleClass('vert');
  
})