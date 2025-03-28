<?php

namespace App\Models;

use Fantom\Database\Model;

/**
 * Category
 */
class Category extends Model
{
	protected $table = "categories";
	protected $primary = "id";
}