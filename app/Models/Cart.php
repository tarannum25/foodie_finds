<?php
namespace App\Models;

use Fantom\Database\Model;

class Cart extends Model
{
	public $primary = "id";
	public $stable = "cart";

	public function find()
	{
        return $this->find($id);
    }

    public function addItem(array $data)
    {
        return $this->create();
    }

     public function updateItem($id)
    {
        return $this->update($id);
    }

    public function deleteItem($id)
        {
            return $this->delete($id);
        }           

}        