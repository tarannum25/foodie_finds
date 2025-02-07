<?php 
namespace App\Models;
use Fantom\database\Model;

class Order extends Models
{
	public $primary ="id";
	public $stable ="order";

	public function find()
	{
		return $this->find()
	}

	public function create_order()
	{
		return $this->create();
	}

	public function update_order()
	{
		return $this->update()
	}

	public function find_order()
	{
		return $this->where($user_id)->get();
	}


}
