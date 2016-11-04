<?php

namespace BrianFaust\Eloquent\Schema\Builder;

use BrianFaust\Eloquent\Schema\Traits\RelationsTrait;
use BrianFaust\Eloquent\Schema\Traits\TypesTrait;
use Illuminate\Database\Schema\Blueprint as BaseBlueprint;

class Blueprint extends BaseBlueprint
{
    use RelationsTrait;
    use TypesTrait;
}
