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
            <div>
                <h2>タイトルリスト</h2>
                <table>
                    <tr>
                        <th>タイトル</th>
                        <th>編集ボタン</th>
                        <th>削除ボタン</th>
                    </tr>
                        @foreach($title_list as $title)
                        <tr>
                            <td><a href="#">{{ $title->id }}.{{ $title->title }}</a></td>
                            <td>
                                <form action="/list/edit/{{$title->id}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="submit" value="編集" class="btn btn-secondary">
                                </form>
                            </td>
                            <td>
                                <form action="/list/delete/{{$title->id}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="submit" value="削除" class="btn btn-secondary">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </table>
                <a href="{{ url('post') }}"><span>新規登録</span></a>
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
