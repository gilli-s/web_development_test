
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
//Valid переменные 
var valid = {
    date: false,
    sumDeposit: false,
    sumReplenishDeposit: false,

}

//Датапикер

$( function() {
    $( "#datepicker" ).datepicker();
  } );

//проверка полей
function checkDatepicker(obj) {
	var currentDate = new Date();//текущая дата
	var pickerDate = new Date(obj.value);// выбранная дата
	if(pickerDate > currentDate){
		valid.date = false;
		turnBorder(valid.date , obj.name)
	}
	else{
		valid.date = true;
		turnBorder(valid.date , obj.name)
	}
	//alert();

}


function checkSumDeposit(obj){
	if(Number(obj.value) >=1000 && Number(obj.value) <= 3000000  ){
		valid.sumDeposit = true;
		turnBorder(valid.sumDeposit , obj.name);
	}
	else{
		valid.sumDeposit = false;
		turnBorder(valid.sumDeposit , obj.name);
	}
}
function checkSumDeposit1(obj){
	valid.sumDeposit = true;
	turnBorder(true , 'sumDeposit');
}


function checkSumReplenishDeposit(obj){
	if(Number(obj.value) >=1000 && Number(obj.value) <= 3000000  ){
		valid.sumReplenishDeposit = true;
		turnBorder(valid.sumReplenishDeposit , obj.name);
	}
	else{
		valid.sumReplenishDeposit = false;
		turnBorder(valid.sumReplenishDeposit , obj.name);
	}
}
function checkSumReplenishDeposit1(obj){
	valid.sumReplenishDeposit = true;
	turnBorder(true , 'sumReplenishDeposit');
}


function turnBorder(trig, name) {
    if (trig) {
        document.mainForm[name].style.border = "2px solid #b9ef35";
    } else {
        document.mainForm[name].style.border = "2px solid #EB5017";
    }
    buttonCheck();
}

function buttonCheck(){
	document.mainForm.calc.disabled = false;
	for(var key in valid){
		if(!valid[key]) document.mainForm.calc.disabled = true;
	}
	
}
  
//ajax запрос
$(document).ready(function()
{
	$('form').submit(function(event) {
  	event.preventDefault();
  	//debugger;
  	var _date = ;
  	var _sumDeposit = ;
  	var _termDeposit = ;
  	var _replenishDeposit = 
  	var _sumReplenishDeposit = ;
  	//alert($.isNumeric($('#r1out').val()));
  	//if()
  	 $.ajax({ 
      url: $(this).attr('action'), 
      method: $(this).attr('method'),
      data: { date: $('#datepicker').val(), 
	      sumDeposit : $('#r1out').val(), 
	      termDeposit: $('.years').val(), 
	      replenishDeposit: $('input[name=fill]:checked').val(),
	      sumReplenishDeposit: $('#r2out').val()  
	    },
      contentType:false,
      cache:false,
      processData: false,
       	success: function(data) {
 				alert(data); // Возвращаемые данные выводим в консоль
       } 
 		});
	});
}); 