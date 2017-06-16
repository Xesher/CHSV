<!DOCTYPE html>
<html>
<head>
    <?php
    $title="Главная";
    include "php/blocks/head.php"
    ?>

</head>
<body>
<div id="parents"><!--Родительский контейнер -->
    <?php include "php/blocks/header.php"?><!--Голова -->
    <div id="contentBody"><!--Тело для всего контента -->
        <section id="content"><!--Контент --><form method="GET" action="blocks/footer.php">
                <input type="text" name="name">
                <input type="submit" name="sub">
            </form>
            <?php include "php/blocks/rightCol.php"; ?>
        </section>
    </div>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>-->
    <?php include "php/blocks/footer.php"?> <!--ФУТЕР -->
</div>

</body>
</html>