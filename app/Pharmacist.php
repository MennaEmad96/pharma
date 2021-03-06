<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
    // protected $table = 'pharmacists';

    //M-M (pharmacist&customer)
    public function sales(){
    	return $this->belongsto(Sale::class);
    }

    //M-M (customer&pharmacist&deliveryguy)
    public function deliveries(){
    	return $this->belongsto(Delivery::class);
    }
}
