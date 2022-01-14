<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Provinsi;

class HomeController extends Controller {
    function showBeranda(){
        return view('client.dashboard');
    }

    public function testCollection()
    {
        $list_shoes = ['Jintu', 'WANNWOO', 'Vahs', 'L.Bites', 'S.G', 'Gucci', 'Socious'];
        $list_shoes = collect($list_shoes);
        $list_produk = Produk::all();
// Sorting
        // Sort By Harga Terendah
        // dd($list_produk->sortBy('harga'));

        // Sort By Harga Tertinggi
        // // dd($list_produk->sortByDesc('harga'));


        // // Map
        // $map = $list_produk->map(function($item){
        //     echo "$item->nama <br>";
        // });

        // // Filter
        // $filtered = $list_produk->filter(function($item){
        //     return $item->harga < 50000;
        // });

        // dd($filtered);

        // // Sum, Max, Min, Avg
        // $sum = $list_produk->avg('harga');
        // dd($sum);

        $data['list'] = Produk::Paginate(6);
        return view ('test-collection', $data);


        dd($list_shoes, $list_produk);
    }
    function testAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('test-ajax', $data);
    }
    
    function yokAjax(){
        $data['list_provinsi'] = Provinsi::all();
        return view('ecommerce.yok-ajax', $data);
    }

    function single(){
        $data['list_provinsi'] = Provinsi::all();
        return view('ecommerce.single', $data);
    }

}