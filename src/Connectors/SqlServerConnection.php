<?php

namespace BrianFaust\Eloquent\Schema\Connectors;

use BrianFaust\Eloquent\Schema\Builder\SqlServerBuilder;
use Illuminate\Database\SqlServerConnection as BaseSqlServerConnection;

class SqlServerConnection extends BaseSqlServerConnection
{
    /**
     * @return SqlServerBuilder
     */
    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) {
            $this->useDefaultSchemaGrammar();
        }

        return new SqlServerBuilder($this);
    }
}
