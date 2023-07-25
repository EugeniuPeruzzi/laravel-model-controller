<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// utilizzo il model del data base con il nome Comics
use App\Models\Comics;


class PageController extends Controller
{
    public function index(){
        $comics = Comics::all();
        // import footer db...
        $lists = config('db.lists');
        $objs = config('db.objs');
        $mini_lists = config('db.mini-list');
        $dc_s = config('db.dc');
        $sites = config('db.sites');
        $imgs = config('db.imgs');

        return view('home', compact('comics','lists', 'objs', 'mini_lists', 'dc_s', 'sites', 'imgs'));
    }

    public function more($id){
        $comics = Comics::all();
        $comic_id = $comics[$id];
        // import footer db...
        $lists = config('db.lists');
        $objs = config('db.objs');
        $mini_lists = config('db.mini-list');
        $dc_s = config('db.dc');
        $sites = config('db.sites');
        $imgs = config('db.imgs');

        return view('comic', compact( 'comic_id','lists', 'objs', 'mini_lists', 'dc_s', 'sites', 'imgs'));
    }
}
