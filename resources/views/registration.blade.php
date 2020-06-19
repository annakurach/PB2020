<!DOCTYPE html>
<html lang="ru">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    {{--<script src="/public/js/cookie.js"></script>--}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height,user-scalable=no" />
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Регистрация</title>
    <link href="{{ asset('/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/jquery.flexdatalist.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/loader.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">

</head>
<body>



<div class="wrapper">
    <div class="container">

        <header class="header">
            <div class="page-content header-content">
                <div class="header-content__logo">
                    <div class="main-logo">
                        <a href="/">
                            <img src="{{ asset('/img/svg/logo.svg') }}" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="header-content__menu">
                    <nav class="main-menu-nav">
                        <ul class="main-menu-list">
                            <li class="main-menu-item">
                                <a href="{{ route('about') }}" class="main-menu-link {{ (request()->is('about')) ? 'active' : '' }}">Про Pit Bull Battle</a>
                            </li>

                            <li class="main-menu-item">
                                <a href="{{ url('all-video') }}" class="main-menu-link {{ (request()->is('all-video')) ? 'active' : '' }}">Усі Відео</a>
                            </li>

                            <li class="main-menu-item">
                                <a href="{{ url('participants') }}" class="main-menu-link {{ (request()->is('participants')) ? 'active' : '' }}">Учасники</a>
                            </li>

                            <li class="main-menu-item">
                                <a href="{{ url('judges') }}" class="main-menu-link {{ (request()->is('judges')) ? 'active' : '' }}">Наставники</a>
                            </li>

                            <li class="main-menu-item">
                                <a href="{{ url('registration') }}" class="main-menu-link {{ (request()->is('registration')) ? 'active' : '' }}">Регiстрацiя</a>
                            </li>
                        </ul>

                        {{--<div class="main-language">--}}
                            {{--<div class="main-language-title" data-button>--}}
                                {{--<span class="main-language-title__indicator" data-indicator>--}}
                                    {{--<svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
                                        {{--<path d="M1 1L7.5 7L14 1" stroke="#EB008B" stroke-width="2"/>--}}
                                    {{--</svg>--}}
                                {{--</span>--}}

                                {{--<span class="main-language-title__text">УКР</span>--}}
                            {{--</div>--}}

                            {{--<div class="main-language-dropdown" data-box-dropdown>--}}
                                {{--<div class="main-language-item">--}}
                                    {{--<a href="#" class="main-language-link">РОС</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </nav>
                </div>
            </div>
        </header>

        {{--<div class="wrap-stories fadeInUp wow" data-wow-delay="0.2s" >--}}
            {{--<div class="swiper-container swiper-stories">--}}
                {{--<div class="swiper-wrapper">--}}
                    {{--{foreach from=$videos item=video}--}}
                    {{--<div class="swiper-slide">--}}
                        {{--<a href="{$video.video}" target="_blank" class="stories-item">--}}
          {{--<span class="stories-item-preview">--}}
            {{--<span class="stories-item-img">--}}
              {{--<i class="fas fa-play"></i>--}}
              {{--<img src="{$video.photo}" alt="" />--}}
            {{--</span>--}}
          {{--</span>--}}
                            {{--{$video.title}--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--{/foreach}--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <!-- <div class="title-block fadeInUp wow" data-wow-delay="0.2s">
         <h2 data-text="регистрация">
           регистрация
         </h2>
        </div>

        <div class="check-in fadeInUp wow" data-wow-delay="0.2s">
         <div class="swiper-container swiper-check-in">
           <div class="swiper-wrapper">
             <div class="swiper-slide">
               <div class="form">
                 <div class="field-form" id="name">
                   <span class="title-field-form">Ваше имя</span>
                   <span class="tp-input">
                     <input type="text" placeholder="" name="name"/>
                   </span>
                 </div>
                 <span  class="error-txt-input input_error_name"></span>

                 <div class="field-form" id="nickname">
                   <span class="title-field-form">никнейм</span>
                   <span class="tp-input">
                     <input type="text" placeholder="" name="nickname" />
                   </span>
                 </div>
                 <div class="field-form" id="password">
                   <span class="title-field-form">пароль</span>
                   <span class="tp-input">
                     <input type="text" placeholder="" name="password" />
                   </span>
                 </div>
                 <span   class="error-txt-input input_error_nickname"></span>

                 <div class="field-form" id="file_photo">
                   <span class="title-field-form">фото</span>
                   <span class="tp-input tp-input-file">
                     <span class="file-upload file-upload-photo">
                       <label>
                         <input type="file" name="file_photo">
                         <span>Добавить фото</span>
                       </label>
                     </span>
                     <input type="text" id="filename-photo" class="filename" disabled>
                   </span>
                 </div>
                 <span   class="error-txt-input input_error_photo"></span>
                 <div class="field-form" id="email">
                   <span class="title-field-form">E-mail</span>
                   <span class="tp-input">
                     <input type="text" placeholder="" name="email" />
                   </span>
                 </div>
                 <span  class="error-txt-input input_error_email"></span>
                 <div class="field-form" id="phone">
                   <span class="title-field-form">Номер телефона</span>
                   <span class="tp-input">
                     <input type="text" placeholder="" name="phone"/>
                   </span>
                 </div>
                 <div class="field-form" id="country">
                   <span class="title-field-form">Страна</span>
                   <span class="tp-input">
                     <input type="text" placeholder="" name="country" />
                   </span>
                 </div>
                 <span  class="error-txt-input input_error_phone"></span>
                 <div class="field-form" id="city">
                   <span class="title-field-form">Город</span>
                   <span class="tp-input">
                     <input type="text" placeholder="" name="city" />
                   </span>
                 </div>
                 <div class="field-form" id="file_track">
                   <span class="title-field-form">трек</span>
                   <span class="tp-input tp-input-file">
                     <span class="file-upload file-upload-track">
                       <label>
                         <input type="file" name="file_track">
                         <span>Добавить трек</span>
                       </label>
                     </span>
                     <input type="text" id="filename-track" class="filename" disabled>
                   </span>

                 </div>
                 <span class="error-txt-input input_error_track"></span>


                 <div class="field-form" id="soundcloud">
                   <span class="title-field-form">link на трек<br/> soundcloud</span>
                   <span class="tp-input">

                     <input type="text" placeholder="" name="soundcloud" />
                   </span>

                 </div>
                 <span align="center"  class="error-txt-input input_error_soundcloud"></span>

               </div>
             </div>
                 <div class="swiper-slide">
                     <div class="form">
                         <div class="field-form">
                             <span class="title-field-form">трек</span>
                             <span class="tp-input tp-input-file">
                         <span class="file-upload file-upload-track">
                             <label>
                                 <input type="file" name="file">
                                 <span>Добавить трек</span>
                             </label>
                         </span>
                         <input type="text" id="filename-track" class="filename" disabled>
                     </span>
                         </div>
                         <div class="field-form">
                             <span class="title-field-form">link на трек<br/> soundcloud</span>
                             <span class="tp-input">
                         <input type="text" placeholder="" />
                     </span>
                         </div>
                     </div>
                 </div>
                 <div class="swiper-slide">
                     <div class="form">
                         <div class="field-form">
                             <span class="title-field-form">Ваше имя</span>
                             <span class="tp-input">
                         <input type="text" placeholder="" />
                     </span>
                         </div>
                         <div class="field-form">
                             <span class="title-field-form">никнейм</span>
                             <span class="tp-input">
                         <input type="text" placeholder="" />
                     </span>
                         </div>
                         <div class="field-form">
                             <span class="title-field-form">E-mail</span>
                             <span class="tp-input">
                         <input type="text" placeholder="" />
                     </span>
                         </div>
                         <div class="field-form">
                             <span class="title-field-form">Номер телефона</span>
                             <span class="tp-input error-input">
                         <input type="text" placeholder="" />
                     </span>
                         </div>
                         <div class="field-form">
                             <span class="title-field-form">link на трек<br/> soundcloud</span>
                             <span class="tp-input">
                         <input type="text" placeholder="" />
                     </span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="nav-check-in">
             <div class="swiper-button-prev swiper-button-prev-check-in next-check-in-step">
                 <span class="glitch-link" data-text="далее">назад</span>
             </div>
             <div class="swiper-button-next  next-check-in-step">
               <span class="glitch-link js_registration" data-user-id={$user_id} data-text="Зарегистрироваться">Зарегистрироваться</span>
             </div>
         </div>
       </div> -->

        <div class=" title-block fadeInUp wow" data-wow-delay="0.2s">
            <h2 class="lang__reg-1" data-text="Реєстрація">
                Реєстрація
            </h2>
        </div>

        <div class="check-in fadeInUp wow" data-wow-delay="0.2s">
            <div class="swiper-container swiper-check-in">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="form">
                            <div>
                                <div>
                                    <div class="field-form" id="nickname">
                                        <span class="lang__reg-2 title-field-form">Нікнейм</span>

                                        <span class="tp-input">
                              <input type="text" placeholder="" name="nickname" required/>
                              <span class="lang__reg-3 error-txt-input error_nickname"></span>
                            </span>
                                    </div>

                                </div>
                                <div class="field-form" id="email">
                                   <span class="title-field-form">E-mail</span>
                                   <span class="tp-input">
                                     <input type="text" placeholder="" name="email" required/>
                                     <span class="error-txt-input  error_email"></span>
                                   </span>
                                 </div>
                            </div>
                            <div >
                                <div class="field-form" id="phone">
                                    <span class="lang__reg-4 title-field-form">Номер телефону</span>
                                    <span class="tp-input">
                            <input type="text" placeholder="+380" name="phone" required/>
                            <span  class="lang__reg-5 error-txt-input error_phone"></span>
                          </span>
                                </div>
                            </div>

                            {{--<div>--}}
                                {{--<div class="field-form" id="district">--}}
                                    {{--<span class="title-field-form">Область</span>--}}
                                    {{--<span class="tp-input">--}}
                            {{--<p>--}}
                              {{--<input type="text" list="district" name="district" class="flexdatalist" />--}}
                              {{--<span class="lang__reg-31 error-txt-input error_district"></span>--}}
                              {{--<datalist id="district">--}}
                                {{--<option class="lang__reg-6" value="Вінницька область"></option>--}}
                                {{--<option class="lang__reg-7" value="Волинська область"></option>--}}
                                {{--<option class="lang__reg-8" value="Дніпропетровська область"></option>--}}
                                {{--<option class="lang__reg-9" value="Донецька область"></option>--}}
                                {{--<option class="lang__reg-10" value="Житомирська область"></option>--}}
                                {{--<option class="lang__reg-11" value="Закарпатська область"></option>--}}
                                {{--<option class="lang__reg-12" value="Запорізька область"></option>--}}
                                {{--<option class="lang__reg-13" value="Івано-Франківська область"></option>--}}
                                {{--<option class="lang__reg-14" value="Київська область"></option>--}}
                                {{--<option class="lang__reg-15" value="Кіровоградська область"></option>--}}
                                {{--<option class="lang__reg-16" value="Луганська область"></option>--}}
                                {{--<option class="lang__reg-17" value="Львівська область"></option>--}}
                                {{--<option class="lang__reg-18" value="Миколаївська область"></option>--}}
                                {{--<option class="lang__reg-19" value="Одеська область"></option>--}}
                                {{--<option class="lang__reg-20" value="Полтавська область"></option>--}}
                                {{--<option class="lang__reg-21" value="Рівненська область"></option>--}}
                                {{--<option class="lang__reg-22" value="Сумська область"></option>--}}
                                {{--<option class="lang__reg-23" value="Тернопільська область"></option>--}}
                                {{--<option class="lang__reg-24" value="Харківська область"></option>--}}
                                {{--<option class="lang__reg-25" value="Херсонська область"></option>--}}
                                {{--<option class="lang__reg-26" value="Хмельницька область"></option>--}}
                                {{--<option class="lang__reg-27" value="Черкаська область"></option>--}}
                                {{--<option class="lang__reg-28" value="Чернігівська область"></option>--}}
                                {{--<option class="lang__reg-29" value="Чернівецька область"></option>--}}
                                {{--<option class="lang__reg-30" value="Автономна Республіка Крим"></option>--}}
                              {{--</datalist>--}}
                            {{--</p>--}}
                          {{--</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div>
                                <div class="field-form" id="city">
                                    <span class="lang__reg-32 title-field-form">Місто</span>
                                    <span class="tp-input">
                            <input type="text" placeholder="" name="city" required/>
                            <span class="lang__reg-33 error-txt-input error_city"></span>
                          </span>
                                </div>
                            </div>
                            <div>
                                <div class="field-form" id="social">
                                    <span class="lang__reg-34 title-field-form">Посилання на соцмережу</span>
                                    <span class="tp-input">
                            <input type="text" placeholder="" name="social" />
                            <span class="lang__reg-35 error-txt-input error_social"></span>
                          </span>
                                </div>
                            </div>
                            <div>
                                <div class="field-form">
                                    <span class="lang__reg-36 title-field-form">фото</span>
                                    <span class="tp-input tp-input-file">
                            <span class="file-upload file-upload-photo">
                              <label>
                                <input type="file" name="file_photo">
                                <span class="lang__reg-37 glitch-link" data-text="Додати фото">Додати фото</span>
                              </label>
                            </span>
                            <span class="lang__reg-38 error-txt-input error_photo"></span>
                            <input type="text" id="filename-photo" class="filename" disabled required>
                          </span>
                                </div>
                            </div>
                            <div>
                                <div class="field-form">
                                    <span class="lang__reg-39 title-field-form">трек</span>
                                    <span class="tp-input tp-input-file">
                            <span class="file-upload file-upload-track">
                              <label>
                                <input type="file" name="file_track">
                                <span class="lang__reg-40 glitch-link" data-text="Додати трек">Додати трек</span>
                              </label>
                            </span>
                            <span class="lang__reg-41 error-txt-input error_track"></span>
                            <input type="text" id="filename-track" class="filename" disabled required>
                          </span>
                                </div>
                            </div>
                            <div>
                                <div class="field-form" id="video">
                                    <span class="lang__reg-43 title-field-form">Посилання на вiдео (embed)</span>
                                    <span class="tp-input">
                            <input type="text" placeholder="" name="video" />
                            <span class="lang__reg-43 error-txt-input error_video"></span>
                          </span>
                                </div>
                            </div>
                            <div>
                                <div class="field-form" id="password">
                                    <span class="lang__reg-44 title-field-form">Пароль</span>
                                    <span class="tp-input">
                            <input type="text" placeholder="" name="password" required/>
                            <span class="lang__reg-43 error-txt-input error_password" ></span>
                          </span>
                                </div>
                            </div>
                            <div>
                                <div class="" id="agree">
                                    <input type="checkbox" class="form-registration-input" id="inputCheckbox" />

                                    <label for="inputCheckbox" class="form-registration-label">
                                        <span class="form-registration-label__indicator"></span>

                                        <span class="lang__reg-42 form-registration-label__text">Я прочитав правила та згоден з умовами</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--  <div class="swiper-slide">
                           <div class="form">
                            <div>
                             <div class="field-form" id="password">
                               <span class="title-field-form">Пароль</span>
                               <span class="tp-input">
                                 <input type="text" placeholder="" name="password" />
                               </span>
                             </div>
                             <span class="error-txt-input error_password"></span>
                           </div>
                           <span class="error-txt-input error_track"></span>
                           * если по какой-то причине не удаётся зарегистрироваться на сайте, воспользуйтесь <a href="https://docs.google.com/forms/d/e/1FAIpQLSeRGsAv-YAhPphsCvQg-cUjoksQL7QiScFa-QZEawu-iK35sg/viewform" style="color: #ffaa4d; text-decoration: underline;" target="_blank">альтернативной формой регистрации</a>
                         </div>
                       </div> -->
                    </div>
                    <div class="swiper-slide">
                        <!--   <div class="form">
                           <div class="field-form" id="password">
                            <span class="title-field-form">Пароль</span>
                            <span class="tp-input">
                              <input type="text" placeholder="" name="password" />
                               <span class="error-txt-input error_password"></span>
                            </span>
                          </div> -->
                        <!--  <div class="field-form">
                           <span class="title-field-form">никнейм</span>
                           <span class="tp-input">
                             <input type="text" placeholder="" />
                           </span>
                         </div>
                         <div class="field-form">
                           <span class="title-field-form">E-mail</span>
                           <span class="tp-input">
                             <input type="text" placeholder="" />
                           </span>
                         </div>
                         <div class="field-form">
                           <span class="title-field-form">Номер телефона</span>
                           <span class="tp-input error-input">
                             <input type="text" placeholder="" />
                           </span>
                         </div>
                         <div class="field-form">
                           <span class="title-field-form">link на трек<br/> soundcloud</span>
                           <span class="tp-input">
                             <input type="text" placeholder="" />
                           </span>
                         </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="nav-check-in">
                <!-- <div class="swiper-button-next  next-check-in-step" id="user">
                  <span class="glitch-link js_registration" data-user-id={$user_id} data-text="Зритель">Зритель</span>
                </div> -->
                <!-- <button class="swiper-button-prev swiper-button-prev-check-in next-check-in-step" style="display: none;" id="back" onclick="back_1()">
                  <span class="glitch-link" data-text="Назад">Назад</span>
                </button> -->

                <button disabled="disabled" class="swiper-button-next  next-check-in-step disallow" id="partaker">
                    <!-- <span class="glitch-link" data-text="Пароль">Пароль</span> -->
                    <span class="lang__reg-43 glitch-link js_registration_participant" data-text="Зареєструватись" data-user-id={$user_id}>Зареєструватись</span>
                </button>

                {{--<button class="swiper-button-next  next-check-in-step" style="display: none;" id="final_step_reg">--}}
                    {{--<span class="lang__reg-43 glitch-link js_registration_participant" data-text="Зареєструватись" data-user-id={$user_id}>Зареєструватись</span>--}}
                {{--</button>--}}
            </div>
        </div>

        <div class="footer fadeInUp wow" data-wow-delay="0.2s">

            <a href="mailto:support@pit-battle.com" class="mail-support glitch-link" data-text="support@pit-battle.com">support@pit-battle.com</a>
            <div class="right-ftr">
                <div class="soc">
                    <a href="https://www.instagram.com/pitbull_battle" class="fab fa-instagram"></a>
                    <a href="https://www.facebook.com/pitbulldrink" class="fab fa-facebook-f"></a>
                    <a href="https://www.youtube.com/channel/UCs2phFvcrCe49aGtD5eXaEg" class="fab fa-youtube"></a>
                    <a href="https://soundcloud.com/pit_bull_battle" class="fab fa-soundcloud"></a>
                    <a href="https://vk.com/pitbull_energy" class="fab fa-vk"></a>
                    <a href="https://t.me/Pitbullbattle" class="fab fa-telegram-plane"></a>
                </div>
                <div class="logo-ftr">
                    <a href="#"><img src="/public/img/logo-1.png" alt="" /></a>
                    <a href="#"><img src="/public/img/logo-2.png" alt="" /></a>
                </div>
            </div>


        </div>
        <div id="cube-loader" class="loader">
            <div class="ball one"><div class="inner"></div></div>
            <div class="ball two"><div class="inner"></div></div>
            <div class="ball three"><div class="inner"></div></div>
            <div class="ball four"><div class="inner"></div></div>
            <div class="ball five"><div class="inner"></div></div>
            <div class="ball six"><div class="inner"></div></div>
            <div class="ball center"><div class="inner"></div></div>
        </div>
    </div>
</div>

{{--<script src="/public/js/script.js"></script>--}}
{{--<script src="/public/js/jquery.cookie.js"></script>--}}
{{--<script src="/public/js/fancybox.min.js"></script>--}}
{{--<script src="/public/js/swiper.min.js"></script>--}}
{{--<script src="/public/js/mgGlitch.min.js"></script>--}}
{{--<script src="/public/js/core.js"></script>--}}
{{--<script src="/public/js/wow.min.js"></script>--}}
{{--<script src="/public/js/jquery.flexdatalist.min.js"></script>--}}
{{--<script src="/public/js/lang.js?234"></script>--}}
<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.cookie.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/fancybox.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/swiper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/mgGlitch.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.flexdatalist.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/registration.js') }}"></script>



<script>
    $('.flexdatalist').flexdatalist({
        minLength: 0,
    });
</script>

<script type="text/javascript">

    // $("input#social_name").val($.cookie('social_name'));


    function LoaderShow(){
        $("#cube-loader").show();
    }
    function LoaderHide(){
        $("#cube-loader").hide();
    }
    function PopUpShow(){
        $("#popup1").show();
    }

    function getCookie(name) {
        var matches = document.cookie.match(new RegExp(
            "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
        ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    }
    function deleteCookie(name) {
        setCookie(name, "", {
            expires: -1
        })
    }
    // $(document).ready(function(){
    //     LoaderHide();
    //
    //     var photo ;
    //     $(document).on('change',"input[name='file_photo']",function(e){
    //         photo = e.target.files[0];
    //     })
    //
    //     var track ;
    //     $(document).on('change',"input[name='file_track']",function(e){
    //         track = e.target.files[0];
    //
    //     })
    //
    //     // $('.js_registration_participant').click(function(e){
    //     //     LoaderShow();
    //     //     var nickname=$('input[name="nickname"]').val();
    //     //     var social=$('input[name="social"]').val();
    //     //     // var email=$('input[name="email"]').val();
    //     //     var phone=$('input[name="phone"]').val();
    //     //     // var password=$('input[name="password"]').val();
    //     //     var city=$('input[name="city"]').val();
    //     //     var district=$('input[name="district"]').val();
    //     //     var formData = new FormData();
    //     //     formData.append('nickname', nickname);
    //     //     // formData.append('email', email);
    //     //     formData.append('phone', phone);
    //     //     formData.append('photo', photo);
    //     //     formData.append('track', track);
    //     //     formData.append('district', district);
    //     //     formData.append('city', city);
    //     //     formData.append('social', social);
    //     //     // formData.append('password', password);
    //     //
    //     //     $.ajax({
    //     //         url: '/registration/',
    //     //         type: 'POST',
    //     //         data: formData,
    //     //         cache: false,
    //     //         dataType: 'json',
    //     //         processData: false,
    //     //         contentType: false,
    //     //
    //     //         success: function(data) {
    //     //             LoaderHide();
    //     //             console.log(data);
    //     //             $('.error_email').empty();
    //     //             $('.error_phone').empty();
    //     //             $('.error_name').empty();
    //     //             $('.error_nickname').empty();
    //     //             $('.error_track').empty();
    //     //             $('.error_photo').empty();
    //     //             $('.error_city').empty();
    //     //             console.log(data.result);
    //     //             if(data.result.result=='0'){
    //     //                  if(data.result.err.email!='') {
    //     //                   $('.error_email').text(data.result.err.email);
    //     //                   $(".field-form#email > span.tp-input").addClass('error-input');
    //     //                 }
    //     //                 if(data.result.err.city!='') {
    //     //                     $('.error_city').text(data.result.err.city);
    //     //                     $(".field-form#city > span.tp-input").addClass('error-input');
    //     //                 }
    //     //                 if(data.result.err.phone!='') {
    //     //                     $(".field-form#phone > span.tp-input").addClass('error-input');
    //     //                     $('.error_phone').text(data.result.err.phone);
    //     //                 }
    //     //                 if(data.result.err.photo!='') {
    //     //                     $(".field-form#file_photo > span.tp-input").addClass('error-input');
    //     //                     $('.error_photo').text(data.result.err.photo);
    //     //                 }
    //     //                 if(data.result.err.nickname!='') {
    //     //                     $(".field-form#nickname > span.tp-input").addClass('error-input');
    //     //                     $('.error_nickname').text(data.result.err.nickname);
    //     //                 }
    //     //                 if(data.result.err.track!='') {
    //     //                     $(".field-form#file_track > span.tp-input").addClass('error-input');
    //     //                     $('.error_track').text(data.result.err.track);
    //     //                 }
    //     //
    //     //                 if(data.result.err.social!='') {
    //     //                     $(".field-form#social > span.tp-input").addClass('error-input');
    //     //                     $('.error_social').text(data.result.err.social);
    //     //                 }
    //     //             }else{
    //     //                 // LoaderHide();
    //     //                 window.location.href="/participants/";
    //     //             }
    //     //             // do smth.
    //     //         },
    //     //         error: function (xhr, ajaxOptions, thrownError) {
    //     //             console.log(xhr);
    //     //             // alert(xhr.status);
    //     //             // alert(thrownError);
    //     //         }
    //     //     });
    //     //
    //     //
    //     //
    //     // });
    //
    //
    //
    // })
</script>


<div class="popup-answer" style="display: none">
    <div class="popup-answer__inner">
        <div class="popup-answer__hold">
        <span class="popup-answer-close">
          <svg class="popup-answer-close__ico" width="30" height="30" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M59.7 10.3C52.9667 3.43333 44.7333 0 35 0C25.4 0 17.1667 3.43333 10.3 10.3C3.43333 17.1667 0 25.4 0 35C0 44.7333 3.43333 52.9667 10.3 59.7C17.1667 66.5667 25.4 70 35 70C44.7333 70 52.9667 66.5667 59.7 59.7C66.5667 52.9667 70 44.7333 70 35C70 25.4 66.5667 17.1667 59.7 10.3ZM35 7C42.7333 7 49.3333 9.73333 54.8 15.2C60.2667 20.6667 63 27.2667 63 35C63 42.7333 60.2667 49.3333 54.8 54.8C49.3333 60.2667 42.7333 63 35 63C27.2667 63 20.6667 60.2667 15.2 54.8C9.73333 49.3333 7 42.7333 7 35C7 27.3333 9.73333 20.7333 15.2 15.2C20.7333 9.73333 27.3333 7 35 7ZM49.15 26.55C49.95 25.75 50.35 24.8167 50.35 23.75C50.35 22.6167 49.95 21.65 49.15 20.85C48.35 20.05 47.4167 19.65 46.35 19.65C45.2167 19.65 44.25 20.05 43.45 20.85L34.95 29.35L26.55 20.85C25.75 20.05 24.8167 19.65 23.75 19.65C22.6167 19.65 21.65 20.05 20.85 20.85C20.05 21.65 19.65 22.6167 19.65 23.75C19.65 24.8167 20.05 25.75 20.85 26.55L29.35 34.95L20.85 43.45C20.05 44.25 19.65 45.2167 19.65 46.35C19.65 47.4167 20.05 48.35 20.85 49.15C21.65 49.95 22.6167 50.35 23.75 50.35C24.8167 50.35 25.75 49.95 26.55 49.15L34.95 40.65L43.45 49.15C44.25 49.95 45.2167 50.35 46.35 50.35C47.4167 50.35 48.35 49.95 49.15 49.15C49.95 48.35 50.35 47.4167 50.35 46.35C50.35 45.2167 49.95 44.25 49.15 43.45L40.65 34.95L49.15 26.55Z" fill="black"/>
          </svg>
        </span>

            <div class="popup-answer-header">
          <span class="popup-answer-header__title">
            Спасибо!
          </span>
            </div>

            <div class="popup-answer-body">
          <span class="popup-answer-body__text">
            Ваш голос засчитан!
          </span>
            </div>
        </div>

        <span class="popup-answer__substrate"></span>
    </div>
</div>


<script>
    //checkbox
    $('#inputCheckbox').on('change', allow);

    $('#partaker span').on('click', disallow);

    function allow() {
        if ($(this).prop('checked') == true) {
            $('#partaker').prop('disabled',false)
                .removeClass('disallow');

            $('#inputCheckbox').removeClass('disallow');
        } else {
            $('#partaker').prop('disabled',true).addClass('disallow');
        }
    }

    function disallow() {
        if ($('#partaker').prop('disabled') == true) {
            $('#inputCheckbox').addClass('disallow');
        }
    }

    //popup
    $('.popup-answer-close').on('click',closePopup);
    $('.popup-answer__substrate').on('click',closePopup);

    function closePopup() {
        $('.popup-answer').hide();
    }

    $(document).ready(function(){
        // lang = $.cookie('lang');
        // if(lang == 'ru') { lang_ru(); }
        //
        // $("#popup1").hide();
        LoaderHide();
    });
</script>

</body>
</html>