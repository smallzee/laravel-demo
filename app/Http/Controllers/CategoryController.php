<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;


class CategoryController extends Controller
{
    public function index($user_id){

        $data = DB::table("vp_users")->first();

        dd($data->email);

    }
}
