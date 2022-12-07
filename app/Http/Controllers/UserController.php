<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrudRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{

    // 新規登録
    public function getIndex(Request $request)
    {

        $keyword = $request->input('keyword');
        $query = \App\Models\User::query();
        if(!empty($keyword))
        {
            $query->where('email','like','%'.$keyword.'%');
            $query->orWhere('name','like','%'.$keyword.'%');
        }

        $users = $query->orderBy('id')->paginate(5);
        return view('layouts.index', ['users' => $users, 'keyword' => $keyword]);
    }

    public function new_index()
    {
        return view('user.new_index');
    }

    public function new_confirm(\App\Http\Requests\CrudRequest $req)
    {
        $data = $req->all();
        return view('user.new_confirm')->with($data);
    }

    public function new_finish(Request $request)
    {
        $user = new \App\Models\User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->profile = $request->profile;

        $user->save();

        return redirect()->to('user/list');
    }

    // 編集
    public function edit_index($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('user.edit_index', ['user' => $user]);
    }

    public function edit_confirm(\App\Http\Requests\CrudRequest $req)
    {
        $data = $req->all();
        return view('user.edit_confirm')->with($data);
    }

    public function edit_finish(Request $request, $id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->profile = $request->profile;

        $user->save();

        return redirect()->to('user/list');
    }

    public function detail_index($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('user.detail_index', ['user' => $user]);
    }

    public function delete_index($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return redirect()->to('user/list');
    }
}
