let cars = [{brand:'Toyota',model:'Camry','year':1999,'price':20000,image_url:"https://media.ed.edmunds-media.com/toyota/camry/2016/ot/2016_toyota_camry_LIFE1_ot_902163_1280.jpg"},{brand:'BMW',model:'X6',year:2014,price:25000,image_url:"https://media.ed.edmunds-media.com/bmw/x6/2016/oem/2016_bmw_x6_4dr-suv_xdrive50i_fq_oem_5_1280.jpg"},{brand:'Daewoo',model:'Nexia',year:2007,price:15000,image_url:"https://s.auto.drom.ru/i24207/c/photos/fullsize/daewoo/nexia/daewoo_nexia_695410.jpg"}];
var car  = document.querySelector("#cars");
var a = false,
	b = false,
	c = false;

function moneyFn(){
	items = parseInt(document.getElementById("items").textContent);
	items++;
	var model = this.parentNode.querySelectorAll("img")[0].id;
	var total = parseInt(document.getElementById("sum").textContent);
	
	if ((model == "Toyota") && (a == false)){
		total += 20000;
		a = true;
		event.currentTarget.setAttribute("src","dollar.png");
	} else if ((model == "BMW") && (b == false)){
		total += 25000;
		b = true;
		event.currentTarget.setAttribute("src","dollar.png");
	} else if ((model == "Daewoo") && (c == false)){
		total += 15000;
		c = true;
		event.currentTarget.setAttribute("src","dollar.png");
	} else if (model == "Toyota") {
		total -= 20000;
		items -= 2;
		a = false;
		event.currentTarget.setAttribute("src","basket.png");
	} else if (model == "BMW") {
		total -= 25000;
		items -= 2;
		b = false;
		event.currentTarget.setAttribute("src","basket.png");
	} else {
		total -= 15000;
		items -= 2;
		c = false;
		event.currentTarget.setAttribute("src","basket.png");
	}
	document.getElementById("sum").innerHTML = total;
	document.getElementById("items").innerHTML = items;
}

for(var i=0;i<cars.length;i++){
	var basket = document.createElement('img');
	var div = document.createElement('div');
	var imcar = document.createElement('img');
	imcar.id = cars[i].brand;
	imcar.src = cars[i].image_url;
	basket.src = "basket.png";
	basket.id = "basket";
	imcar.style = "position:relative;width:200px;margin:5px;";
	var name = cars[i].brand+" "+cars[i].model;
	
	var sp = document.createElement("span");
	
	sp.textContent = name;
	sp.style = "position:relative;right:200px;top:10px;";

	div.appendChild(imcar);
	div.appendChild(sp);
	basket.style = "position:relative;top:33px;position:fixed;z-index:1;width:30px;height:30px;background-color:white;margin-left:-127px;";
	if(i == 1)
	{
		basket.style = "position:relative;top:33px;position:fixed;z-index:1;width:30px;height:30px;background-color:white;margin-left:-98px;";
	}
	div.appendChild(basket);
	car.appendChild(div);
}

const basim = document.querySelectorAll('#basket');



for (let i = 0; i < basim.length; i++) {
	basim[i].addEventListener('click', moneyFn);
}

