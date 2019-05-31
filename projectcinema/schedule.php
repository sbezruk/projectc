

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
     
        color:#D2B48C;
        text-decoration:underline;
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
    body{
        margin: 0;
    }
    #t{
        color: beige;
        
    }
    .title{
        margin-top: 50px;
    }
    img.leftimg {
    float:left; /* Выравнивание по левому краю */
    margin: 15px 35px 15px 0; /* Отступы вокруг картинки */
   }
    
    #sched{
        
        position: relative;
        
    }
    
    #s{
         position: relative;
        margin-top: 100px;
    }
    
   .sidebar {
    float:left;
   position: relative;
      margin-right:  1%;
       margin-top: 1%;
       padding-top: 1%;
       height: 15%;
       padding-left: 1%;
       padding-right: 1%;
       background-color: #808080;
    text-align: center;
       
   }
    
    .sidebar:hover{
        opacity: 0.7;
       
       
    }
    #p1{
        clear: left;
        width: 15%;
        text-align: center;
    }
   
    
    #film{
        margin-left: 12%;
    
    }
    #ds{
        color: #FFF8DC;
    }
    .procat{
        background-color: 	#4D4D4D;
        margin: 0;
        
    }
    
    #ToFilm{
        
        text-decoration: none;
        color:beige;
        line-height: 1;
 display: inline-block;
        font-family: Arial;
        font-size: 100%;
        word-wrap: break-word; 
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
    
    
    
        #ToFilmm{
        
        text-decoration: none;
        color:#FFDEAD;
        line-height: 1;
 display: inline-block;
        font-family: Arial;
        font-size: 100%;
        word-wrap: break-word; 
    }
   #ToFilmm:after {
    display: block;
    content: "";
    height: 2px;
    width: 0%;
    background-color:#FFDEAD;
    transition: width .3s ease-in-out;
}
    
    
   #ToFilmm:hover:after,
 #ToFilmm:focus:after {
    width: 100%;
}
</style>


 

<div id="content">
     
    <div class="title">
             <span id="t">РАСПИСАНИЕ </span>
             </div>
    <br>
    <?php
     
    $today = date("Y-m-d"); 
    $timet=date("H:i",strtotime(' - 20 min')); 
    //echo $timet;
    //$timet=date("H:i");  
     $query8 ="UPDATE seans SET dayi='1' WHERE data_s<'$today' ";
    $result8 = mysqli_query($link, $query8) or die("Ошибка " . mysqli_error($link)); 
    
    
    $query9 = 'SELECT * FROM seans';
     $result9 = mysqli_query($link, $query9)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result. 
     $resul9 = mysqli_fetch_assoc($result9);
    
    do{
        $idd=$resul9['id_s'];
        if($resul9['data_s']==$today and $resul9['time_s']<=$timet)
        {
             $query0 ="UPDATE seans SET dayi='1' WHERE id_s='$idd' ";
    $result0 = mysqli_query($link, $query0) or die("Ошибка " . mysqli_error($link)); 
        }
        
    }
    while ($resul9 = mysqli_fetch_assoc($result9));
    
    
$query = 'SELECT * FROM film';
    
    $result = mysqli_query($link, $query)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result. 
		$resul = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP
    $id=$resul['id_f'];
      $name=$resul['name_film'];
$ph=$resul['photo_film'];
    /*select film*/
   
    
    
echo "<div id='film'>";
do {
                     $id=$resul['id_f'];
                     $name=$resul['name_film'];
                     $ph=$resul['photo_film'];
    
    
    
    $query1 = 'SELECT * FROM seans WHERE id_f="'.$id.'" and dayi=0';
     $result1 = mysqli_query($link, $query1)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result. 
     $resul1 = mysqli_fetch_assoc($result1);
    
    
                    echo  " <a href='film.php?idt=$id' id='ToFil'>   <img src='$ph' class='leftimg' width='15%' > </a>";
    do
    {
        $ids=$resul1['id_s'];
        if($resul1['data_s']==$today and $resul1['time_s']<$timet)
        {
            
        }
   
        
   echo " <span class='sidebar'>";
 
    //if(если дата равна текущей и время больше на 30 минут)
      
    
     echo   "<p name='d' id='ds'>"; echo $resul1['data_s']; echo "</p>";
        
    echo "<p id='ds'>"; echo $resul1['name_zal'];  echo"</p>";
    ?>
    
        <p><a href="OrderBilet.php?idt=<?=$resul1['id_s']?> " id="ToFilmm">  <?=$resul1['time_s']?> </a></p>
        <?php   echo"</span>"; 
        
       
   
    }while ($resul1 = mysqli_fetch_assoc($result1));?>
    
    
    <p id='p1'>  <a href="film.php?idt=<?=$id?>" id="ToFilm" >  <?=$name?> </a></p>    
    
    
                  <?php } while ($resul = mysqli_fetch_assoc($result)) ;
                echo "</div>";
?>
    
    
    
    

</div>
 
<?php
    //Подключение подвала
    require_once("footer.php");
?>