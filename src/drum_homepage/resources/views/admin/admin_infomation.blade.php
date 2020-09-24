@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>AdminInfomation</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="list-group">
                        <!-- お知らせ用フォーム -->
                        <form method="POST" action="/admin/infomation" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <table>
                                <tr>
                                    <td>タイトル:</td>
                                    <td><input type="title" name="info_name" placeholder="タイトル" required></td>
                                </tr>
                                <tr>
                                    <td>お知らせ内容:</td>
                                    <td><textarea name="info_body" rows="5" cols="50"　placeholder="お知らせ内容" required></textarea></td>
                                </tr>
                            </table>
                            <button type="submit">送信</button>
                        </form>
                    @foreach($infomations as $infomation)
                        <a href="/admin/infomation/detail/{{$infomation->id}}" class="list-group-item list-group-item-action">{{ $infomation->info_name }}</a>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
