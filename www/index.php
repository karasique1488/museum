<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

if(isset($_POST["submit"])){
  $mysqli=new mysqli("localhost", "root", "", "arts");
  $mysqli->query("SET NAMES 'utf8'");
  $mysqli->query("INSERT INTO `arts`.`contact` (`name`, `email`, `message`) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["message"]."');");
  $mysqli->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Музей Лувр</title>
  <link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="script.js"></script>
  
</head>
<body>




<div class="intro" id="intro">

</div>


<script src="three.r92.min.js"></script>
<script src="vanta.rings.min.js"></script>
<script src="app.js"></script>






  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span>Art</span>
    </div>
    <div id="about">
      <a href="muzey.php" title="Музей" onclick="slowScroll('#main')">Музей</a>
      <a href="opisan.php" onclick="slowScroll('#overview')" title="История Лувра">История Лувра</a>
      <a href="#" onclick="slowScroll('#overview')" title="Лувр внутри">Лувр внутри</a>
      <a href="#" onclick="slowScroll('#contacts')" title="Контакты">Контакты</a>
      <a href="#" onclick="slowScroll('#faq')" title="Ответы на вопросы">FAQ</a>
    </div>
  </header>


  <div id="top">
    <h1>Лувр</h1>
    <h3>Музей Лувра в Париже, Франция</h3>
  </div>

  <div id="main">
    <div class="intro">
      <h2>Что посмотреть?</h2>
      <span>Большой выбор всего, что может вам понравиться</span>
    </div>
    <div class="text">
      <span>Если Вы будете заходить в Лувр через главный вход (Пирамиду Лувра), Вам придется довольно долго стоять в очереди, однако и из этого можно извлечь плюсы. Так, во время ожидания Вы можете наслаждаться потрясающим видом на двор Наполеона с его фонтанами и пирамидами. Кроме того, у Вас будет время и на то, чтобы рассмотреть снаружи сам Лувр, поражающий своими размерами.</span>
    </div>
  </div>

  <div id="overview">
    <h2>Лувр внутри</h2>
    <h4>Картины сделанные из нутри</h4>

    <div class="img">
      <img src="http://lestatus.ru/wp-content/uploads/%D0%9B%D1%83%D0%B2%D1%80-%D0%B8%D0%B7%D0%BD%D1%83%D1%82%D1%80%D0%B8.jpg" alt="">
      <span>ЛЕОНАРДО – Портрет Монны Лизы, прозванный Джоконда, 1503-1506.</span>
    </div>
    <div class="img">
      <img src="https://1.bp.blogspot.com/-JxcIptw_kDg/X7qzkqkfb7I/AAAAAAAAHYA/WXfgZhF4hXEJYIo8_jx7THpbk8Q5iT1fACLcBGAsYHQ/s2048/%25D0%25B2%25D0%25BD%25D1%2583%25D1%2582%25D1%2580%25D0%25B81.jpeg" alt="">
      <span>ЖЕРИКО ТЕОДОР – Офицер конных егерей императорской гвардии, идущий в атаку.</span>
    </div>
    <div class="img">
      <img src="https://www.flatproject.ru/wp-content/uploads/2015/08/13388667465_915a080dad_k.jpg" alt="">
      <span>ЖЕРИКО ТЕОДОР – Плот Медузы.</span>
    </div>
    
    <div class="img">
      <img src="https://i.pinimg.com/originals/54/dd/99/54dd99b4fb57e0d3e71d8c94d95d0128.jpg" alt="">
      <span>ДАВИД ЖАК ЛУИ – Сабинянки, останавливающие сражение между римлянами и сабинянами, 1799.</span>
    </div>
    
  </div>



  <div id="contacts">
    <center><h5>Чтобы купить билет нужно оформит </h5></center>
    <form id="form_input" action="#" method="POST">
      <label for="name">Имя <span>*</span></label><br>
      <input type="text" placeholder="Введите имя" name="name" id="name"><br>
      <label for="email">Ваша почта <span>*</span></label><br>
			<input type="email" placeholder="Введите email" name="email" id="email"><br>
			<label for="message">Для кого вы покупаете?<span>*</span></label><br>
			<textarea placeholder="Введите для кого вы покупаете?" name="message" id="message"></textarea><br>
			<input type="submit" name="submit" value="Отправить">
    </form>
  </div>

  <div id="faq">
    <div>
      <span class="title"><b>Полезная информация</b></span><br>
      <p>Адрес Лувра в Париже — Cour Napoléon <br>
Режим работы Лувра — ежедневно с 9:00 до 18:00 (по средам и пятницам — до 22:00)<br>
Стоимость билета в Лувр — 10 евро (до 18 лет — бесплатно)<br>
Официальный сайт Лувра
    </div>
    <div>
      <span class="title">Коллонада Лувра</span><br>
      <p>Фасад королевского дворца, выходящий на площадь Лувра, является коллонадой Лувра. Протяженность 170 м. Ее соорудил знаменитый Клод Перро, который действительно являлся братом известного сказочника. Коллонада считается одной из самых известных построек времен классицизма</p>
   
      <p>Луврский дворец является величайшим древним памятником архитектуры и хранителем достопримечательностей различных эпох. Помимо шедевров искусства он содержит и центры развития, поэтому интересен множеству туристов.</p>
      
    </div>
    <div>
      <span class="title">Гарантии</span><br>
      <span class="heading">Какие гарантии есть</span>
      <p></p>
      <span class="heading">Имя Фамилия Отчество</span>
      <p>Бурханова Айгуль Ильясовна</p>
      <span class="heading">Номер телефона </span>
      <p>+998(90) 714-04-95 </p>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }

    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
  </script>
</body>
</html>