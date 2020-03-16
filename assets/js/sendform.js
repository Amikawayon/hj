let myButton = document.getElementById('btn-send');

myButton.addEventListener('click', function(e) {


let form = document.getElementById('form');
let { msg, name, email } = form.elements;
// if ((name.value.length <6 && (alert('Количество символов в имени должно быть больше 5';))) || (msg.value.length <5 && (alert('В отзыве должно быть больше 5 символов';)))) {
// e.preventDefault();}
let hidden = document.getElementById('hidden');


async function ajaxFunc() {
  let response = await fetch('/store.php', {
  	method: "POST",
  	body: new FormData(form),
  });

  let userComment = await response.json();
   let output = document.getElementById('output');
   output.insertAdjacentHTML('afterBegin',
   	`<tr><td colspan='2'>${userComment[0]}</td><td>${userComment[1]}</td><td>${userComment[2]}</td></tr>`);


   }
   ajaxFunc();



});