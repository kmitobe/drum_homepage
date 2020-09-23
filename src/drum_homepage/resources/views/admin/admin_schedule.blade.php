@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>AdminSchedule</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- スケジュールアップ用フォーム -->
                    <form method="POST" action="/admin/schedule" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="month" name="month" required>
                        <input type="file" id="file" name="file" required>
                        <button type="submit">アップロード</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
