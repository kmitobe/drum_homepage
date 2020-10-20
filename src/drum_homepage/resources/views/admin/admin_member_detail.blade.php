@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 id="btn">AdminMemberDetail</h2>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="list-group">
                        
                        <!-- 新規作成のフォーム -->
                        <form method="POST" action="/admin/member/detail/{{ @$member->id }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ @$member->id }}">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name_kanji">名前(漢字)</label>
                                    <input type="text" class="form-control" id="name_kanji" name="name_kanji" placeholder="全角かな" value="{{ @$member->name_kanji }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name_kana">フリガナ</label>
                                    <input type="text" class="form-control" id="name_kana" name="name_kana" placeholder="全角カタカナ" value="{{ @$member->name_kana }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name_english">名前ローマ字</label>
                                    <input type="text" class="form-control" id="name_english" name="name_english" placeholder="半角英数" value="{{ @$member->name_english }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="message">メッセージ</label>
                                    <textarea class="form-control" id="message" name="message" placeholder="Required example textarea">{{ @$member->message }}</textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="genre">音楽ジャンル</label>
                                    <input type="text" class="form-control" id="genre" name="genre"　placeholder="ジャズ・ボサノバ" value="{{ @$member->genre }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="musical_instrument">楽器</label>
                                    <input type="text" class="form-control" id="musical_instrument" name="musical_instrument"　placeholder="ジャズ・ボサノバ" value="{{ @$member->musical_instrument }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="profile_url">プロフィールURL</label>
                                    <input type="text" class="form-control" id="profile_url" name="profile_url"　placeholder="URL" value="{{ @$member->profile_url }}">
                                </div>
                                <!-- ステータスNo -->
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_no" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">経営</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_no" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">ミュージシャン</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_no" id="inlineRadio3" value="3">
                                    <label class="form-check-label" for="inlineRadio3">その他</label>
                                </div>
                                <!-- 画像のアップロード -->
                                <!-- <div id="file-preview">
                                　　<div class="form-group">
                                　　　　<label class="form-label" for="profile_url">プロフィール画像</label>
                                　　　　<input class="form-input" type="file" name="profile_url" accept="image/*" v-on:change="onFileChange">
                                　　</div>
                                　　<img class="userInfo__icon" v-bind:src="imageData" v-if="imageData">
                                </div> -->
<!-- vue -->
                                <div id="filepreview">
                                    <filepreview></filepreview>
                                </div>
<!-- vue -->
                            </div>
                            <button type="submit">送信</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
