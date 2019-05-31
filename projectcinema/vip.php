<?php
    //Подключение шапки
    require_once("header.php");
 require_once("bd.php");

?>
<style>
   
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
      }
    #myTBL input{
        padding: 20%;
    }
  tbody tr:hover {
    background: #f3bd48; /* Цвет фона при наведении */
    color: #fff; /* Цвет текста при наведении */
   }
   #myTBL input:hover {
    background: red;
}
    #myTBL input{
       border-radius: 10px;
        color: bisque;
        background-color: dimgrey;
    }
    #res {
         color: bisque;
        margin-top: 100px;
   float:left;
      
    }
    #film{
      float: right;
       margin-right: 200px;
        margin-top: 70px;
        
    }
    #tex{
       color: bisque;
        background: #696969;
        border: none;
    }

</style>
 

<h2>Vip-зал</h2>
<table id="myTBL">
          <tr id="e" >
              <td id="111" style="width: 100px;">1</td>
              <td></td>
              <td   ><input id="1" type="button" value="1" onclick="func(this.id,e)"></td>
              <td   ></td>
              
              <td   ><input id="2" type="button" value="2" onclick="func(this.id,e)"></td>
              <td   ><input id="3" type="button" value="3" onclick="func(this.id,e)"></td>
             <td></td>
              <td></td>
          </tr>
           <tr id="ew" >
            <td id="222">2</td>
               <td></td>
              <td   ><input id="4" type="button" value="4" onclick="func(this.id,ew)"></td>
              <td   ><input id="5" type="button" value="5" onclick="func(this.id,ew)"></td>
              <td   ><input id="6" type="button" value="6" onclick="func(this.id,ew)"></td>
              <td   ><input id="7" type="button" value="7" onclick="func(this.id,ew)"></td>
               <td></td>
          </table>
          
      


<?php
    //Подключение подвала
    require_once("footer.php");
?>