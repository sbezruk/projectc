<?php
    //Подключение шапки
    require_once("header.php");
 require_once("bd.php");


?>

<style>
#main{
          color: beige;
    }
    
   
    #rasps{
     
        color: beige;
    }
    #cost{
        color: beige;
    }
    #about{
        color:#D2B48C;
        text-decoration:underline;
    }
    #contact{
        color: beige;
    }

    .title{
        color: beige;
        margin-top: 3%;
    }
    .image{
        margin-top: 3%;
      padding-right: 5%;
    }
    .about{
        margin-left: 12%;
        margin-right: 12%;
    }
    .zagolovoc{
        font-family: Arial;
        font-size: 150%;
        color: bisque;
    }
    .resume{
        font-family: Arial;
        font-size: 120%;
        color: beige;
        line-height: 130%;
    }
</style>
<div class="title">
<span>Кинотеатр GOLDEN Cinema</span>
</div>

<div class="image">
<img src="picture/our-cinema.jpg">
</div>
<div class="about">
<p class="zagolovoc">Друзья! В Городе Х открылся новый кинотеатр GOLDEN Cinema!</p>

<p class="resume">Мы рады приветствовать Вас у себя! Мы рады людям любого возрастаи любых интересов, потому что только у нас Вы можете насладиться просмотром не только самыми последними новинками кино но и посмотреть любимые фильмы, которые хочеться пересматривать еще и еще. Наши мягкие кожаные кресла раскладываются так, чтобы Вы могли расположиться с царским комфортом. Новейшая кинотехнология Real D и объемный звук, прекрасный сервис и демократичная стоимость билетов - все это GOLDEN Cinema. В нашем зале «Париж», мы предлагаем уникальную возможность насладиться шедеврами кино, включая язык оригинала, вместе с друзьями и окунуться в романтическую атмосферу кино. В нашем ресторане, который находиться на первом этаже, Вы можете отведать блюда французкой кухни и насладиться классической музыкой.</p>

<p class="resume"> В GOLDEN Cinema Вы всегда в главной роли!</p>
</div>
<?php
    //Подключение подвала
    require_once("footer.php");
?>