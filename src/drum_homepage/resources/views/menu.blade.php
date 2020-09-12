<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @component('components.head')
        @endcomponent
    </head>
    <body>
        <div id="navber">
        @component('components.navber')
        @endcomponent
        </div>
        <!-- コンテンツ -->
        <div class="container-fluid">
            <div class="wrapper">
                <img src="/img/headerimag.jpg" class="img-fluid" alt="Topの画像">
                <h1>TOP</h1>
                <p class="lead">プロへの登竜門と呼ばれた、ライブハウス</p>
                <p></p>
                <p></p>
            </div>
        </div>
        <div id="footer">
        @component('components.footer')
        @endcomponent
        </div>
        
        @component('components.script')
        @endcomponent
    </body>
</html>
