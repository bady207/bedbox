<?php

namespace App\Providers;

use App\Models\beritas;
use App\Models\boxers;
use App\Models\pelatihs;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Ambil data atlet dan pelatih dari database
        $atlet = boxers::find(1);
        $pelatih = pelatihs::find(1);
        $guru = pelatihs::find(2);
        $ingfo = beritas::find(1);

        // dd($pelatih->image);

        // Bagikan data atlet dan pelatih ke semua view
        view()->share('atlet', $atlet);
        view()->share('pelatih', $pelatih);
        view()->share('guru', $guru);
        view()->share('ingfo', $ingfo);
    }
}
