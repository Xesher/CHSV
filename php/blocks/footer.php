<footer id="footer" xmlns="http://www.w3.org/1999/html">
    <div id="footerHead"><!--Подвал ака футер -->
        <div id="col1">
            <h2>Компания</h2>
            <ul>
                <li><a href="#"> Об ЧСВ</a> </li>
                <li><a href="#">Работа</a></li>
            </ul>
        </div>
        <div id="col2">
            <h2><?php htmlspecialchars(S_GET['name']); ?></h2>
<!--            <ul>-->
<!--                <li><a href="#">Об ЧСВ</a> </li>-->
<!--                <li><a href="#">Работа</a></li>-->
<!--                <li><a href="#">Пресса о нас</a></li>-->
<!--                <li><a href="#">Блог</a></li>-->
<!--                <li> <a href="#">Помощь</a></li>-->
<!--                <li> <a href="#">Правила</a></li>-->
<!--            </ul>-->
        </div>

    </div>
    <div id="footerEnd">
        <div class="left"> &copy <?php echo(date("Y")); ?></div>
        <external class="right">
            <a href="#" style="font-size: 1.1em">Карта сайта</a>
            <a href="#"><img src="img/facebook_1.png"></a>
            <a href="#"><img src="img/instagram_1.png"></a>
            <a href="#"><img src="img/twitter_1.png"></a>
            <a href="#"><img src="img/vk_1.png"></a>
        </external>
    </div>
</footer>