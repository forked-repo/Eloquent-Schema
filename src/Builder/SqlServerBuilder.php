<?php

/*
 * This file is part of Eloquent Schema.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Schema\Builder;

use BrianFaust\Eloquent\Schema\Traits\BuilderTrait;
use Illuminate\Database\Schema\Builder as BaseBuilder;

class SqlServerBuilder extends BaseBuilder
{
    use BuilderTrait;
}
