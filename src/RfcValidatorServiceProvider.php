<?php

namespace RafaHernandez\RfcValidator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RafaHernandez\RfcValidator\Commands\RfcValidatorCommand;

class RfcValidatorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('rfc-validator')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_rfc-validator_table')
            ->hasCommand(RfcValidatorCommand::class);
    }
}
