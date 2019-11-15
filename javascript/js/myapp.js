//debugging
console.log('Hi');

//objects
var car = {
	color : "RED",
	speed : 200,
	drive : function () {
		return "DRIVE";
	}
}
//Arrays

var fruits = [
	"Mango",'Apple','watermellon'
];

//object inside the objects : we can embede the object inside the object 
//or object inside array visa versa
var car1 = {
	make : "Volvo",
	speed : 180,
	engine : {
		size : 2.0,
		fuel : "Petrol",
		Piston : [ { make: "BMW"}, {make: "benz"}			
		]
	}

};

// array embaed with arrays and objects

var shopping = [ "electronics", 
				"fashion",
                [ "men","womens",	 
                {kids: "babies"} ]
               ];	

 //Function callable object

 function names() {
 	var fullName = "Vaishnavi Raghu";
 	console.log(fullName);
 	return fullName;
 }
 //call by name();

 function companyName() {
 	var company;

 	return company = "compassites";
 }
 //call by companyName()


 //callable object inside the callable object

 function Family() {
 	var familyName = "Masalti";

 	function person(name) {
 		return "Mr/Mrs belongs " + name + " family."
 	}
 	return person(familyName);
 }

//function with obj
 function name(fullName) {

 	return fullName.firstName + " " + fullName.lastname;
 }

console.log(name({firstName : "Vaishnavi", lastname : "Raghu"}));

//function with fuctions
function things(material) {
	return material();
}
console.log(things(function(){return "Cricket bats balls"}));

//or
var obj = things(function() { return "volley ball";})

console.log(obj);

 var array = [
 	this,
 	function(){
 		return this;
 	}
 ]

// constructor
var quality;
var quantity;
function Apple(x,y,color,price)
{
	this.quality = x;
	this.quantity = y;
	this.color = color;
	this.price = price;
}

Apple.prototype = {
	eat : function(){ return this ;} ,
	throw : function(){ return "throw apple";}
}
var apple1 = new Apple(10,20,"Red", '200');

//For loop (for in will increments automatically) 
var students = ['Vaishnavi','Preethi','Gayathri','Poonam'];

for(var i=0 in students) {
	console.log(students[i]);
}



// DOM ELEMENTS

var newText = document.getElementById('pId');
console.log(newText);
newText.innerText = "Welocome to JS";




var spanH1 = document.querySelectorAll('h1 span')[0];
//or we can use h1>span
console.log(spanH1);

spanH1.innerHTML="hi";

//Changing elemnts style

var el = document.getElementById('pId');
console.dir(el);
el.style.background = "red";
el.style.color ="white";
el.style.width = "250px";

//Another method

el.style.cssText = "background:blue; color:yellow; font-size:25px";
el.style.cssText += "height:200px; width:100%";