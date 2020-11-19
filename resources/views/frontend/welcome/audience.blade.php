<!-- <div class="mt-5 d-none d-md-block">&nbsp;</div> -->
{{-- Begin desktop --}}
<div class="text-center h1 font-weight-bold mt-5 d-none d-md-block">
    Что дает сервис
</div>
<!-- <div class="text-center h4 font-weight-normal mt-3 d-none d-md-block">
    Если в проекте есть динамика значит он интересен для потенциальных партнеров и инвесторов
</div> -->
{{-- End desktop --}}

{{-- Begin mobile --}}
<div class="text-center h2 font-weight-bold mt-5 d-block d-md-none">
    Что дает сервис
</div>
{{-- End desktop --}}


<div class="row mt-5">
    <div class="col-md-5">
        <div class="card shadow-lg mb-3">
            <div class="card-header font-weight-bold lead">
                Информация по составу аудитории
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Авторы проектов
                    <span class="badge alert-info">
                        <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Инвесторы
                    <span class="badge alert-info">
                        <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Профессиональное сообщество
                    <span class="badge alert-info">
                        <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                    </span>
                </li>
            </ul>
        </div>
        <div class="card shadow-lg mb-3">
            <div class="card-header font-weight-bold lead">
                ТОП 3 направлений проектов
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Экономика
                    <span class="badge alert-info">
                        <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    ИТ
                    <span class="badge alert-info">
                        <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Спорт и развлечения
                    <span class="badge alert-info">
                        <?php echo number_format(rand(10, 100), 0, '', ' '); ?>
                    </span>
                </li>
            </ul>
            <div class="card-footer text-muted">
                Общее кол-во категорий проектов - <span class="badge alert-info"><?php echo number_format(rand(10, 100), 0, '', ' '); ?></span> Полный каталог проектов доступен на странице <a href="#">проекты</a>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <!--  -->
        <div class="card border-0 mb-3 bg-transparent">
            <div class="card-body">
                <div class="card-title h3">
                    Для авторов проектов
                </div>
                <p class="card-text">
                    Размещая свой проект вы получаете возможность получить профессиональный отклик от сообщества, найти партнеров в свой проект а также найти инвестиции
                </p>

                <div class="card-title h3">
                    Для профессионалов
                </div>
                <p class="card-text">
                    Вы сможете найти и присоединиться к проекту, который удовлетворяет вашим желаниям и профессиональным возможностям. Усиливайте комманду, участвуйте в развитии и зарабатывайте
                </p>

                <div class="card-title h3">
                    Для инвесторов
                </div>
                <p class="card-text">
                    Вы сможете найти интересные для вас проекты, пообщаться с автораи проектов и задать интересующие вас вопросы. Мы также можете следить за динамикой развития проектов и принять для себя взвешенное решение по поводу инвестирования
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
                Зарегистрироваться
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
                Зарегистрироваться
            </span>
        </a>
        <a class="btn btn-light" href="#" role="button">
            <span class="">
                Посмотреть проекты
            </span>
        </a>
    </div>
</div>
