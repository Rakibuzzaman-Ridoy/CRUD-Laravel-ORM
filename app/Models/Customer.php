<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "customer_id";

                            //Mutators for Customer
    public function setCustomerNameAttribute($value)
    {
        $this->attributes['customer_name'] = ucwords($value);
    }

    public function setCountryAttribute($value)
    {
        $this->attributes['country'] = ucwords($value);
    }

    public function setStateAttribute($value)
    {
        $this->attributes['state'] = ucwords($value);
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = ucfirst($value);
    }

    public function setaddressAttribute($value)
    {
        $this->attributes['address'] = ucfirst($value);
    }



                //Accessor for Customer's Birth infor field
    public function getDobAttribute($value)
    {
        return date('Y M D', strtotime($value));
    }
}
