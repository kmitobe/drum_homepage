@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>AdminMenu</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>このメニューではミュージックライブドラムのホームページの情報を編集できます</p>
                    <a href="{{ url('/admin/schedule') }}">Schedule</a><br>
                    <ul>
                        <li>画像確認</li>
                        <li>画像アップロード</li>
                    </ul>
                    <a href="{{ url('/admin/infomation') }}">Infomation</a>
                    <ul>
                        <li>お知らせ登録</li>
                        <li>お知らせ編集</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
