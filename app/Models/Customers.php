<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    // Updated fillable fields
    protected $fillable = ['first_name', 'last_name', 'email', 'password'];

    protected $table = 'customers';
    public $timestamps = false;

    // Override the method to return the new 'password' field
    public function getAuthPassword()
    {
        return $this->password;
    }

    // You may need to adjust these methods based on your database schema
    public function getAuthIdentifierName()
    {
        return 'id'; // or whatever your primary key is
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
