// a simple function that triggers alert box
function hello () {
alert("Welcome to website")

}
// a simple function to add 2 numbers
function add(){
    document.write(5+6);
}
// document.getElementById(id)
// display or like echo
// document.write
// windows.alert
// innerHTML
// console.log

//function to change the bacj=kground color of the page

function changeColor(){
    let color = document.getElementById("background").value;
    document.body.style.backgroundColor=color;
}

//function to change font color of the page
function changeFcolor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color=fcolor;
}