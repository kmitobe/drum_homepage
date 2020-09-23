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
                <h1>Schedule</h1>
                <form method="POST" action="/schedule/search" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="month" name="month" required>
                    <button type="submit">表示</button>
                </form>
            @isset($schedule)
                <h2>{{ $timing }}</h2>
                <img src="{{ asset('storage/'.$schedule->file_name)}}"　class="img-responsive center-block">
            @else
                <p>準備中</p>
            @endisset
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
