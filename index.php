<!DOCTYPE html>
<html>
<head>
    <?php
    $title="Главная";
    include_once "php/blocks/head.php"
    ?>

</head>
<body>
<div id="parents"><!--Родительский контейнер -->
    <?php include_once "php/blocks/header.php"?><!--Голова -->
    <div id="contentBody"><!--Тело для всего контента -->
        <section id="content"><!--Контент -->
            <article id="fullCont">
                <article class="bossNews">
                        <img src="img/news1.jpg">
                        <h1>Женщина получила ожог второй степени в результате возгорания iPhone 7</h1>
                    <p> результате возгорания iPhone 7 женщина в Австралии получила ожог второй степени. Сейчас она ждет заключения экспертизы и намерена получить компенсацию от Apple.<a href="#">Читать дальше...</a> </p>
                </article>
                <article class="pobochNews">
                    <img src="img/news2.jpg">
                    <h1>Назван самый безопасный для мозга смартфон</h1>
                    <p> Смартфоны Samsung Galaxy S7 и Galaxy S7 Edge заняли первое место в рейтинге мобильных устройств с самым низким уровнем влияния электромагнитного излучения на человеческий мозг. Об этом сообщил сайт Android Headlines со ссылкой на французское издание PhonAndroid.<a href="#">Читать дальше...</a> </p>
                </article>
            </article>
        <?php include_once "php/blocks/rightCol.php"; ?>
        </section>
    </div>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
    <?php include_once "php/blocks/footer.php"?> <!--ФУТЕР -->
</div>
<script src="js/slide.js"></script>
<!--[if IE]>
<script>
    document.createElement('header');
    document.createElement('nav');
    document.createElement('section');
    document.createElement('article');
    document.createElement('aside');
    document.createElement('footer');
</script>
<![endif]-->
</body>
</html>