<div class="jumbotron rounded-0 bg-transparent main-banner-bg">
    <div class="container-xl">

        <div class="row">
            <div class="col-md-7">
                <h1 class="display-4 font-weight-normal text-white">Сервис для поиска парнеров и инвесторов</h1>
                <p class="h2 my-5 text-white font-weight-light">
                    Расскажите о своей идее, действующем бизнесе либо стартапе и найдите команду партнеров и инвесторов
                </p>


                <a class="btn btn-lg btn-primary" href="#" role="button">
                    <span class="h4">
                        Добавить проект
                    </span>
                </a>


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
                            <?php echo number_format(rand(300, 5000), 0, '', '&nbsp;'); ?>

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
