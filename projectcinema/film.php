<?php
    //Подключение шапки
    require_once("header.php");
 require_once("bd.php");
/* #################ВЫБОРКА ФИЛЬМА############# */

function article_get($link, $id_article){
        // Запрос
        $query = 'SELECT * FROM film WHERE id_f="'.$id_article.'" ';
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));

        $article = mysqli_fetch_assoc($result);
        
        return $article;
    }
$film=$_GET['idt'];
    $article = article_get($link, $_GET['idt']);
/*#################ВЫБОРКА ФИЛЬМА#############*/
?>
<style>
  .title{
        clear: left;
        color:#FFF8DC;
    }
    
    .containerAboutFilm{
        background-color: #505050;
        width: 14%;
        padding: 1%;
        float: left;
        margin-left: 12%;
        color: beige;
        margin-right: 3%;
       
    }
    
     .sidebar {
     float:left;
   position: relative;
      margin-right:  1%;
       margin-top: 0;
       padding-top: 1%;
       height: 15%;
       padding-left: 1%;
       padding-right: 1%;
       background-color: #808080;
    text-align: center;
         
         
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
   
    #resume{
       padding-top: 12%;
      
     padding-right: 12%;
        color: beige;
        font-size: 15pt;
        line-height: 1.5;
    }
   
    #res{
        font-family: Arial;
        font-size: 20pt;
    }
    .sidebar:hover{
        opacity: 0.7;
       
       
    }
    
    #picture .ramka { float: left; margin-right: 10px; margin-bottom: 10px;}
#picture  img { width: 150px; height: 150px; object-fit: cover; }
</style>
    <br>
    <br>
  <div class="title">
             <span><?=$article['name_film']; echo " / "; echo $article['D']; ?></span>
             </div>
    
    <br>
    <br>

<div class="containerAboutFilm">

    <?php $photo=$article['photo_film'];?>
     <p><?php echo  "<img src='$photo' class='leftimg' width='200'>"; ?></p>
     <p><font  color="#D2691E" > Год выпуска:</font> <?=$article['year_f'] ?></p>
     <p><font  color="#D2691E" >Страна:</font> <?=$article['cantry_f']?></p>
     <p><font  color="#D2691E" >Жанр:</font> <?=$article['style_f']?></p>
     <p><font  color="#D2691E" >В главных ролях:</font> <?=$article['role']?></p>
     <p><font  color="#D2691E" >Режиссер: </font><?=$article['director']?></p>
     <p><font  color="#D2691E" >Прокат:</font> <?=$article['procat']?></p>
     <p><font  color="#D2691E" >Продолжительность:</font> <?=$article['time_film']?></p>
     <p><font  color="#D2691E" ><?=$article['constraints']?></font> </p>
          
                   
                </div>
            
<div class="schedule">
<?php
     $today = date("Y-m-d"); 
    $timet=date("H:i"); 
    $query = 'SELECT * FROM seans WHERE id_f="'.$film.'" and dayi=0 ';
    $result = mysqli_query($link, $query)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result. 
    $resul = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP
    
         $id=$resul['id_s'];
         $zal=$resul['name_zal'];
         $time=$resul['time_s'];
         $data=$resul['data_s'];
    
    
  
   
        do
    {
        
           
   echo " <span class='sidebar'>
 
 
        <p name='d' id='ds'>"; echo $resul['data_s']; echo "</p>";
      
    echo "<p id='ds'>"; echo $resul['name_zal'];  echo"</p>";
    ?>
    
        <p><a href="OrderBilet.php?idt=<?=$resul['id_s']?> " id="ToFilmm">  <?=$resul['time_s']?> </a></p>
        <?php   echo"</span>"; 
       
       
    }
        while ($resul = mysqli_fetch_assoc($result));
           
    
     ?>
</div>
   
<div id="resume">
    <p id="res"><font  color="#FFE4B5" >Описание</font></p>
   <p><?=$article['resume'] ?></p>
</div>
       <br>
     <p id="res"><font  color="#FFE4B5" >Кадры из фильма</font></p>        
      
<div id="picture">
   <?php


  
      
 $query = 'SELECT*FROM picture WHERE id_f="'.$article['id_f'].'" ';
    $result = mysqli_query($link, $query)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result.
      
      $rows = mysqli_num_rows($result);
      
      
		$user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP
    $p=$user['picture'];
      
       $id=$user['id_p'];
       
      echo "<br>";
      
       $cols = 4;
      echo "<table>"; // Начинаем таблицу
      $k = 0;
    
      while ($resul = mysqli_fetch_assoc($result)) {
        if ($k % $cols == 0) echo "<tr>"; // Добавляем новую строку
      echo "<td class='pic'>"; // Начинаем столбец
          $id=$resul['id_p'];
          $g=$resul['picture'];?>
        
        <a href="<?=$g?>" target="_blank"  >
      
      <?php echo "<span class='ramka'><img   src='$g' alt='' width='100' class='l' /></span>";?> 
      </a>
      <?php echo "</td>"; // Закрываем столбец
      /* Закрываем строку, если необходимое количество было выведено, либо данная итерация последняя */
      if (($k + 1) ==$cols) echo "</tr>";
      $k++; // Увеличиваем вспомогательный счётчик
        /*echo  "<img   src='$g' width='100'  />";
          echo "<br>";*/
    }
      echo "</table>"; // Закрываем таблицу
  
?>
</div>

<br>
<br>
<br>
<br>

<?php
    //Подключение подвала
    require_once("footer.php");
?>