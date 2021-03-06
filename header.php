<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Ubuntu+Condensed');
        .menu-main {
            list-style: none;
            margin: 40px 0 5px;
            padding: 25px 0 5px;
            text-align: center;
            background: white;
        }
        .menu-main li {display: inline-block;}
        .menu-main li:after {
            content: "|";
            color: #606060;
            display: inline-block;
            vertical-align:top;
        }
        .menu-main li:last-child:after {content: none;}
        .menu-main a {
            text-decoration: none;
            font-family: 'Ubuntu Condensed', sans-serif;
            letter-spacing: 2px;
            position: relative;
            padding-bottom: 20px;
            margin: 0 34px 0 30px;
            font-size: 17px;
            text-transform: uppercase;
            display: inline-block;
            transition: color .2s;
        }
        .menu-main a, .menu-main a:visited {color: #9d999d;}
        .menu-main a.current, .menu-main a:hover{color: #feb386;}
        .menu-main a:before,
        .menu-main a:after {
            content: "";
            position: absolute;
            height: 4px;
            top: auto;
            right: 50%;
            bottom: -5px;
            left: 50%;
            background: #feb386;
            transition: .8s;
        }
        .menu-main a:hover:before, .menu-main .current:before {left: 0;}
        .menu-main a:hover:after, .menu-main .current:after {right: 0;}
        @media (max-width: 550px) {
            .menu-main {padding-top: 0;}
            .menu-main li {display: block;}
            .menu-main li:after {content: none;}
            .menu-main a {
                padding: 25px 0 20px;
                margin: 0 30px;
            }
        }
    </style>
    <script>
        window.onload = function () {
            //ищем элемент по селектору
            var a = document.querySelector('#nav');
            //вешаем на него события
            a.onmouseout = function(e) {
                a.classList.remove("current");
            }

            a.onmouseover = function(e) {
                a.classList.add("current");
            };
        }
    </script>
</head>
<body>
<header>
    <ul class="menu-main">
        <li><a href="/" id="nav">Наши турниры</a></li>
        <li><a href="toursys.php" id="nav">Турнирная система</a></li>
        <li><a href="ratesys.php" id="nav">Рейтинговая система</a></li>
        <li><a href="about.php" id="nav">О нас</a></li>
        <li><a href="login.php" id="nav">Войти</a></li>
    </ul>
</header>




