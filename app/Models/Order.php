<?php 
namespace App\Models;
use App\Models\User;
use Fantom\Database\Model;

class Order extends Model
{
	public $primary ="id";
	public $stable ="order";

	protected $store = [
	        "user_id", "products", "total_price", "status", "created_at"
	    ];


	public function find_order($order_id)
    {
	       return $this->where('id', $order_id)->first();
	}

    public function user()
    {
    	$user = User::find($this->user_id)->first();

		return $user;
    }

	public function create_order()
	{
		return $this->create();
	}

	public function update_order($order_id)
	{
		return $this->update('id', ["status" => "delivered"]);

	}

	public function delete_order($order_id)
	   {
	       return $this->where('id', $order_id)->delete();
	   }


	   public function items()
	       {
	           return $this->hasMany(OrderItem::class, 'order_id', 'id');
	       }

}
