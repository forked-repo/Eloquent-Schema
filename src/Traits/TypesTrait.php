<?php

namespace BrianFaust\Eloquent\Schema\Traits;

trait TypesTrait
{
    /**
     * @param $column
     *
     * @return mixed
     */
    public function hashid($column)
    {
        return $this->char($column, 8);
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function uuid($column)
    {
        return $this->char($column, 36);
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function money($column)
    {
        return $this->decimal($column, 13, 4);
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function bcrypt($column)
    {
        return $this->string($column, 60);
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function ipaddr($column)
    {
        return $this->string($column, 45);
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function percentage($column)
    {
        return $this->decimal($column, 5, 2);
    }
}
