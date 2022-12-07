@extends('layouts.mypage')
@section('title', '詳細')
@section('content')

<div class="container mt-5">
    <div class="page-header" style="padding-bottom: 30px; width: fit-content; margin-left: auto; margin-right: auto;">
        <h1><small>詳細</small></h1>
    </div>
    <form action="/user/edit/{{ $user->id }}" method="post" class="w-50" style="margin-left: auto; margin-right: auto;">

        <!--お名前-->
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">お名前</label>
            <div class="col-sm-6">{{$user->name}}</div>
        </div>
        <!--/お名前-->

        <!--メールアドレス-->
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">メールアドレス</label>
            <div class="col-sm-6">{{$user->email}}</div>
        </div>
        <!--/メールアドレス-->

        <!--電話番号-->
        <div class="form-group row">
            <label class="col-sm-6 w-50 col-form-label">電話番号</label>
            <div class="col-sm-6">{{$user->phone}}</div>
        </div>
        <!--/電話番号-->

        <!--メッセージ-->
        <div class="form-group row">
            <label class="col-sm-6 col-form-label">プロフィール</label>
            <div class="col-sm-6">{!! nl2br(e( $user->profile )) !!}</div>
        </div>
        <!--/電話番号-->

        <div class="form-group row">
            <label class="col-sm-6 col-form-label">パスワード</label>
            <div class="col-sm-6">{{$user->password}}</div>
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
    <a href="/user/list" class="btn btn-dark btn-sm">戻る</a>

</div>

@endsection