<?php

namespace QuantaQuirk\Queue\Console;

use QuantaQuirk\Console\MigrationGeneratorCommand;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'queue:table')]
class TableCommand extends MigrationGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'queue:table';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a migration for the queue jobs database table';

    /**
     * Get the migration table name.
     *
     * @return string
     */
    protected function migrationTableName()
    {
        return $this->quantaquirk['config']['queue.connections.database.table'];
    }

    /**
     * Get the path to the migration stub file.
     *
     * @return string
     */
    protected function migrationStubFile()
    {
        return __DIR__.'/stubs/jobs.stub';
    }
}
