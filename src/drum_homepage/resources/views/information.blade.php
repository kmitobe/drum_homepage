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
            <h1>Information</h1>
            <dl class="row">
                <dt class="col-sm-3">お知らせ</dt>
                <dd class="col-sm-9">
                    <p>ドラムのサイトがリニューアルしました</p>
                </dd>
            </dl>
        </div>
        <div id="footer">
        @component('components.footer')
        @endcomponent
        </div>
        
        @component('components.script')
        @endcomponent
    </body>
</html>
