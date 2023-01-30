<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/modal-window.css">
    <script src="assets/js/jquery-3.6.0.js"></script>
    <title>Document</title>
</head>
<body>
<?php
        include_once('vendor/connect.php');
    ?>
    <!--Модальные окна-->
    <!--Окно регистрации-->
    <form class="hidden" action="vendor/signup.php" method="post" id='formReg'>
        <input type="text" name="name" placeholder="name" pattern='^[А-Яа-яЁё\s\-]+$' required>
        <input type="text" name="surname" placeholder="surname" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="text" name="login" placeholder="login" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="password" name="password_repeat" placeholder="password_repeat" required>
        <button class='btn-black' name='formReg' type='submit'> Регистрация </button>
        <button class='btn-black' type='button' modal-close='formReg'> Закрыть </button>
    </form>
    <!--Окно авторизации-->
    <form class="hidden" action="vendor/signin.php" method="post" id='formAuth'>
        
        <input type="text" name="login" placeholder="login">
        
        <input type="password" name="password" placeholder="password">
        <button class='btn-black' name='formAuth' type='submit'> Войти </button>
        <button class='btn-black' type='button' modal-close='formAuth'> Закрыть </button>
    </form>
    <div class="menu">
        <li><a href="/index.php"><img src="" alt="logo"></a></li>
        <li><a href="/index.php">Главная</a></li>
        <li><a href="/categories.php">Репертуар</a></li>
        <li><a modal-open='formAuth'>Вход</a></li>
        <li><a modal-open='formReg'>Регистрация</a></li>
    </div>

    <h1>Афиши</h1>
        <!--<form action='' method='post' class="categories">
        <select name='select'>
                <option value="year+">по году+</option>
                <option value="year-">по году-</option>
                <option value='a_z'>по имени (A-Z)</option>
                <option value='z_a'>по имени (Z-A)</option>
                <option value='priceMax'>по цене (дороже)</option>
                <option value='priceMin'>по цене (дешевле)</option>
                <option value="Strun">Струнные</option>
                <option value="Klavish">Клавишные</option>
                <option value="Smich">Смычковые</option>
            </select>
            <input type='submit' name='submit' value='Отсортировать'>
        </form>-->
        <div class="punkts">
        <?php
            $sql="SELECT * FROM posters ORDER BY name ASC";
            $products = query($sql);
                    
            while ($row = $products -> fetch_assoc()):
        ?>

            <div class="punkt">
               
                <h3><?=$row['name']?></h3>
                <p><?=$row['date']?></p>
                <h6><?=$row['text']?></h6>
                <a href="products/1.php?product_id=<?=$row['id']?>"><button>
                    Подробнее
                </button></a>
            </div>

        <?php
            endwhile;
        ?>
        </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
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