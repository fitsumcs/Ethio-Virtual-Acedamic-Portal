/**
 * Created by Amante Pc on 5/5/2016.
 */


// THIS IS THE FUNCTION THAT IS USED TO MAKE  THE  CODE TO BE BROWSER COMPATABILE
function listenEvent(eventTarget, eventType, eventHandler) {
    
    if (eventTarget.addEventListener) {
        eventTarget.addEventListener(eventType, eventHandler,false);
    } 

    else if (eventTarget.attachEvent) {
        eventType = "on" + eventType;
        eventTarget.attachEvent(eventType, eventHandler);
    }
    
     else {
        eventTarget["on" + eventType] = eventHandler;
    }
}


listenEvent(window,"load",function() {
   
    listenEvent(document.getElementById("left"), "click",  function(){
        slide(-1);

    });

    listenEvent(document.getElementById("right"),"click",  function(){
        slide(1);
    });





});




var imagecount = 1;
var total = 6;



//this used to slide the image when the arrow buttons are clicked
function slide(x){
    var image = document.getElementById("head");
    imagecount = imagecount + x;
    if(imagecount >total){
        imagecount =1;
    }
    if(imagecount <1){
        imagecount=total;
    }
    var style = "background-image:url('../image/slide" + imagecount + ".jpg')";

    image.setAttribute("style", style); 
	
}

// this function is used to hide the the arrow button from the backgroudn when the mouse out from the background image
function backOut(){
    var a = document.getElementById("left-holder");
    var b = document.getElementById("right-holder");
    var style2 = "display:none";
    a.setAttribute("style", style2);
    b.setAttribute("style", style2);
      
}

//this function is used to show the arrow button on the background when the mouse enter on the background 

function backOver(){
    //document.getElementById("name").style.visibility = "visible";
    var a = document.getElementById("left-holder");
	var b = document.getElementById("right-holder");
	var style1 = "display:block";
	a.setAttribute("style", style1);
    b.setAttribute("style", style1);
	
}




