<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Test</title>
  </head>
  <body>
  	<div class="conteiner-fluid hat">
  		<div class="conteiner">
	  		<div class="row">
	  			<div class="col"><img src="worldBank.png" alt="" class="logo"></div>
	  			<div class="col"><span class="rightPhone phone">8-800-100-5005<br>+7(3452)522-000</span></div>
	  		</div>
  		</div>
  	</div>

  	<nav class="navbar navbar-expand-lg navbar-dark bar ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item col">
        <a class="nav-link leftli" href="#">Кредитные карты</a>
      </li>
      <li class="nav-item col">
        <a class="nav-link " href="#">Вклады</a>
      </li>
      <li class="nav-item col">
        <a class="nav-link" href="#">Дебетовая карта</a>
      </li>
      <li class="nav-item col">
        <a class="nav-link" href="#">Страхование</a>
      </li>
      <li class="nav-item col">
        <a class="nav-link" href="#">Друзья</a>
      </li>
      <li class="nav-item col">
        <a class="nav-link rightli" href="#">Интернет-банк</a>
      </li>
    </ul>
  </div>
</nav>

<!--Хлебные крошки-->
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Главная</a></li>
  <li class="breadcrumb-item"><a href="#">Вклады</a></li>
  <li class="breadcrumb-item active">Калькулятор</li>
</ol> 
<!--Калькулятор-->
 <div class="conteiner calc">
 	<h1 class="calcH1">Калькулятор</h1>
 	<form action="calc.php" method="post">
 		<div class="conteinerCalc">
	 		<div class="inlineInput">
	 			<div class="left"><span class="leftText">Дата оформления вклада</span></div>
	 			<div class="right"><input class="rightInput" type="date"></div>
	 		</div>
	 		<div class="inlineInput">
	 			<div class="left"><span class="leftText">Сумма вклада</span></div>
	 			<div class="right"><input class="rightInput" type="text"></div>
	 		</div>
	 		<div class="inlineInput">
	 			<div class="left"><span class="leftText">Срок вклада</span></div>
	 			<div class="right">
	 				<select class="years rightInput">
			    <option value="1 год">1 год</option>
			    <option selected value="2 года">2 года</option>
			    <option value="3 года">3 года</option>
			    <option value="4 года">4 года</option>
			    <option value="5 лет">5 лет</option>
   			</select>
	 			</div>
	 		</div>
	 		<div class="inlineInput">
	 			<div class="left"><span class="leftText">Пополнение вклада</span></div>
	 			<div class="right"><span class="radio"><input class="radio1" name="fill" checked type="radio">Нет</span><span><input name="fill" class="radio1" type="radio">Да</span></div>
	 		</div>
	 		<div class="inlineInput">
	 			<div class="left"><span class="leftText">Сумма пополнения вклада</span></div>
	 			<div class="right"><input class="rightInput" type="text"></div>
	 		</div>
	 		<div class="divResult">
	 			<button type="button" class="btn btn-success btnResult fontResult">Рассчитать</button>
	 			<a class="fontResult">Результат <span></span></a>
	 		</div>
 		</div>
	</form>
</div>
<!--Footer-->
<footer class="footer">
	<div class="container">
    <span class="text-muted">Кредитные карты</span>
    <span class="text-muted">Вклады</span>
    <span class="text-muted">Дебетовая карта</span>
    <span class="text-muted">Place sticky footer content here.</span>
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
