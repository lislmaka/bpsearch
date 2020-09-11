<div class="container-fluid bg-secondary">
    <div class="container-xl py-3">
        <div class="text-white font-weight-bold">
            &copy; {{ Config::get('app.name') }}, 2019 - {{ now()->year }} /
            {{ config('site.site_phone') }} /
            {{ config('site.site_email') }}
            <br>
            Информация, размещенная на сайте, не является публичной офертой
        </div>
    </div>
</div>