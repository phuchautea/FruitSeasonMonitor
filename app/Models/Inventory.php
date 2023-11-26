<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
    protected $fillable = ['supplier_id', 'product_id', 'stock_quantity', 'updated_at'];

    public function supplier()
    {
        return $this->belongsTo(User::class, 'supplier_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
