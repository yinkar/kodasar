<?php

namespace App\Providers;

use App\Models\Dictionary;
use App\Models\User;
use App\Policies\DictionaryPolicy;
use App\Policies\EntryPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-dictionary', [ DictionaryPolicy::class, 'create' ]);
        Gate::define('create-entry', [ EntryPolicy::class, 'create' ]);
    }
}
