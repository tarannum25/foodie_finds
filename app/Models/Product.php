<?php
namespace App\Models;
use Fantom\Database\Model;


class Product extends Model
{
  public $primary = "id";
  public $stable = "products";
   
   public static function make(array $data)
   { 

    $product = new self();

    $product->product_name  = $data['product_name'];
    $product->description   = $data['description'];
    $product->price_mp      = $data['price_mp'];
    $product->price_sp      = $data['price_sp'];
    $product->image_url     = $data['image_url'];
    $product->category_id   = $data['category_id'];

    return $product;
  }

  public static function byProductId(int $product_id)
  {
    // $products= $product::where("category_id", $category_id)->get();
    // return ( ['category_id' => $category_id]);
  }

  // public function save()
  // {
  //   return $this->insert([
  //     'product_name' => $this->product_name,
  //     'description'  => $this->description,
  //     'price_mp'     => $this->price_mp,
  //     'price_sp'     => $this->price_sp,
  //     'image_url'    => $this->image_url,
  //     'category_id'  => $this->category_id,
  //   ]);
  // }


}