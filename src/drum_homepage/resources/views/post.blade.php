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
        <div class="container">
            <form method="POST" action="/create">
                @csrf
                <label>タイトル</label>
                <br>
                <input type="text" name="title" size="40">
                <br>
                <label>投稿内容</label>
                <br>
                <textarea name="body" rows="10" cols="100"></textarea>
                <input type="submit">
            </form>
            <div></div>
        </div>
        <div id="footer">
        @component('components.footer')
        @endcomponent
        </div>
        
        @component('components.script')
        @endcomponent
    </body>
</html>
