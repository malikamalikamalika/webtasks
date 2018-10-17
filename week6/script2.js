var countries = ["Kazakhstan","Russia","USA","Malaysia"];
var city= {"Kazakhstan":["Almaty","Astana","Kyzylorda","Kokshetau"],"Russia":["Moscow","Omsk","Vladi Vostok"],"USA":["Los Angeles","New-York","Washington DC"],"Malaysia":["Kuala Lampur","Cyber Jaya","Teega Puteri"]};

var one = document.querySelector("#countries");
for(var count of countries){
	var op = document.createElement("option");	
	op.textContent = count;
	one.appendChild(op);
}
function fun(){
	document.getElementById("cities").length;
	let first = event.currentTarget.value;
	let second = document.querySelector('#cities');
	var arr = city[first];
	for (var count of arr) { 
		var op1 = document.createElement('option');
		op1.textContent = count;
		second.appendChild(op1);
	}
}

one.addEventListener('change',fun);

