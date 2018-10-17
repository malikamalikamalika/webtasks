
let divItems =document.getElementById("tasks").getElementsByTagName("div");

for (let i = 0;i<divItems.length;i++){
	divItems[i].getElementsByTagName("button")[0].addEventListener("click", f);
}
function f() {
	event.currentTarget.parentElement.dataset.status="done";
}

