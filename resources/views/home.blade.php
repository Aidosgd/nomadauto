@extends('layouts.app')

@section('content')
    <div class="container-fluid main-slider">
        @foreach($gallery->images->sortBy('pivot.weight') as $image)
          <div class="slide">
              <img src="{{ $image->path }}" alt="{{ $image->node->title }}">
              <div class="content">
                  <div class="title">{{ $image->node->title }}</div>
                  <div class="description">{{ strip_tags($image->node->description) }}</div>
                  <a href="{{ $image->node->url }}" class="btn btn-link">Подробнее</a>
              </div>
          </div>
        @endforeach
    </div>

    <div class="brands">
        <div class="container">
            @foreach($galleryBrands->images->sortBy('pivot.weight') as $image)
              <div class="slide">
                  <img src="{{ $image->path }}">
              </div>
            @endforeach
        </div>
    </div>

    <div class="home-four">
        <div class="container">
            <div class="row">
                <div class="col-md-5 block-left">
                    <div class="col-md-6">
                        <div class="w-block">
                            <p>Собственный парк</p>
                            <div class="number">50+</div>
                            <p>единиц техники</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="w-block">
                            <p>Опыт работы</p>
                            <div class="number">5+</div>
                            <p>лет</p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="w-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="number">70+</div>
                                </div>
                                <div class="col-md-6">
                                    <p>Штат сотрудников <br> профессионалов</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 block-right">
                    <div class="w-block">
                        <h3>Безопасность - всегда!</h3>
                        <ul>
                            <li>Тщательно выполняем все необходимые требования по Технике Безопасности</li>
                            <li>Ремонтные работы проводят профессиональные и квалифицированные механики-слесари, имеющие все необходимые допуски к работам</li>
                            <li>Сотрудничаем только с проверенными официальными поставщиками запасных частей и расходных материалов</li>
                        </ul>

                        <a class="btn btn-link" href="">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-rental container">
        <h1>Аренда спецтехники</h1>
        <h5>Мы имеем больщой опыт работ в сфере предоставления услуг по сдаче спецтехники в аренду. Наши операторы ответят на интересуюшие Вас вопросы, и помогут подобрать нужную спецтехнику</h5>

        <div class="home-rental__lists">
            <div class="home-rental__item">
                <img style="margin-top: -10px;" src="/css/images/hr5.png" alt="">
                <p>Самосвалы Shacman </p>
            </div>

            <div class="home-rental__item">
                <img src="/css/images/hr4.png" alt="">
                <p>Гусеничные Экскаваторы</p>
            </div>

            <div class="home-rental__item">
                <img src="/css/images/hr3.png" alt="">
                <p>Автогрейдера XCMG 180-215</p>
            </div>

            <div class="home-rental__item">
                <img src="/css/images/hr2.png" alt="">
                <p>Катки XCMG XS162 </p>
            </div>

            <div class="home-rental__item">
                <img style="padding: 0;margin-top: 20px;" src="/css/images/hr1.png" alt="">
                <p>Топливозаправщик Howo</p>
            </div>
        </div>
    </div>

    <div class="home-services">
        <div class="container">
            <h1>Наши услуги</h1>
            <h5>Клиентоориентированный подход и строго индивидуальный подход к каждому заказу позволяют нам предлагать клиентам выгодные условия сотрудничества. Мы помогаем подобрать оборудование, отвечающее задачам проекта, доставляем спецтехнику в любой регион Москвы и области в кратчайшие сроки.</h5>

            <div class="home-services__list row">
                <div class="col-md-3">
                    <div class="home-services__item">
                        <img src="/css/images/hs8.png" alt="">
                        <p>Разработка грунта</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-services__item">
                        <img src="/css/images/hs7.png" alt="">
                        <p>Рытьё котлованов</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-services__item">
                        <img src="/css/images/hs6.png" alt="">
                        <p>Рытьё <br> траншей</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-services__item">
                        <img src="/css/images/hs5.png" alt="">
                        <p>Вывоз <br> грунта</p>
                    </div>
                </div>
            </div>
            <div class="home-services__list row">
                <div class="col-md-3">
                    <div class="home-services__item">
                        <img src="/css/images/hs4.png" alt="">
                        <p>Вывоз снега</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-services__item">
                        <img src="/css/images/hs3.png" alt="">
                        <p>Планировочные  работы</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-services__item">
                        <img src="/css/images/hs2.png" alt="">
                        <p>Бурение ямобуром</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-services__item">
                        <img src="/css/images/hs1.png" alt="">
                        <p>Перевозка песка, гравия</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="projects">
        <div class="container">
            <h1>Наши проекты</h1>
            <h5>Чтобы доставить груз по назначенному адресу или добраться вовремя в конкретное место не обойтись без качественных транспортных услуг</h5>

            <div class="projects-list row">
                @foreach($projectsPosts as $item)
                  <div class="projects-item col-md-4">
                      <div class="video">
                        <?php
                          $url = parse_url(strip_tags($item->node->content));
                          parse_str($url['query'], $output);
                        ?>
                          <iframe width="100%" src="https://www.youtube.com/embed/{{ $output['v'] }}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                      </div>
                      <h4>{{ $item->node->title }}</h4>
                      <p>{{ strip_tags($item->node->teaser) }}</p>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.main-slider').slick({
            dots: true,
            arrows: false
        });

        $('.brands .container').slick({
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
        });
    </script>
@endsection
