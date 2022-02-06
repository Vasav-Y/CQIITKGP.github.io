var aside= document.getElementById("mainAside");
var obj= document.getElementById("cntnt");
var obje= document.getElementById("cntn");
var objec= document.getElementById("cnt");
var object= document.getElementById("cn");
var objects= document.getElementById("c");
var bjects= document.getElementById("b1");
var asideOn = false;

document.getElementById("btton").addEventListener("click",function(){
	
	if(asideOn){
		aside.classList.toggle("Aside");
		aside.style.left="-200px";
		asideOn=false;
	}else{
		aside.classList.toggle("Aside");
		aside.style.left="0px";
		asideOn=true;
	}
	
	obj.classList.toggle("mar");
	obje.classList.toggle("mar");
	objec.classList.toggle("mar");
	object.classList.toggle("mar");
	objects.classList.toggle("mar");
	bjects.classList.toggle("mar");
	
});

document.getElementById("btton2").addEventListener("click", function(){
	var rightL = document.getElementById("rlist");
	// var switched = false;
	if(rightL.style.display === "none"){
		rightL.style.display = "block";
	}
	else{
		rightL.style.display = "none";
	}
	// rightL.classList.toggle("slide-in-right");
})