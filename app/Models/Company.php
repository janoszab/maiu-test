<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['companyName', 'companyRegistrationNumber', 'companyFoundationDate', 'country', 'zipCode', 'city', 'streetAddress', 'latitude', 'longitude', 'companyOwner', 'employees', 'activity', 'active', 'email', 'password'];

    public $timestamps = false;
}
