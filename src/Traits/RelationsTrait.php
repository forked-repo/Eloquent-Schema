<?php

namespace BrianFaust\Eloquent\Schema\Traits;

trait RelationsTrait
{
    /**
     * @param $name
     * @param null $indexName
     *
     * @return mixed
     */
    public function hasAndBelongsToMany($name, $indexName = null)
    {
        return $this->morphs($name, $indexName = null);
    }
}
