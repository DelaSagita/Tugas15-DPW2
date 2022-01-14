<?php

namespace App\Models;
use App\Models\Produk;
use App\Models\UserDetail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Penjual extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'penjual';

    function detail(){
        return $this->hasOne(UserDetail::class, 'id_user');
    }
    function produk(){
        return $this->hasMany(Produk::class, 'id_user');
    }
    function getJenisKelaminStringAttribute(){
        return ($this->jenis_kelamin == 1) ? "Laki-Laki" : "Perempuan";
    }
    function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
    function setUsernameAttribute($value){
        $this->attributes['username'] = strtolower($value);
    }
}