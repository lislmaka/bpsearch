<!-- <div class="mt-5 d-none d-md-block">&nbsp;</div> -->
{{-- Begin desktop --}}
<div class="text-center h1 font-weight-bold mt-5 d-none d-md-block">
    Как работает сервис
</div>
<!-- <div class="text-center h4 font-weight-normal mt-3 d-none d-md-block">
    Если в проекте есть динамика значит он интересен для потенциальных партнеров и инвесторов
</div> -->
{{-- End desktop --}}

{{-- Begin mobile --}}
<div class="text-center h2 font-weight-bold mt-5 d-block d-md-none">
    Как работает система
</div>
{{-- End desktop --}}


<div class="row mt-5">

    <div class="col-md-5">
        <div class="card shadow-lg mb-3">
            <div class="card-header font-weight-bold lead">
                Обсуждаемые проекты
            </div>
            <div class="card-body p-0">
                <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($projects as $project)
                            @php
                                ($active = '')
                            @endphp
                            @if($loop->first)
                                @php
                                    ($active = 'active')
                                @endphp
                            @endif
                            <div class="carousel-item {{ $active }}">
                                <div class="card border-light">
                                    <div class="card-header bg-white">
                                        <img src="{{ Arr::random($faces) }}"
                                            class="img-thumbnail rounded-circle float-left mr-3">
                                        <a href="{{ url('project/'.$project->id) }}"
                                            class="lead font-weight-bold">
                                            {{ Str::limit($project->name, 45) }}
                                        </a>
                                    </div>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Инициатор проекта
                                            <span class="badge alert-info">
                                                {{ $project->user->name }}
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Интересуются проектом
                                            <span class="badge alert-info">
                                                <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Активность по проекту
                                            <span class="badge alert-info">
                                                <?php echo number_format(rand(7, 10), 0, '', ' '); ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Отрасль
                                            <span class="badge alert-info">
                                                Финансы
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="card-footer text-muted border-top d-block d-md-none text-center">
                                        @php
                                            (shuffle($faces))
                                        @endphp
                                        @foreach($faces as $face)
                                            @if($loop->index < 4)
                                                <img src="{{ $face }}" class="img-thumbnail rounded-circle">
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="card-footer text-muted border-top d-none d-md-block">
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
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <!--  -->
        <div class="card border-0 mb-3 bg-transparent">
            <div class="card-body">
                <div class="card-title h3">
                    Разместите свой проект
                </div>
                <p class="card-text">
                    Сделайте первый шаг к успешной реализации проекта - зарегистрируйтесь и бесплатно разместите свой
                    проект
                </p>

                <div class="card-title h3">
                    Расскажите о себе
                </div>
                <p class="card-text">
                    Инициатор проекта это ключевое звено всего проекта в целом. Раскажите кратко о себе и о ваших
                    знаниях которые пригодятся для реализации проекта
                </p>

                <div class="card-title h3">
                    Двигайтесь к поставленной цели
                </div>
                <p class="card-text">
                    Парнерам и потенциальным инвесторам нравятся живие проекты. Публикуйте изменения по проекту и тем
                    самым давайте понять окружающим что проект живет и развивается
                </p>
            </div>
        </div>
    </div>
</div>

<!-- D begin  -->
<div class="text-center d-none d-md-block">
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

<!-- M begin -->
<div class="text-center d-block d-md-none mx-3">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a class="btn btn-primary" href="#" role="button">
            <span class="">
                Добавить проект
            </span>
        </a>
        <a class="btn btn-light" href="#" role="button">
            <span class="">
                Посмотреть проекты
            </span>
        </a>
    </div>
</div>
