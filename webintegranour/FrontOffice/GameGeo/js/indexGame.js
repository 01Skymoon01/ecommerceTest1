$(document).ready(function(){
var ver =1;

	var bg = $("#background");

	//bg[0].style.width= 1000 + "px";



			 console.log( bg[0].style );

function ImageSwitcher(choices) {
var i=0;

	this.Next = function() {

		hide_current_image();
		show_next_image();
	}
	this.showpic = function(k) {


			positionLeft = (widthBG+leftBG)/2;

			positionTop = 500;

			height= 60;
			weight=60;

			choices[k].style.top = positionTop;
			choices[k].style.left = positionLeft + "px";
			choices[k].style.right = positionLeft + "px";

			choices[k].style.visibility = "visible";





		i=k;

	}
	this.Hidepic = function() {


			choices[i].style.visibility = "hidden";



	}

	this.movePICRight = function() {

    if((positionLeft+weight+100)!=(widthBG) ){
      positionLeft = positionLeft +10;
			choices[i].style.left = positionLeft +"px";
}
	}
	this.movePICLeft = function() {

if((positionLeft)!=(leftBG) ){
		positionLeft = positionLeft -10;
			choices[i].style.left = positionLeft +"px";
}
	}
	this.movePICTop = function() { //BOttom Khlot
		console.log(positionTop);
    console.log(topBG+heightBG);
if((positionTop+height-50)<(heightBG) ){
		positionTop = positionTop + 10;
			choices[i].style.top = positionTop +"px";
}
	}
	this.movePICBottom = function() { // Top GHlot
		console.log(positionTop);
    console.log(topBG);
if((positionTop)!=(topBG+130) ){
		positionTop = positionTop - 10;
			choices[i].style.top = positionTop +"px";
}
	}

	this.ZoomOut = function() {
		weight = weight + 10;
		height= height + 10;
			choices[i].style.weight = weight +"px" ;
			choices[i].style.height = height +"px" ;
	}
	this.zoomin = function() {

		weight = weight - 10;
		height= height - 10;
			choices[i].style.weight = weight +"px" ;
			choices[i].style.height = height +"px" ;
	}
	this.rotateYmin = function() {
		if(ver%2!=0){
		choices[i].style.transform = 'scaleX(-1)';
		ver++;
	}else{
		ver++;
		choices[i].style.transform = 'scaleX(1)';
	}
	}

	var hide_current_image = function() {
		if(choices){

			i += 1;
		}
	}
	var show_next_image = function() {
		if(choices){
			if(i == (choices.length)) {
				i = 0;
			}
			choices[i].style.left = positionLeft + "px";
			choices[i].style.right = positionLeft + "px";

			choices[i].style.visibility = "visible";
		}
	}


}

var addPIc = document.getElementsByClassName("addPIc");

	var shirts = $(".shirt");



for (var i=0 ; i < addPIc.length ; i++ )
{
  var button = addPIc[i];
	var shirt_picker = new ImageSwitcher(shirts);
	button.addEventListener("mousedown" , event => {
console.log(event.target.name);
	 var i= Number(event.target.name);
	  shirt_picker.showpic(i);

	});
}



 	document.getElementById("zoomout").onclick = function() { shirt_picker.ZoomOut(); };
	document.getElementById("zoomin").onclick = function() { shirt_picker.zoomin(); };
document.getElementById("rotateYmin").onclick = function() { shirt_picker.rotateYmin(); };
document.getElementById("up").onclick = function() { shirt_picker.movePICBottom(); };
document.getElementById("down").onclick = function() { shirt_picker.movePICTop(); };
document.getElementById("left").onclick = function() { shirt_picker.movePICLeft();};
document.getElementById("right").onclick = function() { shirt_picker.movePICRight();};
document.getElementById("delete").onclick = function() { shirt_picker.Hidepic();};
	document.addEventListener("keydown" , event => {

		switch(event.keyCode) {

			case 39:

				shirt_picker.movePICRight();



				break;

				case 37:

					shirt_picker.movePICLeft();



					break;

					case 40:
						shirt_picker.movePICTop();

						break;
						case 38:
							shirt_picker.movePICBottom();

							break;


		}

	});

//BackGround *************
		bg = $("#background");


   bg[0].style.paddingLeft =20 + "px";	var leftBG= 20;
	 bg[0].style.paddingTop =20 + "px";	var topBG= 20;
   bg[0].style.width=900 + "px"; var widthBG= 900;
   bg[0].style.height=500 + "px"; var heightBG= 500;




});
