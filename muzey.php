<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Музей Лувр</title>
  <link rel="stylesheet" href="muzey.css">
  <script type="text/javascript" src="script.js"></script>

</head>
<body>


  <div id="sidebar">
<div class="toggle-btn" onclick="openMenu()">
  <span></span>
  <span></span>
  <span></span>
</div>
<ul>
<li>Меню</li>
<li> <a href="index.php" title="Главная страница" onclick="slowScroll('#main')">Главная страница</a></li>
<li><a href="opisan.php" onclick="slowScroll('#overview')" title="История Лувра">История Лувра</a></li>
</ul>
  </div>




  <header>
    <div id="logo" onclick="slowScroll('#top')">
      <span></span>
    </div>
    <div id="about">
    </div>
  </header>

  <div id="top">
    <h1></h1>
    <h3>Картинки</h3>
  </div>





<!-- Works -->
<div class="works">
    <div class="works__item">
        <img class="works__photo" src="images/dzhokonda+.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Мона Лиза (Джоконда)</div>
            <div class="works__text">Леонардо да Винчи Год: 1503-1505</div>
        </div>
    </div>

   <div class="works__item">
        <img class="works__photo" src="images/kreschenie-hrista-da-vinchi+.jpg" alt="">
        <div class="works__content">
            <div class="works__title">«Крещение Христа, Андреа Верроккьо и да Винчи» </div>
            <div class="works__text">Леонардо да Винчи Год: 1470-1475</div>
        </div>
    </div>
<div class="works__item">
        <img class="works__photo" src="images/portret-dzhinevry-de-benchi-da-vinchi+.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Портрет Джиневры де Бенчи</div>
            <div class="works__text">Леонардо да Винчи Год:Около 1474-1478</div>
        </div>
    </div>
<div class="works__item">
        <img class="works__photo" src="images/madonna-s-mladencem-i-svyatoy-annoy-da-vinchi+.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Мадонна с Младенцем и святой Анной</div>
            <div class="works__text">Леонардо да Винчи Год: Около 1510</div>
        </div>
    </div>
<div class="works__item">
        <img class="works__photo" src="images/svyatoy-ieronim-leonardo-da-vinchi+.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Святой Иероним</div>
            <div class="works__text"> Леонардо да Винчи Год: Около 1482</div>
        </div>
    </div>
<div class="works__item">
        <img class="works__photo" src="images/sv-ioan-leonardo+.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Святой Иоанн Креститель</div>
            <div class="works__text">Автор: Леонардо да Винчи Год: 1514-1516</div>
        </div>
    </div>
<div class="works__item">
        <img class="works__photo" src="images/angiari-da-vinchi+.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Битва при Ангиари</div>
            <div class="works__text">Автор: Леонардо да Винчи Год: 1503-1506</div>
        </div>
    </div>
<div class="works__item">
        <img class="works__photo" src="images/vakx-leonardo+.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Вакх</div>
            <div class="works__text">Автор: Леонардо да Винчи Год: 1510-1515
</div>
        </div>
    </div>
<div class="works__item">
        <img class="works__photo" src="images/madonna-s-gvozdikoi-da-vinchi+.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Мадонна с гвоздикой</div>
            <div class="works__text">Автор: Леонардо да Винчи</div>
        </div>
    </div>


    <div class="works__item">
        <img class="works__photo" src="images/dama-s-gornostaem+.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Дама с горностаем</div>
            <div class="works__text">Автор: Леонардо да Винчи Год: 1489 – 1490</div>
        </div>
    </div>

    <div class="works__item">
        <img class="works__photo" src="images/spenser-reinolds+.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Графиня Спенсер с дочерью Джорджианой</div>
            <div class="works__text">Автор: Джошуа Рейнольдс Год: 1761</div>
        </div>
    </div>

    <div class="works__item">
        <img class="works__photo" src="images/hitfild-reinolds+.jpg" alt="">
        <div class="works__content">
            <div class="works__title">Портрет адмирала лорда Хитфилда</div>
            <div class="works__text">Автор: Джошуа Рейнольдс</div>
        </div>
    </div>

    
    </div>
</div><!-- /.works -->

 


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

<script>
function openMenu(){
document.getElementById("sidebar").classList.toggle('active');
}
</script>


</body>
</html>