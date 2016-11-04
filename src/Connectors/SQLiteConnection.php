<?php

namespace BrianFaust\Eloquent\Schema\Connectors;

use BrianFaust\Eloquent\Schema\Builder\SQLiteBuilder;
use Illuminate\Database\SQLiteConnection as BaseSQLiteConnection;

class SQLiteConnection extends BaseSQLiteConnection
{
    /**
     * @return SQLiteBuilder
     */
    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) {
            $this->useDefaultSchemaGrammar();
        }

        return new SQLiteBuilder($this);
    }
}
