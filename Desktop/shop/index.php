<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/modal-window.css">
    <script src="/assets/js/jquery-3.6.0.js"></script>
    <title></title>
</head>
<body>
    <!--Модальные окна-->
    <!--Окно регистрации-->
    <form class="hidden" action="vendor/signup.php" method="post" id='formReg'>
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="ФИО" pattern='^[А-Яа-яЁё\s\-]+$' required>
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты" required>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин" required>
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль" required>
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль" required>
        <button class='btn btn-green' name='formReg' type='submit'> Войти </button>
        <button class='btn btn-red' type='button' modal-close='formReg'> Закрыть </button>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
    <!--Окно авторизации-->
    <form class="hidden" action="vendor/signin.php" method="post" id='formAuth'>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button class='btn btn-green' name='formAuth' type='submit'> Войти </button>
        <button class='btn btn-red' type='button' modal-close='formAuth'> Закрыть </button>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
    <div class="container">
    <!--Шапка-->
    <header>
        <a href="index.php" class="logo">
            <img src="assets/img/logo.png" alt="">
        </a>
        <nav>
            <a modal-open='formAuth'>Вход</a>
            <a modal-open='formReg'>Регистрация</a>
        </nav>
    </header>
    </div>
    <img class="what" src="assets/img/slider/1.png" alt="">
    <div class="blocks">
    <div class="buyblock">
        <img src="assets/img/sell/Fate/fate1.jpeg" alt="">
        <h1 class="name">Судьба/Истоки. Том 1</h1>
        <div class="buy">
            <h1 class="name">465 ₽</h1>
        </div>
    </div>
    <div class="buyblock">
        <img src="assets/img/sell/Fate/fate2.jpeg" alt="">
        <h1 class="name">Судьба/Истоки. Том 2</h1>
        <div class="buy">
            <h1 class="name">465 ₽</h1>
        </div>
    </div>
    </div>


    <img class="what" src="assets/img/slider/2.png" alt="">
    <div class="blocks">
        <div class="buyblock1">
            <img src="assets/img/sell/Figures/figmaGaloThymos.jpeg" alt="">
            <h1 class="name">figma Galo Thymos</h1>
            <div class="buy">
                <h1 class="name">11490 ₽</h1>
            </div>
        </div>
        <div class="buyblock1">
            <img src="assets/img/sell/Figures/PARADEYeXiu.jpeg" alt="">
            <h1 class="name">PARADE Ye Xiu</h1>
            <div class="buy">
                <h1 class="name">4302 ₽</h1>
            </div>
        </div>
    </div>
    <div class="blocks">
    <div class="buyblock1">
        <img src="assets/img/sell/Figures/NendoroidPower.jpeg" alt="">
        <h1 class="name">Nendoroid Power</h1>
        <div class="buy">
            <h1 class="name">4948 ₽</h1>
        </div>
    </div>
        <div class="buyblock1">
        <img src="assets/img/sell/Figures/YoshinoYorita.jpeg" alt="">
        <h1 class="name">Yoshino Yorita</h1>
        <div class="buy">
            <h1 class="name">15 736 ₽</h1>
        </div>
    </div>
    </div>


    <img class="what" src="assets/img/slider/3.png" alt="">
    <div class="blocks">
    <div class="buyblock2">
        <img src="assets/img/sell/ShieldHero/ShieldHero1.jpeg" alt="">
        <h1 class="name namedark">Герой щита 1 том</h1>
        <div class="buy">
            <h1 class="name namedark">430 ₽</h1>
        </div>
    </div>
    <div class="buyblock2">
        <img src="assets/img/sell/ShieldHero/ShieldHero2.jpeg" alt="">
        <h1 class="name namedark">Герой щита 2 том</h1>
        <div class="buy">
            <h1 class="name namedark">430 ₽</h1>
        </div>
    </div>
    </div>
    <div class="blocks">
    <div class="buyblock2">
        <img src="assets/img/sell/ShieldHero/ShieldHero3.jpeg" alt="">
        <h1 class="name namedark">Герой щита 3 том</h1>
        <div class="buy">
            <h1 class="name namedark">430 ₽</h1>
        </div>
    </div>
    <div class="buyblock2">
        <img src="assets/img/sell/ShieldHero/ShieldHero4.jpeg" alt="">
        <h1 class="name namedark">Герой щита 4 том</h1>
        <div class="buy">
            <h1 class="name namedark">430 ₽</h1>
        </div>
    </div>
    </div>
    <hr>
        <footer>
            <p>© Аниме интернет-магазин<br>
            Manga shop2022. Все права<br>
            защищены</p>
            <img src="assets/img/telegram.svg">
            <img src="assets/img/vk.svg">
        </footer>
    </div>
    <script type="text/javascript">
            function validateClear(){
            $('#formReg [name=passwordAgain]')[0].setCustomValidity('');
            }
            $(document).ready( function(){
            //Закрыть все модальные окна
            function modalCloseAll() {
               $('form').hide();
            }
            //Закрыть модальное окно
            $('[modal-close]').on('click', function() {
                var form = $(this).attr('modal-close');
                $(`#${form}`).fadeOut(200)
            })
            // Открыть модальное окно
            $('[modal-open]').on('click', function() {
                var form = $(this).attr('modal-open');
                modalCloseAll();
                $(`#${form}`).fadeIn(200)
            })

            })
            </script>
</body>
</html>