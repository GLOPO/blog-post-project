<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
<<<<<<< HEAD
     *
     * @return void
     */
    public function boot()
=======
     */
    public function boot(): void
>>>>>>> b3246b188fcf6efceccbcf2e10fbce7b4a245fc6
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
