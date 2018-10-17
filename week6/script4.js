var tasks = document.querySelectorAll("tasks");


for (var i = 0; i < tasks.length; i++) {
    tasks[i].addEventListener('click', f);
    console.log(30);
}
function f() {
    
    this.event.currentTarget.dataset.status = "done";
}