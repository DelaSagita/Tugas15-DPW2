<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Models\UserDetail;

class UserController extends Controller
{

    public function index()
    {
        $data['list_user'] = User::withCount('produk')->get();
        return view('user.index', $data);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(UserStoreRequest $request)
    {


        $user = new User();
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = request('password');
        $user->jenis_kelamin = 2;
        if(request('level') == 'admin'){
            $user->level = 1; 
        } else{
            $user->level = 0; 
        }
        $user->save();
        $userDetail= new UserDetail;
        $userDetail->id_user = $user->id;
        $userDetail->no_handphone = request('no_handphone');
        $userDetail->save();

        return redirect('admin/user')->with('success', 'user berhasil di tambahkan');
    }

    public function show(User $user)
    {
        $loggedUser = request()->user();
        if($loggedUser->id != $user->id){
          return abort(404);
        }
        
        $data['user'] = $user;
        return view('user.show', $data);
    }

    public function edit(User $user)
    {
        $data['user'] = $user;
        return view('user.edit', $data);
    }


    public function update(User $user)
    {
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        if(request('password'))$user->password = request('password');
        $user->save();

        return redirect('admin/user')->with('success', 'user berhasil di edit');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect('admin/user')->with('danger', 'user berhasil di hapus');
    }
}
