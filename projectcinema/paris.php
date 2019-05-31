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
              <td   ><input id="2" type="button" value="2" onclick="func(this.id,e)"></td>
              <td></td>
              <td   ><input id="3" type="button" value="3" onclick="func(this.id,e)"></td>
              <td   ><input id="4" type="button" value="4" onclick="func(this.id,e)"></td>
             <td></td>
              <td   ><input id="5" type="button" value="5" onclick="func(this.id,e)"></td>
              <td   ><input id="6" type="button" value="6" onclick="func(this.id,e)"></td>
              <td></td>
          </tr>
           <tr id="ew" >
            <td id="222">2</td>
              <td   ><input id="7" type="button" value="1" onclick="func(this.id,ew)"></td>
              <td   ><input id="8" type="button" value="2" onclick="func(this.id,ew)"></td>
              <td   ><input id="9" type="button" value="3" onclick="func(this.id,ew)"></td>
              <td   ><input id="10" type="button" value="4" onclick="func(this.id,ew)"></td>
              <td   ><input id="11" type="button" value="5" onclick="func(this.id,ew)"></td>
              <td   ><input id="12" type="button" value="6" onclick="func(this.id,ew)"></td>
              <td   ><input id="13" type="button" value="7" onclick="func(this.id,ew)"></td>
              <td   ><input id="14" type="button" value="8" onclick="func(this.id,ew)"></td>
              <td   ><input id="15" type="button" value="9" onclick="func(this.id,ew)"></td>
               <td   ><input id="16" type="button" value="10" onclick="func(this.id,ew)"></td>
              
          </tr>
           <tr id="tr3">
               <td id="333">3</td>
             <td   ><input id="17" type="button" value="1" onclick="func(this.id,tr3)"></td>
              <td   ><input id="18" type="button" value="2" onclick="func(this.id,tr3)"></td>
              <td   ><input id="19" type="button" value="3" onclick="func(this.id,tr3)"></td>
              <td   ><input id="20" type="button" value="4" onclick="func(this.id,tr3)"></td>
              <td   ><input id="21" type="button" value="5" onclick="func(this.id,tr3)"></td>
              <td   ><input id="22" type="button" value="6" onclick="func(this.id,tr3)"></td>
              <td   ><input id="23" type="button" value="7" onclick="func(this.id,tr3)"></td>
              <td   ><input id="24" type="button" value="8" onclick="func(this.id,tr3)"></td>
              <td   ><input id="25" type="button" value="9" onclick="func(this.id,tr3)"></td>
               <td   ><input id="26" type="button" value="10" onclick="func(this.id,tr3)"></td>
              
          </tr>
           <tr id="tr4">
               <td id="444">4</td>
            <td></td>
              <td   ><input id="27" type="button" value="1" onclick="func(this.id,tr4)"></td>
              <td   ><input id="28" type="button" value="2" onclick="func(this.id,tr4)"></td>
             <td></td>
              <td   ><input id="29" type="button" value="3" onclick="func(this.id,tr4)"></td>
              <td   ><input id="30" type="button" value="4" onclick="func(this.id,tr4)"></td>
             <td></td>
              <td   ><input id="31" type="button" value="5" onclick="func(this.id,tr4)"></td>
              <td   ><input id="32" type="button" value="6" onclick="func(this.id,tr4)"></td>
              <td></td>
               
          </tr>
          
          </table>
                    
      


<?php
    //Подключение подвала
    require_once("footer.php");
?>