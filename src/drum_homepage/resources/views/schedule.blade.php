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
            <h1>Schedule</h1>
            <div class="container">
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
