<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/bootstrap/app.php';

return (new Jubeki\LaravelCodeStyle\Config())
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->notName('*.blade.php')
            ->in(app_path())
            ->in(config_path())
            ->in(database_path('factories'))
            ->in(database_path('migrations'))
            ->in(database_path('seeders'))
    )
    ->setRules([
        // Here you can adjust the rules as much as needed
    ]);
