<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.doctrine_migrations.diff_command' shared service.

include_once $this->targetDirs[2].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[2].'/vendor/doctrine/migrations/lib/Doctrine/DBAL/Migrations/Tools/Console/Command/AbstractCommand.php';
include_once $this->targetDirs[2].'/vendor/doctrine/migrations/lib/Doctrine/DBAL/Migrations/Tools/Console/Command/GenerateCommand.php';
include_once $this->targetDirs[2].'/vendor/doctrine/migrations/lib/Doctrine/DBAL/Migrations/Tools/Console/Command/DiffCommand.php';
include_once $this->targetDirs[2].'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDiffDoctrineCommand.php';

return $this->services['console.command.public_alias.doctrine_migrations.diff_command'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();
