
<?php
    //Подключение шапки
    require_once("header.php");
 require_once("bd.php");
?>
<style>
body {
	
}
   
  #main{
          color:#D2B48C;
      text-decoration:underline;
    }
    
    #rasps{
     
        color: beige;
    }
    #cost{
        color: beige;
    }
    #about{
        color: beige;
    }
    #contact{
        color: beige;
    }

  
    .title{
        clear: left;
        color:#FFF8DC;
        font-family: Arial;
    }
    #b{
        clear:left;
    }
.carousel-items, .carousel-labels {
	margin: 0;
	padding: 0;
	list-style: none;
	display: block;
}
.carousel-item {
	display: block;
	float: left;
}

.carousel-wrapper {
  
	width: 100%;
	position: relative;
	padding-bottom: 30%;
	background-color: #eee;
	overflow: hidden;
}
.carousel-items {
	width: 500%;
	height: 100%;
	position: absolute;
	left: 0;
	top: 0;
	z-index: 1;
	transition: left .15s ease-out;
	-o-transition: left .15s ease-out;
	-ms-transition: left .8s ease-out;
	-moz-transition: left .8s ease-out;
	-webkit-transition: left .8s ease-out;
}
.carousel-item {
	width: 20%;
	height: 100%;
	color: white;
}

.carousel-labels {
	position: absolute;
	z-index: 2;
	left: 0;
	bottom: 0;
	height: 20px;
	width: 100%;
	padding: 10px 0;
	text-align: center;
}
.carousel-selector {
	display: none;
}
.carousel-label {
	display: inline-block;
}
.carousel-label label {
	width: 20px;
	height: 20px;
	border-radius: 10px;
	background-color: #696969;
	display: block;
	cursor: pointer;
}

#slide1:checked ~ .carousel-items {
	left: 0;
}
#slide1:checked ~ .carousel-labels .carousel-label:nth-child(1) label {
	background-color: black;
}
#slide2:checked ~ .carousel-items {
	left: -100%;
}
#slide2:checked ~ .carousel-labels .carousel-label:nth-child(2) label {
	background-color: black;
}
#slide3:checked ~ .carousel-items {
	left: -200%;
}
#slide3:checked ~ .carousel-labels .carousel-label:nth-child(3) label {
	background-color: black;
    }
    
    #slide4:checked ~ .carousel-items {
	left: -300%;
}
#slide4:checked ~ .carousel-labels .carousel-label:nth-child(4) label {
	background-color: black;
}
        #slide5:checked ~ .carousel-items {
	left: -400%;
}
#slide5:checked ~ .carousel-labels .carousel-label:nth-child(5) label {
	background-color: black;
}
    
    
     .sidebar {
         
    float:left;
   position: relative;
      margin-right:  3%;
    
   }
     #film{
        margin-left: 17%;
         text-align: center;
         
    }
    
    .new{
        margin-top: 50px;
        background-color: #808080;
        height: 50em;
        padding-top: 30px;
        padding-right: 0;
    }
    
    #ToFilm{
        text-decoration: none;
        color:beige;
        line-height: 1;
 display: inline-block;
        font-family: Arial;
        font-size: 130%;
    }
   #ToFilm:after {
    display: block;
    content: "";
    height: 2px;
    width: 0%;
    background-color:beige;
    transition: width .3s ease-in-out;
}
    
    
   #ToFilm:hover:after,
 #ToFilm:focus:after {
    width: 100%;
}
    
    .leftimg:hover{
        opacity: 0.4;
       
    }
</style>
<div id="content">
   
     <div id="adminf">
    </div>
   <br>
   <div class="carousel-wrapper">
	<input type="radio" checked="checked" id="slide1" class="carousel-selector" name="carousel-selector" />
	<input type="radio" id="slide2" class="carousel-selector" name="carousel-selector" />
	<input type="radio" id="slide3" class="carousel-selector" name="carousel-selector" />
<input type="radio" id="slide4" class="carousel-selector" name="carousel-selector" />
       <input type="radio" id="slide5" class="carousel-selector" name="carousel-selector" />
       
       
	<ul class="carousel-items">
		<li class="carousel-item carousel-item-blue">
			<img src="picture/3904.jpg">
		</li>

		<li class="carousel-item ">
			<img src="picture/3903.jpg">
		</li>

		<li class="carousel-item ">
			<img src="picture/9.jpg">
		</li>
        <li class="carousel-item ">
			<img src="picture/our-cinema.jpg">
		</li>
         <li class="carousel-item ">
			<img src="picture/3905.jpg">
		</li>
	</ul>

	<ul class="carousel-labels">
		<li class="carousel-label">
			<label for="slide1"></label>
		</li>
		<li class="carousel-label">
			<label for="slide2"></label>
		</li>
		<li class="carousel-label">
			<label for="slide3"></label>
		</li>
        <li class="carousel-label">
			<label for="slide4"></label>
		</li>
        <li class="carousel-label">
			<label for="slide5"></label>
		</li>
	</ul>
</div>
    <br>
    <div class="title">
             <span>СЕГОДНЯ в Golden Cinema </span>
             </div>
    
    <br>
    <br>
        <?php
$query = 'SELECT DISTINCT id_f FROM seans WHERE data_s=CURDATE() and dayi=0';
    
    $result = mysqli_query($link, $query)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result. 
		$resul = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP
    $idf=$resul['id_f'];
     
    
   
echo "<div id='film'>";
do {
                     $idf=$resul['id_f'];
   $query1 = 'SELECT name_film, photo_film FROM film WHERE id_f="'.$idf.'" ';
    
    $result1 = mysqli_query($link, $query1)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result. 
		$resul1 = mysqli_fetch_assoc($result1); //преобразуем ответ из БД в нормальный массив PHP
    $film=$resul1['name_film'];
    $film_ph=$resul1['photo_film'];
                   
    do
    {
        
   echo " <div class='sidebar'>";
   
       
       echo  " <a href='film.php?idt=$idf' id='ToFil'>   <img src='$film_ph' class='leftimg' width='210' height='300'> </a>";?>
     <p>  <a href="film.php?idt=<?=$idf?>" id="ToFilm">  <?=$film?> </a></p>
        
        
        
      
  <?php  }
        while ($resul1 = mysqli_fetch_assoc($result1));
    
echo " </div>";   
                 } while ($resul = mysqli_fetch_assoc($result)) ;
      echo "</div>";       
?>
</div>
  <br id="b">
<br id="b">


<div class="new">
    <div class="title">
             <span>СКОРО в Golden Cinema </span>
             </div>
    
   
    

<br>
    <br>
        <?php
$query = 'SELECT DISTINCT id_f FROM seans WHERE data_s > CURDATE()';
    
    $result = mysqli_query($link, $query)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result. 
		$resul = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP
    $idf=$resul['id_f'];
     
    
   
echo "<div id='film'>";
do {
                     $idf=$resul['id_f'];
   $query1 = 'SELECT name_film, photo_film FROM film WHERE id_f="'.$idf.'" ';
    
    $result1 = mysqli_query($link, $query1)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result. 
		$resul1 = mysqli_fetch_assoc($result1); //преобразуем ответ из БД в нормальный массив PHP
    $film=$resul1['name_film'];
    $film_ph=$resul1['photo_film'];
                   
    do
    {
        
   echo " <div class='sidebar'>";
   
       
       echo  " <a href='film.php?idt=$idf' id='ToFil'>   <img src='$film_ph' class='leftimg' width='210' height='300'> </a>";
     ?>
          <p>  <a href="film.php?idt=<?=$idf?>" id="ToFilm">  <?=$film?> </a></p>
        
        
      
    <?php }
        while ($resul1 = mysqli_fetch_assoc($result1));
    
echo " </div>";   
                 } while ($resul = mysqli_fetch_assoc($result)) ;
      echo "</div>";       
?>
</div>
<?php
    //Подключение подвала
    require_once("footer.php");
?>