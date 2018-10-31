var buttons=document.querySelectorAll("button");
var list=JSON.stringify([
{"maker":"Toyota","model":"Camry 50","price":50000},
{"maker":"Toyota","model":"Carina","price":40000},
{"maker":"Volkswagen","model":"Tuareg","price":35000},
{"maker":"Mercedes","model":"C100","price":45000}]);
buttons[0].addEventListener('click',f);
var obj=JSON.parse(list);
function f(){
    document.querySelector("#cards").innerHTML="";
    var cars=document.getElementById("#cards");
    for(i=0;i<obj.length;i++){
        var card=document.createElement('div');
        var price=document.createElement('div');
        var name=document.createElement('div');
        card.className="card";
        price.className="price";
        name.className="title";
        var t=document.createTextNode(obj[i]['maker']+" "+obj[i]['model']);
        var text=document.createTextNode(obj[i]['price']);
        price.innerHTML=text;
        name.innerHTML=t;
        console.log(price);
        console.log(name);
        card.appendChild(price);
        card.appendChild(name);
        console.log(card);
        cars.appendChild(card);
        console.log(cars);
        
    }
}