<?php

namespace ComdexxSolutionsLLC\Preset;

use Illuminate\Foundation\Console\PresetCommand;
use Illuminate\Support\ServiceProvider;

class LaravelPresetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('comdexxsolutions-preset', function ($command) {
            ComdexxSolutionsPreset::install();
            $command->info('Comdexx Solutions preset installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
