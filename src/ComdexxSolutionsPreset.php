<?php

namespace ComdexxSolutionsLLC\Preset;

use Illuminate\Foundation\Console\Presets\Preset;

class ComdexxSolutionsPreset extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
//        static::updateSass();
//        static::updateBootstrapping();
        static::removeNodeModules();
    }
}
