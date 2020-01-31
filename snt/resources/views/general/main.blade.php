@extends('welcome')

@section('title', 'СоюзНовТорг')

@section('content')
<div class="wrapp_sl">
            <div class="left-arrow">
                <img class="img-arrow" src="dist/img/left-ar.png" alt="">
            </div>
            <div class="sl">
                <div class="sl_slide">
                    <img class="sl_img" src="dist/img/2-slide.jpg" alt="">
                    <div class="sl_content">
                        <div class="sl_header">
                            <h2>
                                <span>
                                    Пластиковые материалы
                                </span>
                            </h2>
                        </div>
                        <div class="sl_info">
                            <h3>
                                Пленка полиэтиленовая, Поликарбонат, Мешки <br> полиэтиленовые, Пластиковые сетки, Шланги поливочные
                            </h3>
                        </div>
                        <a href="#" class="sl_href_button">
                            <div class="sl_button">
                                <span>
                                    Подробнее
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="sl_slide">
                    <img class="sl_img" src="dist/img/1-slide.jpg" alt="">
                    <div class="sl_content">
                        <div class="sl_header">
                            <h2>
                                <span>
                                    Парники, теплицы
                                </span>
                            </h2>
                        </div>
                        <div class="sl_info">
                            <h3>
                                Поликарбонат, Укрывной материал Спанбонд, Теплицы, Парники, Дуги
                            </h3>
                        </div>
                        <a href="#" class="sl_href_button">
                            <div class="sl_button">
                                <span>
                                    Подробнее
                                </span>
                            </div>
                        </a>
                    </div>              
                </div>
                <div class="sl_slide">
                    <img class="sl_img" src="dist/img/3-slide.jpg" alt="">
                    <div class="sl_content">
                        <div class="sl_header">
                            <h2>
                                <span>
                                    Все для консервации
                                </span>
                            </h2>
                        </div>
                        <div class="sl_info">
                            <h3>
                                Крышки, Стеклянные банки, Все для консервации
                            </h3>
                        </div>
                        <a href="#" class="sl_href_button">
                            <div class="sl_button">
                                <span>
                                    Подробнее
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="right">
                <img class="img-arrow" src="dist/img/right-ar.png" alt="">
            </div>
        </div>
        <div class="section-1">
            <div class="wrapper-fav">
                <div class="fav-section">
                    <div class="fav">
                        <div class="fav-img">
                            <img src="dist/img/list-b.png" alt="">
                        </div>
                        <div class="fav-info">
                            <h3>Широкий ассортимент <br> товаров</h3>
                        </div>
                    </div>
                    <div class="fav">
                        <div class="fav-img">
                            <img src="dist/img/truck-b.png" alt="">
                        </div>
                        <div class="fav-info">
                            <h3>Быстрая доставка по Полоцкому району</h3>
                        </div>
                    </div>
                    <div class="fav">
                        <div class="fav-img">
                            <img src="dist/img/quality-b.png" alt="">
                        </div>
                        <div class="fav-info">
                            <h3>Предлагаем только качественную продукцию</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-work">
                <div class="work-h">
                    <h1>
                        Как мы работаем
                    </h1>
                </div>
                <div class="work-parts">
                    <div class="top-line">
                        <img src="dist/img/top-line.png" alt="">
                        <img src="dist/img/top-line.png" alt="">
                    </div>
                    <div class="parts">
                        <div class="part">
                        <div class="part-top">
                            <img src="dist/img/cont.png" alt="">
                            <div class="part-h">
                            <h1 style="text-transform: uppercase; font-size: 25px; font-weight: 500;">шаг 1</h1> <br>
                            Оформите вашу заявку
                            </div>
                        </div>
                        <div class="part-text">
                            Заполните вашу заявку на заказ нашего товара
                        </div>
                    </div>
                    <div class="part">
                        <div class="part-top">
                            <img src="dist/img/box.png" alt="">
                            <div class="part-h">
                            <h1 style="text-transform: uppercase; font-size: 25px; font-weight: 500;">шаг 2</h1> <br>
                            Подтверждение заказа
                            </div>
                        </div>
                        <div class="part-text">
                            Дождитесь звонка менеджера для уточнения деталей
                        </div>
                    </div>
                    <div class="part">
                        <div class="part-top">
                            <img src="dist/img/truck.png" alt="">
                            <div class="part-h">
                                <h1 style="text-transform: uppercase; font-size: 25px; font-weight: 500;">шаг 3</h1><br>
                                Выполнение заказа
                            </div>
                        </div>
                        <div class="part-text">
                            Мы доставим ваш заказ прямо к вам в руки
                        </div>
                    </div>
                    <div class="part">
                        <div class="part-top">
                            <img src="dist/img/order.png" alt="">
                            <div class="part-h">
                                <h1 style="text-transform: uppercase; font-size: 25px; font-weight: 500;">шаг 4</h1> <br>
                                    Получение товара
                                </div>
                            </div>
                            <div class="part-text">
                                Оплатите ваш заказ по ранее уточнённой стоимости
                            </div>
                        </div>
                    </div>
                    <div class="bottom-line">
                        <img src="dist/img/bottom-line.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="section-2">
            <div class="wrapper-sell">
                <h1>Наши товары</h1>
                <div class="wrapper-card">
                    <div class="autoplay-slide">
                        @foreach($picture_products as $picture_product)
                            <div class="card">
                                <div class="card-header">
                                    <h3>{{ $picture_product->product->name }}</h3>
                                </div>
                                <div class="card-img">
                                    <img src="{{  $picture_product->picture->src_img  }}" alt="">
                                </div>
                                <div class="card-info">
                                    <h2>
                                        {{  $picture_product->product->price  }} р.
                                    </h2>
                                </div>
                                <a class="href-button" href="/catalog/ {{$picture_product->id}}">
                                    <div class="card-button">
                                        <span>
                                            Подробнее
                                        </span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="wrapper-more">
                    <a class="href-button-more" href="/catalog">
                        <div class="more-button">
                            <span>Перейти в каталог</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
@endsection