<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Theloai;
use App\Models\TheoDoi;
use App\Models\Truyen;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::select('call truyentranh_count(?)', [Auth::user()->id]);
        $sql = "select * from v_bxh_nhanvien";
        $bxh_nhanvien = DB::select($sql);
        $tong_truyen = Truyen::count();
        $tong_nguoi_dung = User::count();
        $tong_luot_theo_doi = TheoDoi::count();
        $tong_the_loai = Theloai::count();
        return view('home')->with(compact('data', 'tong_truyen', 'tong_nguoi_dung', 'bxh_nhanvien', 'tong_luot_theo_doi', 'tong_the_loai'));
    }
}