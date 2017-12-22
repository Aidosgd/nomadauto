@extends('layouts.app')

@section('content')
    <div class="container main-slider">
        @foreach($gallery->images->sortBy('pivot.weight') as $image)
          <div class="slide row">
              <div class="col-md-6 left-side">
                  <div class="content">
                      <div class="title">{{ $image->node->title }}</div>
                      <div class="description">{{ strip_tags($image->node->description) }}</div>
                      <a href="{{ $image->node->url }}" class="btn btn-blue">Подробнее</a>
                  </div>
              </div>
              <div class="col-md-6 hidden-xs">
                  <img src="{{ $image->path }}" alt="{{ $image->node->title }}">
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

    <div class="rental_of_special_equipment">
        <div class="container">
            <h1>Аренда спецтехники</h1>
            <h5>Мы имеем больщой опыт работ в сфере предоставления услуг по сдаче спецтехники в аренду. Наши операторы ответят на интересуюшие Вас вопросы, и помогут подобрать нужную спецтехнику</h5>
            <div class="row main_row">
                <div class="left-side col-md-5">
                    <div class="block" style="padding: 20px 20px 0">
                        <h3>Аренда автовышки - безопасные высотные работы</h3>
                        <p>С помощью автовышки любые высотные работы - от ремонта линий электропередач до замены рекламного щита становятся удобными и безопасными</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="img machine">
                                    <img src="/css/images/machin.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a style="margin-top: 50px;" href="/" class="btn btn-blue">Подробнее</a>
                            </div>
                        </div>
                        <ul>
                            <li><a href="/">Самосвал автомобильный</a></li>
                            <li><a href="/">Экскаватор</a></li>
                            <li><a href="/">Бульдозер</a></li>
                            <li><a href="/">Каток вибрационный</a></li>
                        </ul>
                    </div>
                </div>
                <div class="right-side col-md-7">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="block tree" style="padding: 20px 15px;">
                                <h3>Почему выбирают нас</h3>
                                <p>За годы мы заработали хорошую ...</p>
                                <div class="img">
                                    <img src="/css/images/tree.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="block orange">
                                <h3>Основное направление деятельности нашей компании</h3>
                                <p>В настоящее время парк насчитывает около 30 единиц самосвалов марок FAW, HOWO, SHACMAN  и KAMAZ</p>
                                <p>Ежедневно мы проводим мониторинг технического состояния техники</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="block clock" style="padding: 20px;">
                                <h3>не хотите тратить время на поиск нужной техники?</h3>
                                <p>Напишите нам, и наш менеджер подберет технику для Вас!</p>
                                <a href="/" class="btn btn-blue">Подробнее</a>
                                <div class="img">
                                    <img src="/css/images/clock.png" alt="">
                                </div>
                            </div>
                        </div>
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
            dots: true
        });

        $('.brands .container').slick({
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
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
