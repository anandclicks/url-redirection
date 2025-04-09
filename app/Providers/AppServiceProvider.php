<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\handleUrls;
use Illuminate\Support\Facades\Route;
use App\Models\Url;

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
        Route::get('/test/{url}',  [handleUrls::class, 'handleUrl']);
        
        $urls = Url::all();
        foreach ($urls as $url) {
           Route::get($url->url, [handleUrls::class, 'handleUrl'])->name($url->name);
        }
    }
}
