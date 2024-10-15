<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Theloai;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        $theloai = Theloai::all()->where('kichhoat', 0)->sortBy('tentheloai');
        View::share('theloai', $theloai);
        

        $sql = "select * from v_bangxephang10";
        $bxh_10 = DB::select($sql);
        View::share('bxh_10', $bxh_10);

        // view()->composer('*', function ($view) {
        //     $lsdt = session()->get('lich_su_doc_truyen');
        //     $view->with(compact('lsdt'));
        // });
    }
}
