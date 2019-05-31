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
        color:#D2B48C;
        text-decoration:underline;
    }
    #about{
        color: beige;
    }
    #contact{
        color: beige;
    }
    
    td{      
          width: 60px;
          height: 60px;
          color: bisque;
          background-repeat: no-repeat;
          background-position:center;
      } 
table{    
          margin-top: 100px;
          margin-left: 12%;
          float:left;
          border-collapse: separate; /* Способ отображения границы */ 
          border-spacing: 0px 0px; /* Расстояние между ячейками */ 
    margin-bottom: 90px;
      }
#myTBL input{
        padding: 20%;
        border-radius: 10px;
        color: bisque;
        background-color: dimgrey;
    outline: none;
    }
tbody tr:hover {
   }
#myTBL input:hover {
    
}
    
    .title1 {
    /* Чтобы спрятать часть линий, которые 
    ** будут вылазить за пределы блока */
    overflow: hidden;
    /* Выравнивание заголовка по центру, 
    ** можно использовать left, right */
    text-align: center;
    /* Тут можно добавить другие стили для заголовка */
    font-size: 20px;
}
            .title1{
                margin-left: 25%;
                 margin-right: 25%;
                margin-top: 3%;
                padding-top: 2px;
                
            }
.title1 span {
    /* Стили тега обертки для заголовков 
    ** в несколько строк */
    display: inline-block;
    vertical-align: middle;
    
}
.title1:before,
.title1:after {
    /* Обязательно указываем пустое свойство content, 
    ** иначе псевдоэлементы не появятся на сайте */
    content: "";
    /* Указываем что наши линии будут строчно-блочные и 
    ** выравнивание по высоте - по центру */
    display: inline-block;
    vertical-align: middle;
    /* Задаем ширину 100% и выбираем высоту линии, 
    ** в нашем примере она равна 4 пикселям */
    width: 100%;
    height: 8px;
    /* Добавляем цвет для линии */
    background-color: beige;
    /* Добавляем пседоэлемантам возможность изменить 
    ** позицию линии, для создания отступов от текста */
    position: relative;
}
.title1:before {
    /* Смещаем левую линию на 100% влево, чтобы линия 
    ** встала рядом с текстом слева */
    margin-left: -100%;
    /* Указываем в пикселях отступ линии от текста заголовка */
    left: -14px;
}
.title1:after {
    /* Смещаем правую линию на 100% вправо, чтобы 
    ** линия встала рядом с текстом справа */
    margin-right: -100%;
    /* Указываем в пикселях отступ линии от текста заголовка */
    right: -14px;
}
   
    #cost1{
        position: absolute;
    }

    h2{
        padding-top: 3%;
        text-align: center;
        color: bisque;
    }
    
    .title{
        margin-top: 3%;
        color:beige;
    }
    .Zal{
    
    }
</style>

<div class="title">
             <span>Стоимость сеансов </span>
             </div>


<h2>Зал "Париж"</h2>



<table id="myTBL">
  <div class="title1">
             <span>Экран </span>
    </div>
    

    
    
<div id="Zal">
    <table id="myTBL">

          <tr id="e" >
              
              <td id="111" style="width: 100px;">Зона 1</td>
              <td></td>
              <td   ><input id="1" type="button" value="1" disabled></td>
              <td   ><input id="2" type="button" value="2" disabled ></td>
              <td></td>
              <td   ><input id="3" type="button" value="3" disabled></td>
              <td   ><input id="4" type="button" value="4" disabled></td>
             <td></td>
              <td   ><input id="5" type="button" value="5" disabled></td>
              <td   ><input id="6" type="button" value="6" disabled></td>
              <td></td>
              <td>100 грн.</td>
          </tr>
    <tr >
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    
           <tr id="ew" >
            <td id="222" rowspan="2">Зона 2</td>
               <td   > <input id="7" type="button" value="1" disabled></td>
              <td   ><input id="8" type="button" value="2" disabled></td>
              <td   ><input id="9" type="button" value="3" disabled></td>
              <td   ><input id="10" type="button" value="4" disabled></td>
              <td   ><input id="11" type="button" value="5" disabled></td>
              <td   ><input id="12" type="button" value="6" disabled></td>
              <td   ><input id="13" type="button" value="7" disabled></td>
              <td   ><input id="14" type="button" value="8" disabled></td>
              <td   ><input id="15" type="button" value="9" disabled></td>
               <td   ><input id="16" type="button" value="10" disabled></td>
               <td  rowspan="2">  100 грн.</td>
              
          </tr>
           <tr id="tr3">
            
             <td   ><input id="17" type="button" value="1" disabled></td>
              <td   ><input id="18" type="button" value="2" disabled></td>
              <td   ><input id="19" type="button" value="3" disabled></td>
              <td   ><input id="20" type="button" value="4" disabled></td>
              <td   ><input id="21" type="button" value="5" disabled ></td>
              <td   ><input id="22" type="button" value="6" disabled></td>
              <td   ><input id="23" type="button" value="7" disabled></td>
              <td   ><input id="24" type="button" value="8" disabled></td>
              <td   ><input id="25" type="button" value="9" disabled></td>
               <td   ><input id="26" type="button" value="10" disabled></td>
              
          </tr>
<tr >
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
        
           <tr id="tr4">
               <td id="444">Зона 3</td>
            <td></td>
              <td   ><input id="27" type="button" value="1" disabled></td>
              <td   ><input id="28" type="button" value="2" disabled></td>
             <td></td>
              <td   ><input id="29" type="button" value="3" disabled></td>
              <td   ><input id="30" type="button" value="4" disabled></td>
             <td></td>
              <td   ><input id="31" type="button" value="5" disabled ></td>
              <td   ><input id="32" type="button" value="6" disabled></td>
              <td></td>
               <td  >100 грн.</td>
               
          </tr>
          
          </table>
    
</div>
    <br>

<?php
    //Подключение подвала
    require_once("footer.php");
?>