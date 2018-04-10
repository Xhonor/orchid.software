@extends('layouts.app')

@section('title','Laravel Admin Panel')
@section('description','Simple Laravel Admin panel and CMS')


@section('content')


<section id="about" class="bg-white-only">
    <!--Container-->
    <div class="container">




        <div class="m-t-xxl m-b-xl">
            <h5 class="text-light">
               For Laravel Framework
            </h5>
            <div class="row v-center">
                <div class="col-md-5">
                    <h1 class="m-t-xs text-dark font-thin">
                        Простая и гибкая<br>
                        панель управления
                    </h1>
                </div>
                <div class="col-md-7 no-padder">
                    <div class="font-thin">
                        <p>
                            Our beautifully-designed UI Framework come with hundreds of customizable features. <br>
                            Every Layout is just a starting point—you can style it to look any way you want.
                        </p>
                        <p class="small col-md-7 no-padder">
                            5 layouts with 2 sublayouts each supporting 7 themes.
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <!--Row-->
        <div class="row m-t-xl m-b-md">
            <div class="col-md-4 col-sm-4">
                <div class="m-t-md m-b-md wrapper-lg  b">
                    <div class="ico column text-primary"><i class="icon-rocket"></i></div>
                    <div class="desc">
                        <h4 class="font-thin">Простота установки</h4>
                        <p>
                            Установка пакета с помощником композитора и шаг за шагом делает процесс простым и понятным
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="m-t-md m-b-md wrapper-lg  b">
                    <div class="ico column text-primary"><i class="icon-layers"></i></div>
                    <div class="desc">
                        <h4 class="font-thin">Расширяемый</h4>
                        <p>
                            Вы можете установить свои любимые пакеты или написать свой собственный набор функций в приложениях
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="m-t-md m-b-md wrapper-lg  b">
                    <div class="ico column text-primary"><i class="icon-server"></i></div>
                    <div class="desc">
                        <h4 class="font-thin">Локализация</h4>
                        <p>
                            Вы можете использовать панель на вашем родном языке или создавать приложения с поддержкой
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->

    </div>
    <!--End container-->
</section>


<div class="bg-white">
    <section  class="features b-t">
        <!--Container-->
        <div class="container">



            <!--feature border box start-->
            <div class="row m-b-xxl m-t-xxl">

                <div class="m-b-md">
                    <!--title-->
                    <div class="text-center center">
                        <h3 class="text-uppercase text-black font-thin">We are massive</h3>
                        <div class="m-t-md">
                            <p class="w-xxl center text-muted">
                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. Nam libero tempore
                            </p>
                        </div>
                    </div>
                    <!--title-->
                </div>

                <div class="col-md-2">
                    <div class="padder-v text-right m-b-xl">
                        <div class="text-muted">
                            <i class="fa fa-user fa-3x"></i>
                        </div>
                        <div class="text-uppercase">
                            <h4 class="text-black font-thin">Bootstrap</h4>
                        </div>
                        <div class="text-muted font-thin">
                            Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                        </div>
                    </div>
                    <div class="padder-v text-right">
                        <div class="text-muted">
                            <i class="fa fa-user fa-3x"></i>
                        </div>
                        <div class="text-uppercase">
                            <h4 class="text-black font-thin">design</h4>
                        </div>
                        <div class="text-muted font-thin">
                            Fringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                        </div>
                    </div>
                </div>
                <div class="col-md-8 text-center">
                    <div class="center   m-b-xxs">
                        <img src="https://user-images.githubusercontent.com/5102591/32980416-22ad653e-cc77-11e7-9fb9-4747b241270f.png" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="padder-v text-left m-b-xl">
                        <div class="text-muted">
                            <i class="fa fa-user fa-3x"></i>
                        </div>
                        <div class="text-uppercase">
                            <h4 class="text-black font-thin">Clean Code</h4>
                        </div>
                        <div class="text-muted font-thin">
                            Ringilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                        </div>
                    </div>
                    <div class="padder-v text-left ">
                        <div class="text-muted">
                            <i class="fa fa-user fa-3x"></i>
                        </div>
                        <div class="text-uppercase">
                            <h4 class="text-black font-thin">Multipurpose</h4>
                        </div>
                        <div class="text-muted font-thin">
                            Singilla augue at maximus vestibulum. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend.
                        </div>
                    </div>
                </div>
            </div>
            <!--feature border box end-->
        </div>
    </section>
</div>



<div class="bg-white hidden">

        <section  class="features b-t">
            <!--Container-->
            <div class="container m-t-xxl">
                <!--Row-->
                <div class="row vertical-align v-center m-t-xxl m-b-xxl">
                    <div class="hidden-xs col-md-5 col-sm-5 m-b-xxl">
                        <div class="block-shot b box-shadow-lg">
                            <img src="/img/monitor.png" class="img-responsive" alt="" style="
height: 600px;
    object-fit: none;
    object-position: top left;
">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-md-offset-1 col-sm-8 col-sm-offset-1  m-b-xxl">

                        <div class="col-md-12">
                            <p class="h3 l-h-1x text-dark  font-thin m-b-lg">Экономьте свое время с лучшими инструментами</p>
                        </div>
                        <div class="col-md-12  m-t-md ">
                            <div class="block-faq m-b-lg">
                                <h4 class="m-b-md text-black">Что такое ORCHID?</h4>
                                <p style="line-height: 25px;">
                                    ORCHID - это пакет для Laravel, который помогает при администрировании приложения,
                                    предоставляя только хороший набор инструментов, который будет востребован практически в каждом проекте.
                                </p>
                            </div>

                            <div class="block-faq  m-b-lg">
                                <h4 class="m-b-md text-black">Сколько это стоит?</h4>
                                <p style="line-height: 25px;">ORCHID бесплатна, но мы ценим пожертвования.</p>
                            </div>

                            <ul class="list-unstyled  m-t-xl">
                                <li>
                                    <i class="icon-check pull-left text-lg m-r m-t-sm text-primary"></i>
                                    <p class="clear m-b-lg"><strong>Минимазация затрад</strong>, значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечен.</p>
                                </li>
                                <li>
                                    <i class="icon-check pull-left text-lg m-r m-t-sm text-primary"></i>
                                    <p class="clear m-b-lg"><strong>Минимазация затрад</strong>, значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечен.</p>
                                </li>
                                <li>
                                    <i class="icon-check pull-left text-lg m-r m-t-sm text-primary"></i>
                                    <p class="clear m-b-lg"><strong>Минимазация затрад</strong>, значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечен.</p>
                                </li>

                            </ul>

                        </div>


                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
        </section>
    </div>





<div class="bg-dark b-t">
    <div class="container">
        <div class="row m-t-xxl m-b-xxl v-center">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h3 class="text-white font-thin">Simple CRUD Systems</h3>
                        <p class="text-muted m-b-lg">
                            Build complex dialogs with an ease
                        </p></div>
                </div>
                <div class="row">

                    <ul class="list-unstyled">
                        <li>
                            <i class="icon-check pull-left text-lg m-r m-t-sm text-primary"></i>
                            <p class="clear m-b-lg"><strong class="text-white">Минимазация затрад</strong>, значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечен.</p>
                        </li>
                        <li>
                            <i class="icon-check pull-left text-lg m-r m-t-sm text-primary"></i>
                            <p class="clear m-b-lg"><strong class="text-white">Минимазация затрад</strong>, значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечен.</p>
                        </li>
                        <li>
                            <i class="icon-check pull-left text-lg m-r m-t-sm text-primary"></i>
                            <p class="clear m-b-lg"><strong class="text-white">Минимазация затрад</strong>, значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечен.</p>
                        </li>
                        <li>
                            <i class="icon-check pull-left text-lg m-r m-t-sm text-primary"></i>
                            <p class="clear m-b-lg"><strong class="text-white">Минимазация затрад</strong>, значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечен.</p>
                        </li>
                        <li>
                            <i class="icon-check pull-left text-lg m-r m-t-sm text-primary"></i>
                            <p class="clear m-b-lg"><strong class="text-white">Минимазация затрад</strong>, значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечен.</p>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="col-md-6 hidden-xs">
                    <pre class="bg-black">
                        <code class="language-php">
class Blog extends Many
{
    /**
     * @var string
     */
    public $name = 'Blog post';

    /**
     * Grid View for post type.
     */
    public function grid() : array
    {
        return [];
    }

    /**
     * @return array
     */
    public function fields() : array
    {
        return [];
    }

}</code>
                    </pre>
            </div>
        </div>
    </div>
</div>



<div class="bg-white b-t">
    <div class="container">

        <div class="col-md-7">

            <div class="row m-t-xxl m-b-lg">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p class="h2 text-black font-thin">Спонсоры</p>
                    <p class="text-muted">
                        Компании, которые нас поддерживают
                    </p>
                </div>
            </div>

            <div class="row m-b-xxl v-center">
                <div class="col-sm-6">
                    <a href="https://m.do.co/c/16c90d96a00c" target="_blank"><img src="/img/sponsors/do.png" class="img-responsive"></a>
                </div>
                <div class="col-sm-6">
                    <a href="https://m.do.co/c/16c90d96a00c" target="_blank"><img src="/img/sponsors/JetBrains.png" class="img-responsive"></a>
                </div>
                <div class="col-sm-6">
                    <a href="http://laravel.su" target="_blank"><img src="/img/sponsors/laravelrus.png" style="height: 80px" class="img-responsive"></a>
                </div>

            </div>

        </div>

        <div class="col-md-5">
            <div class="row  m-t-xxl m-b-lg">
                    <div class="col-sm-12 m-b-xl">
                        <h4 class="font-thin l-h-2x  m-b-lg">
                            <a href="https://twitter.com/themsaid/status/892387647733342208" target="_blank">
                                <em>“If you are looking for CMS package for your laravel project this package looks nice to me :)”</em>
                            </a>
                        </h4>
                        <p class="text-muted text-right">- <a href="https://twitter.com/themsaid">Mohamed Said, First officer of Laravel</a></p>
                    </div>
                </div>
        </div>

    </div>
</div>


<section class="github pos-rlt no-overflow b-t">
    <div class="container h-full v-center">
        <div class="row w-full m-t-xxl m-b-xxl">
            <div class="col-lg-5">
                <div class="">
                    <img src="/img/github_logo.png" alt="" class="m-b-lg">
                    <p class="h3 l-h-1x text-dark font-thin m-b-lg">Открытый исходный код</p>
                    <p>
                        Всё, что мы делаем, на 100% состоит из открытого и свободного кода, совместно разрабатываемого людьми со всего мира.
                    </p>

                    <p class="padder-v">
                        <a href="#" class="btn btn-lg btn-primary btn-rounded">
                            Посмотреть исходники
                            <i class="icon-book-open m-l-xs" aria-hidden="true"></i>
                        </a>
                    </p>

                    <p class="text-muted m-t">
                        Я призываю всех внести свой вклад в проект ORCHID.<br>
                        Вы можете найти последнюю версию кода на GitHub
                    </p>
                </div>
            </div>
        </div>
    </div>
    <img src="/img/github_browser.png" alt="" class="github_screenshot">
</section>




@endsection
