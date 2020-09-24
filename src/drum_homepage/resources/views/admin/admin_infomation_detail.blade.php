@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>AdminInfomationDetail</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="list-group">
                        <!-- お知らせ用フォーム -->
                        <form method="POST" action="/admin/infomation/detail/{$infomation->id}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <table>
                                <tr>
                                    <td><input　type="hidden" name="id" value="{{$infomation->id}}" required></td>
                                </tr>
                                <tr>
                                    <td>タイトル:</td>
                                    <td><input type="title" name="info_name" value="{{$infomation->info_name}}" required></td>
                                </tr>
                                <tr>
                                    <td>お知らせ内容:</td>
                                    <td><textarea name="info_body" rows="5" cols="50" value="{{$infomation->info_body}}" required>{{$infomation->info_body}}</textarea></td>
                                </tr>
                                <tr>
                                    <td>月:</td>
                                    <td><input type="title" name="month" value="{{$infomation->month}}" required></td>
                                </tr>
                                <tr>
                                    <td>年:</td>
                                    <td><input type="title" name="year" value="{{$infomation->year}}" required></td>
                                </tr>
                                <tr>
                                    <td>画像パス:</td>
                                    <td><input type="title" name="image_path" value="{{$infomation->image_path}}"></td>
                                </tr>
                            </table>
                            <button type="submit">送信</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
