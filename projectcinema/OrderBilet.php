<?php
session_start();
    //Подключение шапки
    require_once("header.php");
    require_once("bd.php");
//session_start();
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
    margin-bottom: 30px;
      }
    #myTBL{
        margin-bottom: 10%;
    }
#myTBL input{
        padding: 20%;
        border-radius: 10px;
        color: bisque;
        background-color: dimgrey;
    outline: none;
    }
tbody tr:hover {
    border-radius: 10px;
    background: #A9A9A9; /* Цвет фона при наведении */
    color: #fff; /* Цвет текста при наведении */
   }
#myTBL input:hover {
    background: red;
}

#res {
    color: bisque;
   padding-top: 2%;
    position: absolute;
    margin-left: 12%;
    
    }
#film{
      float: right;
      margin-right:280px;
      margin-top: 30px;
    text-align: center;
    color:antiquewhite;
    font-family: Arial;
    
    }
#tex{
        color: bisque;
        background: #696969;
        border: none;
    }

    
    
    
    #t{
        color: #FFF8DC;
        font-family: serif;
    }
    
    #td{
        margin-left: 12%;
        color: beige;
        font-family: Arial;
        text-decoration: none;
         line-height: 1;
 display: inline-block;
        
        
    }
    
    #td:after {
    display: block;
    content: "";
    height: 2px;
    width: 0%;
    background-color:beige;
    transition: width .3s ease-in-out;
}
    
    
   #td:hover:after,
 #td:focus:after {
    width: 100%;
}
    
    #rad, #mesto, #l{
        cursor: default;
        width: 8%;
        text-align: center;
        background-color: #696969;
        border: none;
        color:beige;
        font-size: 100%;
        padding-bottom: 2%;
    }
    
    #but{
        border-radius: 3px;
        padding-bottom: 1%;
        padding-top: 1%;
        padding-left: 5%;
        padding-right: 5%;
        font-family: Arial;
        font-size: 100%;
            cursor: pointer;
        outline: none;
    }
    #tex{
        color: #696969;
    }
    
    
    .title1{
                margin-left: 12%;
                 margin-right: 12%;
        position: absolute;
        margin-top: 5%;
        margin-left: 35%;
        color:beige;
        
            }
    #h{
        margin-left: 12%;
        margin-right: 38%;
        
        margin-top: 8%;
        margin-bottom: 0;
        color:beige;
        border-radius: 10px;
         height: 3px;
    }

    #myTBL input #1{
        background-color: green;
    }
    
    #inff{
        background-color: darkgray;
        padding-top: 1%;
        margin-left: 35%;
        margin-right: 35%;
    }

    #pict{
        margin-bottom: 15%;
    }
    
    #ms{
        margin-left: 12%;
        color:burlywood;
        font-size: 16pt;
        font-family: Arial;
        text-align: center;
        
    }
</style>

<?php
function article_get($link, $id_article){
        // Запрос
        $query = 'SELECT * FROM seans WHERE id_s="'.$id_article.'" ';
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));

        $article = mysqli_fetch_assoc($result);
        
        return $article;
    }
$_SESSION['s']="fsdfsf";

$i=$_GET['idt'];
$_SESSION['seans']=$_GET['idt'];

$article = article_get($link, $_GET['idt']);
$f=$article['id_f'];
$dat=$article['data_s'];
$datt=$article['time_s'];

 $today = date("Y-m-d"); 
    $timet=date("H:i"); 
//echo $timet;
 if($dat==$today and $datt<=$timet)
                $masg= "Фильм уже идет!";
?>
<br>
<br>
<span ><a href=schedule.php id="td">Вернуться к фильмам</a> </span>
 <div class="title">
             <span id="t">Зал "Париж" </span>
             </div>
    

<div id="res" name= "r" >
    <form method="post" action="bilet.php">
    <label for="rad" id="l">Ряд:</label>
 <input type="text" id="rad" name="radd">   
    
     <label for="mesto" id="l">Место:</label>
 <input type="text" id="mesto" name="mesto">  
  <input  type="submit" value="КУПИТЬ" id="but" > 
        </form>
</div>
<input type="text" id="tex" name="tet">

<div id="ms"><?php echo $masg; ?></div>

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
            <td id="222">2</td>
               <td   > <input id="7" type="button" value="1" onclick="func(this.id,ew)"></td>
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


     <br>
   

     

<div id="film">
    <?php
    /*Select film*/
        $query = 'SELECT * FROM film WHERE id_f="'.$f.'" ';
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));

        $article1 = mysqli_fetch_assoc($result);

   
     
    $q1 = 'SELECT * FROM bilet WHERE id_s="'.$i.'"and buy_bilet=1 ';
        $r1 = mysqli_query($link, $q1);
        
        if (!$r1)
            die(mysqli_error($link));

        $a1 = mysqli_fetch_assoc($r1);
    $a2=$a1['id_z'];
    $arr = array();
    
    
       
    $q4 = 'SELECT * FROM seans WHERE id_s="'.$i.'" ';
        $r4 = mysqli_query($link, $q4);
        
        if (!$r4)
            die(mysqli_error($link));

        $a4 = mysqli_fetch_assoc($r4);
    $pr=$a4['price'];
    do
    { 
        $a2=$a1['id_z'];
    
        
        
          $q2 = 'SELECT * FROM zal WHERE id_z="'.$a2.'"';
        $r2 = mysqli_query($link, $q2);
        
        if (!$r2)
            die(mysqli_error($link));

        $a3 = mysqli_fetch_assoc($r2);
        $rad=$a3['rjad'];
        $mes=$a3['mesto'];
        
        do{
            $ids=$a3['id_z'];
             $rad=$a3['rjad'];
        $mes=$a3['mesto'];
    
            array_push($arr, $ids);
           
    
        }
         while ($a3 = mysqli_fetch_assoc($r2));
        
    }
     while ($a1 = mysqli_fetch_assoc($r1));
   
    $json=json_encode($arr);
      /*var_dump($json);*/
   
 
?>
   
 
    
    
        <p id="inf"> <?=$article['data_s']?></p>
         <p id="inff"> <?=$article['time_s']?></p>
   <p id="inf"> <?=$pr?></p>
    <p id="inf"> <?=$article1['constraints']?></p>
    
    <div id="pict"> <img src="<?=$article1['photo_film']?>" class="leftimg" width="200px" > </div>
    
   
 
</div>
<br>
<br>
<br>
    <script>
        var t = document.getElementById('t');
      var A=[];
         var Arr = eval('<?php echo $json; ?>');
         A=Arr;
        
          var r=111;
          function init(){ 
              
              //var i= +document.getElementById('1').value;
                //var j= document.getElementById('11');
              for(var i=0; i < Arr.length; i++){
                     
                  
              for(var y=1;y<=32;y++)
                  {
                      
                      var p= +document.getElementById(y).value;
          if(y==Arr[i])
              {
              
                  document.getElementById(y).disabled=true;
                  document.getElementById(y).value=" ";
                  document.getElementById(y).style.borderColor="red";
              }
                  }
              }
                  
             }
      </script>


<script>

   
     var k=0;//количество билетов
         var myArray = [];//ряд+место
          var myArray1 = [];
     var num = [1, 2, 3, 4, 5,6,7,8,9];
         
         var Arraytd = [];//место
         var Arraytr = [];//ряд
         /*функция выбора места*/
          function func(v,e){  
            var mesto = +document.getElementById(v).value;
			var rad=$(e).find('td').first().text();
			var result = document.getElementById('res');
             var resultr = document.getElementById('rad'); 
              var resultm = document.getElementById('mesto');
              var tex = document.getElementById('tex');
              //var result1 = document.getElementById('res1');
            var t=mesto+rad;
             if(document.getElementById(v).style.background=="red")
                 {
                     
                       resultr.value=" ";
                     resultm.value=" ";
                     
                    for(var i=0; i < myArray.length; i++)
                        {
                            if (myArray[i]==t)
                                {
                            myArray.splice(i,1);
                        Arraytd.splice(i,1);
                               Arraytr.splice(i,1); 
                                    Arraytd="";
                                    myArray="";
                                    Arraytr=" ";
                                    k=k-1;
                                }
                        }
                    
                     
                     
                     
                     for(var i=0; i < Arraytd.length; i++)
                        resultr.value="";
                          resultm.value="";
                         /*result.value+=  Arraytr[i];*/
                     document.getElementById(v).style.background="dimgrey";
                    
			}
              else
                 {
                   
                         for(var i=0; i < A.length; i++)
                            {
                         for(var e=1; e<=32;e++ )
                       
                           
                             if(A[i]!=e)
                                
                          document.getElementById(e).style.background="dimgrey";
                            }
                         	Arraytr.length = 0;
                     Arraytd.length = 0;
                         myArray.length = 0;
                     Arraytr.push(rad);//ряд
                     Arraytd.push(mesto);//место
                        
                     myArray.push(v);//ряд+место
                     resultr.value="";
                     resultm.value="";
                     //result1.innerHTML="";
                     
                     
                     for(var i=0; i < Arraytd.length;  i++){
                         resultr.value+=  Arraytr[i];
                          resultm.value+=  Arraytd[i];
                        /*result.innerHTML +=  "Ряд: "+Arraytr[i]+"  "+"Место: "+Arraytd[i]+"<br>";*/
                     tex.value=  myArray[i];
                     }
                     
                 document.getElementById(v).style.background="red";
                     
                     //alert( intp);
                 }  ;
};
         
         

         
         
        

     </script>



<?php
    //Подключение подвала
    require_once("footer.php");
?>