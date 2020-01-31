<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>@yield('title', 'СоюзНовТорг')</title>
    <link rel="stylesheet" href="/dist/css/catalog.css">
    <link rel="stylesheet" href="/dist/css/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/dist/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/dist/slick/slick-theme.css"/>
    <link rel="stylesheet" href="/dist/css/style.css">
</head>
<body>
    <div class="main">
        <header>
            <div class="logo">
                <p style="color: #fff">СоюзНов</p><p style="color: #00DE00">Торг</p> 
            </div>
            <div class="main-menu">
                <ul class="menu-list">
                    <li><a href="/" class="h-href">Главная</a></li>
                    <li><a href="/catalog" class="h-href">Каталог
                    </a></li>
                    <li><a href="/information" class="h-href">Информация</a></li>
                    <li><a href="/contact" class="h-href">
                        Контакты
                    </a></li>
                </ul>
            </div>
        </header>
        @yield('content')
    </div>
    <div class="footer">
            <div class="contact-footer">
                <div class="footer-block">
                    <h2>Разделы</h2>
                    <ul class="footer-menu-list">
                    <li><a href="/" >Главная</a></li>
                    <li><a href="/catalog"> Каталог </a></li>
                    <li><a href="/information" >Информация</a></li>
                    <li><a href="/contact"> Контакты </a></li>
                </ul>
                </div>
                <div class="footer-block">
                    <h3>
                        Время работы: <br>
                        Пн - Пт с 8:30 до 16:30
                    </h3>
                </div>
                <div class="footer-block">
                    <h3>
                        +375 (214) 50-93-45 <br>
                        +375 (29) 657-01-35 <br>
                    </h3>
                    <div class="social">
                        <ul class="social-link">
                            <li><a href="https://www.facebook.com/souznovtorg"> <img src="/dist/img/fb.png" alt=""> </a></li>
                            <li><a href="https://www.instagram.com/soiuznovtorg/"> <img src="/dist/img/inst.png" alt=""> </a></li>
                            <li><a href="https://vk.com/id568684927"> <img src="/dist/img/vk.png" alt=""> </a></li>
                            <li><a href="https://ok.ru/"> <img src="/dist/img/odno.png" alt=""> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="/dist/slick/slick.min.js"></script>
    <script src="/dist/js/slide.js"></script>
</body>
</html>