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
        color: beige;
    }
    #contact{
        color:#D2B48C;
        text-decoration:underline;
    }
    .title{
        color:beige;
        margin-top: 2%;
    }
    
    #map {
        width: 100%;
        height: 400px;
        background-color: grey;
        margin-top: 3%;
        
      }
    #zag{
        font-family: Arial;
        font-size: 18pt;
        color: bisque;
    }
    #text{
        font-family: Arial;
        font-size: 13pt;
        color: beige;
    }
    
    #contt{
        margin-left: 12%;
        float: left;
        
    }
    #rab{
        margin-left: 32%;
        position: absolute;
        float: left;
        
        
    }
    #ph{
        margin-left: 52%;
    position: absolute;
        
        
    }
    
    #c{
        margin-top: 3%;
        
        text-align: center;
        margin-left: 10%;
        margin-bottom: 5%;
    }

</style>
<div class="title">
<span>Контакты</span>
</div>

<div id="map">

</div>
<script>
      function initMap() {
        var uluru = {lat: 49.9895274, lng: 36.29247};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjbIowq5RW0HWZeTlj0RB7SnLjb9Kaz8g&callback=initMap">
    </script>
<div id="c">
<div id="contt">
<p id="zag">Адрес</p>
    <p id="text">Город Х, ул. Костюринская, 13,</p> 
    <p id="text">ТРЦ GOLDEN 3 этаж</p>
</div>
<div id="rab">
    <p id="zag">Режим работы</p>
    <p id="text">Понедельник - Воскресение</p> 
    <p id="text">10:00 - 23:00</p>
</div>
<div id="ph">
    <p id="zag">Телефон</p>
    <p id="text">+38 066 894-77-33</p>
    <p id="text">+38 025 894-66-33</p>
</div>
</div>
<br>
<br>
<?php
    //Подключение подвала
    require_once("footer.php");
?>