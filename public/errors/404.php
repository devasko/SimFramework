<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 - страница не найдена</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            width: 100vw;
            height: 100vh;
            background: linear-gradient( 45deg, #8500ff, #5acaff );
        }

        #container {
            position: absolute;
            display: flex;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            background: url("<?= WWW . '/errors/img/404.png'; ?>"), #151729;
            /*background: url('img/404.png'), #151729;*/
            box-shadow: 0 15px 30px rgba(0, 0, 0, .5);
        }

        .content {
            max-width: 600px;
            text-align: center;
        }

        h2 {
            font-size: 18vw;
            color: #fff;
            line-height: 1em;
        }

        h4 {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            font-size: 1.5em;
            color: #111;
            background-color: #fff;
            font-weight: 300;
        }

        p {
            color: #fff;
            font-size: 1.2em;
        }

        a {
            position: relative;
            display: inline-block;
            margin-top: 25px;
            padding: 10px 20px;
            -webkit-border-radius: 25px;
            -moz-border-radius: 25px;
            border-radius: 25px;
            background-color: #ff0562;
            color: #fff;
            text-decoration: none;
            border-top: 4px solid transparent;
            border-bottom: 4px solid transparent;
            transition: .5s;
        }

        a:hover {
            border-top: 4px solid #d00d56;
            border-bottom: 4px solid #d00d56;
            background-color: transparent;
        }
    </style>
</head>
<body>
    <div id="container">
        <div class="content">
            <h2>404</h2>
            <h4>Упс, похоже страница не найдена!</h4>
            <p>Запрашиваемая Вами страница не найдена на сервере. Попробуйте вернуться на главную страницу и сделать запрос повторно.</p>
            <a href="<?php PATH; ?>">Назад на главную страницу</a>
        </div>
    </div>
    <script>
        var container = document.getElementById( 'container' );
        window.onmousemove = function ( e ) {
            var x = - e.clientX / 5,
                y = - e.clientY / 5;

            container.style.backgroundPositionX = x + 'px';
            container.style.backgroundPositionY = y + 'px';
        }
    </script>
</body>
</html>