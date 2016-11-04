<?php

namespace BrianFaust\Eloquent\Schema\Connectors;

use BrianFaust\Eloquent\Schema\Builder\PostgresBuilder;
use Illuminate\Database\PostgresConnection as BasePostgresConnection;

class PostgresConnection extends BasePostgresConnection
{
    /**
     * @return PostgresBuilder
     */
    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) {
            $this->useDefaultSchemaGrammar();
        }

        return new PostgresBuilder($this);
    }
}
