<?php
 
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\DomCrawler\Form;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @param Form $form
     * @return void
     */
    public function boot()
    {
       // $form->open(['route'=>[$route,$params], 'class'=>'form']);

       // '<button type=submit>Delete</button>'; 

       // $form->close();
       // 
       // return $form->

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
