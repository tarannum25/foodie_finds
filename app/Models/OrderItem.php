<?php

namespace App\Models;

use Fantom\Database\Model;

/**
 * OrderItem
 */
class OrderItem extends Model
{
	protected $primary = "id";
	protected $table = "order_items";


	// public function order()
	// {
	//     return $this->belongsTo(Order::class, 'order_id', 'id');
	// }

	public static function byuserId(int $user_id)
	{
		$sql = "
			SELECT * FROM order_items
			WHERE user_id = :user_id   
			ORDER BY id DESC
		";

		return static::raw($sql, ['user_id' => $user_id]);
	}
}


