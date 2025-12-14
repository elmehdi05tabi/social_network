<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Profile;
use App\Models\Publication;
use App\Policies\ProfilePolicy;
use App\Policies\PublicationPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Publication::class =>PublicationPolicy::class ,
        Profile::class=>ProfilePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
