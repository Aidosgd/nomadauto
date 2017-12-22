<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/css/images/logo.png" alt="">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-top">
                    <li><a class="phone" href="/">8 (727) 244 47 77</a></li>
                    <li><a class="callme hidden-xs" href="/">Позвонить нам</a></li>
                    <!-- <li><a class="search" href="/"><i class="fa fa-search"></i></a></li> -->
                </ul>

                <ul class="nav navbar-nav navbar-right navbar-bottom" style="display: block">
                  @foreach($main_menu as $item)
                        <li>
                            <a href="{{ $item->link }}"
                               class="{{ (app()['request']->url() == url('/'.$item->link)) ? 'active' : ''}}">
                                {{ $item->node->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>
