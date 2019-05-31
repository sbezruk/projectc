<!DOCTYPE html>
<html>
    <head>
        <title>goldencinema</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            
            .headMenu{
                margin-top: 50px;
                
            }
            #snail{
                display: block;
  margin: 0 auto; 
                
            }
           .title {
    /* Чтобы спрятать часть линий, которые 
    ** будут вылазить за пределы блока */
    overflow: hidden;
    /* Выравнивание заголовка по центру, 
    ** можно использовать left, right */
    text-align: center;
    /* Тут можно добавить другие стили для заголовка */
    font-size: 30px;
}
            .title{
                margin-left: 12%;
                 margin-right: 12%;
            }
.title span {
    /* Стили тега обертки для заголовков 
    ** в несколько строк */
    display: inline-block;
    vertical-align: middle;
    
}
.title:before,
.title:after {
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
    height: 1px;
    /* Добавляем цвет для линии */
    background-color: beige;
    /* Добавляем пседоэлемантам возможность изменить 
    ** позицию линии, для создания отступов от текста */
    position: relative;
}
.title:before {
    /* Смещаем левую линию на 100% влево, чтобы линия 
    ** встала рядом с текстом слева */
    margin-left: -100%;
    /* Указываем в пикселях отступ линии от текста заголовка */
    left: -14px;
}
.title:after {
    /* Смещаем правую линию на 100% вправо, чтобы 
    ** линия встала рядом с текстом справа */
    margin-right: -100%;
    /* Указываем в пикселях отступ линии от текста заголовка */
    right: -14px;
}
   
            .menu a{
                 cursor: pointer;
            }
            .menu a:hover{
                color:#D2B48C;
               text-decoration:underline;
            }
            
            .menu a:active{
                color:#FFDEAD;
            }

        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        </head>
    <body  onload="init()">
        <form action="" method="post">
        <input name="login"/>
            <input type="submit" value="Войти" />
    </form>
         <div class="headMenu">
             
             <div class="title">
             <span><img src="picture/golden-cinema.png" width="200px" height="80px" id="snail"> </span>
             </div>
                <ul class="menu">
                <li><a href="index.php" id="main">Гл9ав56ная</a></li>
                <li><a href="schedule.php" id="rasps">Расписание</a></li>
                <li><a href="cost.php" id="cost">Стоимость</a></li>
                <li><a href="aboutcinema.php" id="about">О кинотеатре</a></li>
                <li><a href="contact.php" id="contact">Контакты</a></li>
                </ul>
            </div> 