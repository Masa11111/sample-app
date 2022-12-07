@extends('layouts.mypage')
@section('title', '編集内容確認')
@section('content')
<div class="container mt-5">
    <div class="page-header" style="padding-bottom: 30px; width: fit-content; margin-left: auto; margin-right: auto;">
        <h1><small>確認画面</small></h1>
    </div>
    <form action="" method="post" class="w-50" style="margin-left: auto; margin-right: auto;">
        {{ csrf_field() }}
        <input type="hidden" name="name" value="{{$name}}">
        <input type="hidden" name="email" value="{{$email}}">
        <input type="hidden" name="phone" value="{{$phone}}">
        <input type="hidden" name="password" value="{{$password}}">
        <input type="hidden" name="profile" value="{{$profile}}">

        <!--お名前-->
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">お名前</label>
            <div class="col-sm-6">{{$name}}</div>
        </div>
        <!--/お名前-->

        <!--メールアドレス-->
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">メールアドレス</label>
            <div class="col-sm-6">{{$email}}</div>
        </div>
        <!--/メールアドレス-->

        <!--電話番号-->
        <div class="form-group row">
            <label class="col-sm-6 w-50 col-form-label">電話番号</label>
            <div class="col-sm-6">{{$phone}}</div>
        </div>
        <!--/電話番号-->

        <!--メッセージ-->
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">プロフィール</label>
            <div class="col-sm-6">{!! nl2br(e( $profile )) !!}</div>
        </div>
        <!--/電話番号-->

        <div class="form-group row">
            <label class="col-sm-6 col-form-label">パスワード</label>
            <div class="col-sm-6">{{$password}}</div>
        </div>

        <!--ボタンブロック-->
        <div class="form-group row mt-5">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block">編集</button>
            </div>
        </div>
        <!--/ボタンブロック-->

    </form>
    <!--/フォーム-->
</div>

@endsection