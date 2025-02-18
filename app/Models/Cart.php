<?php
namespace App\Models;

use Fantom\Database\Model;

class Cart extends Model
{
    public $primary = "id";
    public $table = "carts";

    public function getCartItems($user_id)
    {
        return $this->where("user_id", $user_id)->get();
    }

    
    public function find_item($user_id, $product_id)
    {
        return $this->where("user_id", $user_id)
                    ->andWhere("product_id", $product_id)
                    ->first();
    }

    // public function add_item(array $data)
    // {
    //     return $this->create($data);
    // }

    
    // public function update_item($id, $data)
    // {
    //     return $this->update($id, $data);
    // }

    public function delete_item()
    {
        return $this->delete();
    }
}
