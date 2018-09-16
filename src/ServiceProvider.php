<?php

namespace SantosAlan\LumenCrud;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Container\Container;
use SantosAlan\LaravelCrud\Console\Commands\LumenCrudMakeCommand;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider 
{

    public function boot(Factory $view, Dispatcher $events, Repository $config) 
    {     
        $this->loadTranslations();

        $this->registerCommands();
    }

    private function loadTranslations()
    {
        $translationsPath = $this->packagePath('resources/lang');

        $this->loadTranslationsFrom($translationsPath, 'lumen-crud');

        $this->publishes([
            $translationsPath => resource_path('lang/vendor/lumen-crud'),
        ], 'translations');
    }

    private function packagePath($path)
    {
        return __DIR__."/../$path";
    }

    private function registerCommands()
    {
        $this->commands(LumenCrudMakeCommand::class);
    }

}
