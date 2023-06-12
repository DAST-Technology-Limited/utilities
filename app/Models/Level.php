<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * getDiscountPrice - This function is used to calculate the discount of a user 
     * base on his affiliate level,
     * @price: origin price of the product
     * @affiliate_level_id: affiliate_level_id
     * @utility_type_id: id of the utility type
     * Returns: Discounted price
     */

     public function getDiscountPrice($price, $affiliate_level_id, $utility_type_id)
     {
        $discount = Discount::where("affiliate_level_id", $affiliate_level_id)->where("utility_type_id", $utility_type_id)->first();
        if($discount)
        {
            if ($utility_type_id == "2")
            {
                return ($price - (($discount->discount / 100) * $price));
            }
            
            return ((($discount->discount / 100) * $price) + $price);
        }
        return $price;
     }
}
