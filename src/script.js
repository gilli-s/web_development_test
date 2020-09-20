
const
  xxx = document.querySelector("#r1"),
  yyy = document.querySelector("#r1out"),
  //к сожалению дублирование кода
  xxx1 = document.querySelector("#r2"),
  yyy1 = document.querySelector("#r2out");

r1.oninput = () => yyy.value = xxx.value;
r1out.oninput = () => xxx.value = yyy.value;
r2.oninput = () => yyy1.value = xxx1.value;
r2out.oninput = () => xxx1.value = yyy1.value;

//Датапикер

$( function() {
    $( "#datepicker" ).datepicker();
  } );
  