<?php include 'config.php'; 

$t_s_p1 = "What I live by is";
$t_s_p2 = '{?programming/}';
$laug = 'RU';
setcookie("lg", "RU");
if ($_COOKIE['lg'] == "RU") {

			$laug = 'RU';
		$t_s_p1 = "What I live by is";
		$t_s_p2 = '{?programming/}';
	}else{
		$laug = 'AN';
		$t_s_p1 = "то, чем я живу";
		$t_s_p2 = '{?программирование/}';
}


if (isset($_POST['laugh'])) {
	if ($_COOKIE['lg'] == "RU") {
			$laug = 'AN';
			$t_s_p1 = "то, чем я живу";
			$t_s_p2 = '{?программирование/}';
			setcookie("lg", "AN");
	}else{
		$laug = 'RU';
		$t_s_p1 = "What I live by is";
		$t_s_p2 = '{?programming/}';
}

}


?>






<!-- прелоадер -->
<div class='preloader'>
    		<img src="media/loading.gif	" >
	</div>




<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="UTF-8">
	<meta name="viewport" >
	<title>CodeCrackerFolio</title>
	<link rel="stylesheet" type="text/css" href="index.css">


	<!-- подключение Typed.js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>

	
<div id="typed-strings">
    <span ><br><p><?php echo $t_s_p1; ?></p> <p style="color: #97D36F;font-family: Source Code Pro;font-size: 70px;font-style: normal;font-weight: 300;line-height: normal;"><?php echo $t_s_p2; ?></p></span>
    	<?php 


?>



</div>

	<!-- шрифты -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Istok+Web:wght@400;700&family=Source+Code+Pro:wght@200;300;400;500&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Source+Code+Pro:wght@200;300;400;500&display=swap" rel="stylesheet">
</head>
<body style="overflow-x: hidden;margin: 0;padding: 0;">
	<img src="media/fon1.png" style="position: absolute; z-index: -1; width: 100vw;" alt="">
	




<div class="z z1" style="height: 53vw;">

	<!-- смена языка -->
	<div class="laug"><form method="post" action="index.php"><input id="myButton1"type="submit" name="laugh" value="<?php echo $laug; ?>"></form></div>


	<!-- самопишущий текст -->
<div class="text-typing">
    <span id="typed"style="color: #97D36F;text-align: center;font-family: Istok Web;font-size: 70px;font-style: normal;font-weight: 700;line-height: normal;top: 1000px;"></span>
</div>

</div>



<div class="z z2" style="height: 107vw;margin-top: 19vw;">
	
</div>



<div class="z z3" style="height: 148vw;margin-top: 15vw;">
	
</div>



<div class="z z4" style="margin-top: 20vw;height: 100%;
">
	
</div>
















		<!-- скрипт прелоадера -->
	<script>
		window.onload = function() {
    document.querySelector('.preloader').classList.add("preloader-remove");
};
	</script>

	<!-- скрипт Typed.js -->
	<script type="text/javascript">
		let typed = new Typed('#typed', { // Тут id того блока, в которм будет анимация
    stringsElement: '#typed-strings', // Тут id блока из которого берем строки для анимации
    typeSpeed: 100, // Скорость печати
    startDelay: 500, // Задержка перед стартом анимации
    backSpeed: 0, // Скорость удаления
    loop: false // Указываем, повторять ли анимацию
});
	</script>


	<!-- скрипт смена языка -->
	<!-- <script type="text/javascript">
		function change() // no ';' here
{
    var btn = document.getElementById("myButton1");
    var h = document.getElementById("h");
    var typed_strings = document.getElementById("typed-strings")
    if(btn.innerText=="RU"){
       btn.innerText="AN";
      }
    else{

      btn.innerText="RU";
             h.id="typed-strings";
      typed_strings.id="h";
      
      }
}
	</script> -->


	<!-- стили -->
	<style>
	
   </style>


</body>
</html>