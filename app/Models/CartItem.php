<?php

namespace App\Models;

use Fantom\Database\Model;

class CartItem extends Model
{
	protected $primary = "id";
	protected $table = "cart_items";

	public static function byuserId(int $user_id)
	{
		$sql = "
			SELECT * FROM cart_items
			WHERE user_id = :user_id   
			ORDER BY id DESC
		";

		return static::raw($sql, ['user_id' => $user_id]);
	}
}




