<?php

namespace App\Models;

use App\Mail\OrderMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',       
        'phone',         
        'size',
        'pizza',
        'price',
        'adress',
        'pay',
    ];

    public function saveOrder($name, $phone, $size, $pizza, $price, $adress, $pay){
        $this->name= $name;
        $this->phone= $phone;
        $this->size= $size;
        $this->pizza= $pizza;
        $this->price= $price;
        $this->adress= $adress;   
        $this->pay = $pay;            
    }
}
