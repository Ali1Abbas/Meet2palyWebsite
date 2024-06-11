<?php

namespace App\Providers;

use App\Models\CmsModule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;

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
    //    if(env(key:'APP_ENV')!=='local'){

    //           URL::forceScheme(scheme:'https');
    //       }
        view()->composer('admin/*', function ($view) {
            $getCmsModules = CmsModule::getUserModules();
            $view->with('cmsModules',$getCmsModules);
        });
    
   
    }
}

