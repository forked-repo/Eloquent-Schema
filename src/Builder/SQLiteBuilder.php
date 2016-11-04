<?php

namespace BrianFaust\Eloquent\Schema\Builder;

use Illuminate\Database\Schema\Builder as BaseBuilder;
use BrianFaust\Eloquent\Schema\Traits\BuilderTrait;

class SQLiteBuilder extends BaseBuilder
{
    use BuilderTrait;
}
