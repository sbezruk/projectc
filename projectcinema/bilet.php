<?php
session_start();
    //Подключение шапки
require_once("header.php");
 require_once("bd.php");

$seans=$_SESSION['seans'];
//echo $_SESSION['s'];
if(isset($_POST['radd'])) $rad = $_POST['radd'];
if (isset($_POST['mesto'])) $mesto = $_POST['mesto'];

if($rad=="" and $mesto=="")
{
    echo "<div id='error'>";
    echo "Места не выбраны!";
echo "</div>";
}
else
{
    
    $_SESSION['rad']=$rad;
        $_SESSION['mesto']=$mesto;
    
    /*номер места*/              
    $query = 'SELECT * FROM zal WHERE rjad="'.$rad.'" and mesto="'.$mesto.'"';
     $result = mysqli_query($link, $query)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result. 
     $resul = mysqli_fetch_assoc($result);
$id_zal=$resul['id_z'];
$zal=$resul['name_z'];//8 and = seans
    
$_SESSION['name_z']=$zal;
$query1 = 'SELECT * FROM bilet WHERE id_z="'.$id_zal.'" and id_s="'.$seans.'"   ';
     $result1 = mysqli_query($link, $query1)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result. 
     $resul1 = mysqli_fetch_assoc($result1);
$id_b=$resul1['id_b'];
    $_SESSION['bilet']=$resul1['id_b'];
    //echo $_SESSION['bilet'];
     //echo $_SESSION['bilet'];
$id_s=$resul1['id_s'];//3

$query3 = 'SELECT * FROM seans WHERE id_s="'.$seans.'" ';
     $result3 = mysqli_query($link, $query3)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result. 
     $resul3 = mysqli_fetch_assoc($result3);
$id_f=$resul3['id_f'];
$time=$resul3['time_s'];
    //echo $time;
    $_SESSION['times']=$resul3['time_s'];
    //echo $_SESSION['times'];
$price=$resul3['price'];
    $_SESSION['prs']=$resul3['price'];
$data=$resul3['data_s'];
    $_SESSION['datas']=$resul3['data_s'];

$query4 = 'SELECT * FROM film WHERE id_f="'.$id_f.'" ';
     $result4 = mysqli_query($link, $query4)or die("Ошибка " . mysqli_error($link)); //ответ базы запишем в переменную $result. 
     $resul4 = mysqli_fetch_assoc($result4);
$film=$resul4['name_film'];
    $_SESSION['cons']=$resul4['constraints'];
    $_SESSION['ph']=$resul4['photo_film'];
    $_SESSION['fl']=$resul4['name_film'];
    $_SESSION['D']=$resul4['D'];
    //echo $_SESSION['cons'];
    //echo $_SESSION['fl'];
?>
<style>
    #error{
        color:beige;
        font-family: Arial;
    }
    
    .order{
        background-color: darkgray;
        font-family: Arial;
      padding-top: 2%;
        padding-bottom: 5%;
    }
    h2{
        text-align: center;
        color: beige;
    }
    #p1{
        margin-left: 34%;
    }
    
    #card{
        padding-bottom: 1%;
        padding-top: 1%;
        padding-left: 3%;
        padding-right: 3%;
        outline: none;
    }
    
    #bt{
        outline: none;
        padding-bottom: 1%;
        padding-top: 1%;
        padding-left: 3%;
        padding-right: 3%;
    }
    #visa{
        position: absolute;
       padding-left: 5px;
    }
</style>
<br>
<br>
<div class="order">
<h2>ИНФОРМАЦИЯ О ЗАКАЗЕ</h2>
    <div id="p1">
        <p><font  size="5pt">Кинотеатр:</font> <font color="#FFF8DC" size="3pt">GOLDEN Cinema</font></p>
        <p><font  size="5pt">Номер билета:</font> <font color="#FFF8DC" size="3pt"><?php echo $id_b;?></font> </p>
        <p><font  size="5pt">Описание:</font> <font color="#FFF8DC" size="3pt"><?php echo $film; echo" ";echo $data; echo" ";echo $time ; ?></font></p>
        <p><font  size="5pt">Сумма:</font> <font color="#FFF8DC" size="3pt"><?php echo $price; ?></font></p>
        <br>
        <label for="card"><font  size="4pt">Номер карты:</font></label>
        <form method="post" action="Bbilet.php" name="myform">
    <input type="text" id="card"  name="cardcode" pattern="[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}" placeholder="XXXX XXXX XXXX XXXX" required
>
    <input type="submit" value="ОПЛАТИТЬ" id="bt">
           
        </form>
        <br>
         <img src="picture/100.png" width="80">
        <img src="picture/22.png" width="80" id="viza">
    </div>
</div>
<script>
var cc = myform.cardcode;
for (var i in ['input', 'change', 'blur', 'keyup']) {
    cc.addEventListener('input', formatCardCode, false);
}
function formatCardCode() {
    var cardCode = this.value.replace(/[^\d]/g, '').substring(0,16);
    cardCode = cardCode != '' ? cardCode.match(/.{1,4}/g).join(' ') : '';
    this.value = cardCode;
}

</script>
<?php
}
?>

<?php
    //Подключение подвала
    require_once("footer.php");
?>