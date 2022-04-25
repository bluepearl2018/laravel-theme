<?php

namespace Eutranet\Theme\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
	public static function getClassLead(): string
	{
		return 'Theme';
	}
}