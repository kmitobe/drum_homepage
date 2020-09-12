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
        <div class="container">
            <div class="wrapper">
                <h1>Member</h1>
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
