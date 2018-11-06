<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class MuemueController extends Controller
{
    public function index(){
        return view('muemue');
    }
    public function muu(){
        $user_data = DB::select('select * from mueman');
        return view('muu',['data' => $user_data]);
    }
}
