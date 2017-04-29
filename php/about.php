<!DOCTYPE html>
<html>
<head>
    <?php
    $title="О нас";
    include_once "/php/blocks/head.php"
    ?>
</head>
<body>
<div id="parents"><!--Родительский контейнер -->
    <?php include_once "/php/blocks/header.php"?><!--Голова -->
    <div id="contentBody"><!--Тело для всего контента -->
        <section id="content"><!--Контент -->
        </section>
    </div>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
    <?php include_once "/php/blocks/footer.php"?> <!--ФУТЕР -->
</div>
<script src="/js/slide.js"></script>
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