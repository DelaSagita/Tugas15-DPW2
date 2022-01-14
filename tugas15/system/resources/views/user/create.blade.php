@extends('section.base')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data User
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/user') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                @include('utils.errors', ['item' => 'nama'])
                                <input type="text" name="nama" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Username</label>
                                @include('utils.errors', ['item' => 'username'])
                                <input type="text" name="username" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Email</label>
                                @include('utils.errors', ['item' => 'email'])
                                <input type="email" name="email" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Password</label>
                                @include('utils.errors', ['item' => 'password'])
                                <input type="password" name="password" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">No HP</label>
                                @include('utils.errors', ['item' => 'no_handphone'])
                                <input type="text" name="no_handphone" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Level (tulis di field "admin" jika anda adalah admin,
                                    jika bukan tulis kata acak)</label>
                                @include('utils.errors', ['item' => 'level'])
                                <input type="text" name="level" id="" class="form-control">
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
