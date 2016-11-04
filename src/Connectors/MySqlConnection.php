<?php

namespace BrianFaust\Eloquent\Schema\Connectors;

use BrianFaust\Eloquent\Schema\Builder\MySqlBuilder;
use Illuminate\Database\MySqlConnection as BaseMySqlConnection;

class MySqlConnection extends BaseMySqlConnection
{
    /**
     * @return MySqlBuilder
     */
    public function getSchemaBuilder()
    {
        if (is_null($this->schemaGrammar)) {
            $this->useDefaultSchemaGrammar();
        }

        return new MySqlBuilder($this);
    }
}
