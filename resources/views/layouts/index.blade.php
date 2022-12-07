@extends('layouts.mypage')
@section('title', 'ユーザ一覧')
@section('btn-delete')

<script type="text/javascript">
    function check() {
        if (window.confirm('削除してよろしいですか？')) {
            return true
        } else {
            window.alert('キャンセルされました')
            return false

        }
    }
</script>

@endsection
@section('content')
<div class="container mt-5 mb-5">
    <div class="page-header" style="padding-bottom: 30px; margin-left: 0px; margin-right: 15px;">
        <h1><small>ユーザ一覧</small></h1>
    </div>
    <!-- 検索フォーム -->
    <div class="row" style="padding-bottom: 30px; margin-left: 0px; margin-right: 15px;">
        <div class="col-sm-10" style="padding-left:0;">
            <form method="get" action="" class="form-inline">
                <div class="form-group">
                    <input type="text" name="keyword" class="form-control" value="{{$keyword}}" placeholder="名前やメールアドレス">
                </div>
                <div class="form-group">
                    <input type="submit" value="検索" class="btn btn-info" style="margin-left: 15px; color:white;">
                </div>
            </form>
        </div>
        <div class="col-sm-2" style="padding-left: 0;">
            <a href="/user/new" class="btn" style="background-color: #f0ad4e; color: white; width: 120px;"><i class="fas fa-plus"></i> 新規登録</a>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="col-1">No</th>
                <th class="col-2">name</th>
                <th class="col-2">email</th>
                <th class="col-2">TEL</th>
                <th class="col-2">profile</th>
                <th class="col-1">opration</th>
                <th class="col-1"></th>
                <th class="col-1"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->profile}}</td>
                <td><a href="/user/detail/{{$user->id}}"><button type="button" class="btn btn-success">詳細</button></a></td>
                <td><a href="/user/edit/{{$user->id}}"><button type="button" class="w-100 btn btn-primary">編集</button></a></td>
                <td>
                    <form action="/user/delete/{{$user->id}}" method="POST" onsubmit="return check()">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger btn-dell" value="削除">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}
</div>

<!-- page control -->
{!! $users->appends(['keyword'=>$keyword])->render() !!}

@endsection