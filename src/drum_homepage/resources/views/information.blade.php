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
                <h1>Information</h1>

                <!-- お知らせ情報 -->
                @foreach($infomation as $info)
                <div class="card">
                    <h5>{{$info->info_name}}</h5>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>{{$info->info_body}}</p>
                            <footer class="blockquote-footer">
                                {{ $info->year }}-{{$info->month}}
                            </footer>
                        </blockquote>
                    </div>
                </div>
                @endforeach
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
