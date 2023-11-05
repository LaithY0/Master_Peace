<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subscription;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['fname' , 'lname' , 'email' , 'password' ,
     'phone' , 'subscription_s' , 'subscription_e' , 'photo'];

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }
}
