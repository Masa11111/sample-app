@extends('layouts.mypage')
@section('title', '新規登録')
@section('content')
<div class="container mt-5 mb-5 p-lg-5 bg-light">
    <div class="page-header" style="padding-bottom: 30px; width: fit-content; margin-left: auto; margin-right: auto;">
        <h1><small>新規登録</small></h1>
    </div>
    <form action="{{url('/user/new')}}" method="post" class="needs-validation" novalidate>
        @method('patch')
        {{csrf_field()}}

        <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">お名前</label>
            <div class="col-sm-10">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control @if($errors->has('name')) is-invalid @endif" id="inputName" placeholder="山田　太郎" required>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Eメール</label>
            <div class="col-sm-10">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control @if($errors->has('email')) is-invalid @endif" id="inputEmail" placeholder="Eメール" required>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPhone" class="col-sm-2 col-form-label">電話番号</label>
            <div class="col-sm-10">
                <input type="tel" name="phone" value="{{ old('tel') }}" class="form-control @if($errors->has('phone')) is-invalid @endif" id="inputPhone" placeholder="080-1111-2222" required>
                @error('tel')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group pb-3">
            <label for="Textarea">メッセージ</label>
            <textarea name="profile" value="{{ old('profile') }}" class="form-control @if($errors->has('profile')) is-invalid @endif" id="Textarea" rows="3" placeholder="プロフィール：何でも書いてください" required></textarea>
            @error('profile')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group row mb-5">
            <label for="inputPassword" class="col-sm-2 col-form-label">パスワード</label>
            <div class="col-sm-10">
                <input type="password" value="{{ old('password') }}" name="password" class="form-control @if($errors->has('password')) is-invalid @endif" id="inputPassword" placeholder="パスワード" required>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <small id="passwordHelpBlock" class="form-text text-muted">パスワードは、文字と数字を含めて8～20文字で、空白、特殊文字、絵文字を含むことはできません。</small>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block">登録</button>
            </div>
        </div>

    </form>
    <a href="/user/list" class="btn btn-dark btn-sm">戻る</a>

</div>
@endsection