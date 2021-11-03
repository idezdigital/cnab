<?php

namespace Idez\Cnab\Providers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CnabServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('cnab')
            ->hasConfigFile()
            ->hasMigrations(['create_cnab_files_table']);
    }

    public function registeringPackage()
    {
        $this->app->bind(Cnab::class);
    }
}
