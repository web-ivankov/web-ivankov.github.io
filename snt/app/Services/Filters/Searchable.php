<?php

namespace App\Services\Filters;

interface Searchable
{
	public function apply(Request $request);
}