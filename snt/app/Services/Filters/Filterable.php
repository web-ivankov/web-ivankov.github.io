<?php

namespace App\Services\Filters;

use Illuminate\Database\Query\Builder;

interface Filterable
{
	public static function apply(Builder $builder, $value);
}