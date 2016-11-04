<?php

namespace BrianFaust\Eloquent\Schema\Migrations;

use BrianFaust\Eloquent\Schema\Builder\Blueprint;

abstract class Migration
{
    /**
     * @var
     */
    protected $connection;

    /**
     * @var
     */
    protected $schema;

    /**
     * Migration constructor.
     */
    public function __construct()
    {
        $this->schema = \DB::getSchemaBuilder();

        $this->schema->blueprintResolver(function ($table, $callback) {
            return new Blueprint($table, $callback);
        });
    }

    /**
     * @return mixed
     */
    public function getConnection()
    {
        return $this->connection;
    }
}
