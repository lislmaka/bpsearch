{{-- Begin Desktop --}}
<div class="jumbotron rounded-0 bg-transparent main-banner-bg-desktop d-none d-md-block">
    <div class="container-xl">

        <div class="row">
            <div class="col-md-7">
                <h1 class="display-4 font-weight-normal text-white">Сервис для поиска парнеров и инвесторов</h1>
                <p class="h2 my-5 text-white font-weight-light">
                    Расскажите о своей идее, действующем бизнесе либо стартапе и найдите команду партнеров и инвесторов
                </p>


                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-lg btn-primary" href="#" role="button">
                        <span class="h4">
                            Разместить проект
                        </span>
                    </a>
                    <a class="btn btn-lg btn-light" href="#" role="button">
                        <span class="h4">
                            Посмотреть проекты
                        </span>
                    </a>
                </div>


            </div>
            <div class="col-md-5">
                {{-- Begin search --}}
                <div class="card mb-3 shadow-lg block-decor-lt">
                    <div class="card-body d-flex align-items-center">

                        <div class="h1 font-weight-bold">
                            <?php echo number_format(rand(1000, 10000), 0, '', '&nbsp;'); ?>
                        </div>
                        <sup class="lead">
                            +<?php echo number_format(rand(10, 50), 0, '', '&nbsp;'); ?>
                        </sup>

                        <p class="card-text ml-3">
                            Количество зарегистрированных активных проектов
                        </p>
                    </div>
                    <div class="card-footer text-muted border-top">
                        @php
                            (shuffle($faces))
                        @endphp
                        @foreach($faces as $face)
                            @if($loop->index < 6)
                                <img src="{{ $face }}" class="img-thumbnail rounded-circle">
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="card mb-3 shadow-lg block-decor-lt">
                    <div class="card-body d-flex align-items-center">
                        <div class="h1 font-weight-bold">
                            <?php echo number_format(rand(1000, 10000), 0, '', '&nbsp;'); ?>

                        </div>
                        <sup class="lead">
                            +<?php echo number_format(rand(10, 50), 0, '', '&nbsp;'); ?>
                        </sup>
                        <p class="card-text ml-3">
                            Количество участников в системе - партенеры, инвесторы, ЦА
                        </p>
                    </div>
                    <div class="card-footer text-muted border-top">
                        @php
                            (shuffle($faces))
                        @endphp
                        @foreach($faces as $face)
                            @if($loop->index < 6)
                                <img src="{{ $face }}" class="img-thumbnail rounded-circle">
                            @endif
                        @endforeach
                    </div>
                </div>
                {{-- End search --}}
            </div>
        </div>
    </div>
</div>
{{-- End Desktop --}}

{{-- Begin Mobile --}}
<div class="jumbotron rounded-0 bg-transparent main-banner-bg-mobile d-block d-md-none">
    <div class="container-xl">

        <div class="row">
            <div class="col-md-7">
                <h1 class="display-5 font-weight-bold text-white">Поиск парнеров и инвесторов</h1>
                <p class="lead my-5 text-white font-weight-light">
                    Расскажите о своей идее, действующем бизнесе либо стартапе и найдите команду партнеров и инвесторов
                </p>


                <div class="btn-group mb-5" role="group" aria-label="Basic example">
                    <a class="btn btn-primary" href="#" role="button">
                        Разместить проект
                    </a>
                    <a class="btn btn-light" href="#" role="button">
                        Посмотреть проекты
                    </a>
                </div>


            </div>
            <div class="col-md-5">
                {{-- Begin search --}}
                <div class="card mb-3 shadow-lg block-decor-lt">
                    <div class="card-body d-flex align-items-center">

                        <div class="h1 font-weight-bold">
                            <?php echo number_format(rand(300, 5000), 0, '', '&nbsp;'); ?>
                        </div>
                        <sup class="lead">
                            +<?php echo number_format(rand(10, 50), 0, '', '&nbsp;'); ?>
                        </sup>

                        <p class="card-text ml-3">
                            Размещено проектов
                        </p>
                    </div>
                    <div class="card-footer text-muted border-top text-center">
                        @php
                            (shuffle($faces))
                        @endphp
                        @foreach($faces as $face)
                            @if($loop->index < 4)
                                <img src="{{ $face }}" class="img-thumbnail rounded-circle">
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="card mb-3 shadow-lg block-decor-lt">
                    <div class="card-body d-flex align-items-center">
                        <div class="h1 font-weight-bold">
                            <?php echo number_format(rand(300, 5000), 0, '', '&nbsp;'); ?>

                        </div>
                        <sup class="lead">
                            +<?php echo number_format(rand(10, 50), 0, '', '&nbsp;'); ?>
                        </sup>
                        <p class="card-text ml-3">
                           Участников в системе
                        </p>
                    </div>
                    <div class="card-footer text-muted border-top text-center">
                        @php
                            (shuffle($faces))
                        @endphp
                        @foreach($faces as $face)
                            @if($loop->index < 4)
                                <img src="{{ $face }}" class="img-thumbnail rounded-circle">
                            @endif
                        @endforeach
                    </div>
                </div>
                {{-- End search --}}
            </div>
        </div>
    </div>
</div>
{{-- End Mobile --}}
