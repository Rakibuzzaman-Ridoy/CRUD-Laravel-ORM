<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "customer_id";

                //Mutator for Customer Name
    public function setCustomerNameAttribute($value)
    {
        $this->attributes['customer_name'] = ucwords($value);
    }



                //Mutator for customer's Country 
    public function setCountryAttribute($value)
    {
        $this->attributes['country'] = ucwords($value);
    }


                //Mutator for customer's State 
    public function setStateAttribute($value)
    {
        $this->attributes['state'] = ucwords($value);
    }

                  //Accessor for customer's DOB 
    public function getDobAttribute($value)
    {
        return date("d M y",strtotime($value));
    }


                  //Accessor for customer's Address 
    public function getAddressAttribute($value)
    {
        return ucfirst($value);
    }
    
}
