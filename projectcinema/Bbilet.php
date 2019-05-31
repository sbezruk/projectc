<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<?php
    //Подключение шапки
  
 require_once("bd.php");
//session_start();
$bileBuy=$_SESSION['bilet'];
    $seans=$_SESSION['seans'];
    echo $seans;
 $query ="UPDATE bilet SET buy_bilet='1' WHERE id_b='$bileBuy'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

?>
<style>
     body{
        margin-left: 10%;
    }
    #inf{
        float:right;
       margin-right: 66%;
    }
    #l{
       float: right;
        position: absolute;
        left: 25%;
        bottom: 30%;
    }
    #price{
        float: right;
        position: absolute;
        left: 38%;
        bottom: 32%; 
    }
    #bilet{
       font-family: Arial; 
    }
    #h{
        margin-right: 55%;
    }
    #el{
        position: absolute;
        right: 50%;
        top: 49%;
    }
    #kod{
        top: 50%;
      
    }
    #td{
        margin-left: 70%;
        color:blueviolet;
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
    background-color:blueviolet;
    transition: width .3s ease-in-out;
}
    
    
   #td:hover:after,
 #td:focus:after {
    width: 100%;
}
</style>
<body>
    <a href="index.php" id="td">Вернуться на сайт</a>
<div id="bilet">
    <h2>БИЛЕТЫ ОПЛАЧЕНЫ!</h2>
    <img src="<?=$_SESSION['ph']?>" class="leftimg" width="200px" >
    <div id="inf">

    <p><?php echo $_SESSION['fl']; echo"/"; echo $_SESSION['D']; ?></p>
        <p><font color="red">Ограничения по возрасту: <?php echo $_SESSION['cons'];  ?></font></p>
        <p><b><?php echo $_SESSION['datas']; echo ", "; echo $_SESSION['times'];?></b></p>
    <p><?php echo $_SESSION['name_z']; ?></p>
    <p>Кинотеатр GOLDEN Cinema</p>
        <p><font color="blue">http://goldencinema.com</font></p>
    </div>
    <div>
    <p id="kod"><b>Код: <?php echo $_SESSION['bilet']?></b></p>
    <p id="el"><b>ЭЛЕКТРОННЫЙ БИЛЕТ</b></p>
    <hr id="h">
    <p><b><?php echo $_SESSION['rad']; ?></b> ряд</p>
    <p><b><?php echo $_SESSION['mesto']; ?></b> место</p>
    </div>
    
    <img src="picture/33.png" id="l" width="150">
    <p id="price">Цена: <?php  echo $_SESSION['prs']; ?></p>
   
</div>
    </body>
</html>