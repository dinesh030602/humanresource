<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','salutation','last_name','gender','dob','age','address', 'email','phone','department','experience','position',// add other fillable attributes here
    ];
}
