<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    protected $fillable = ['username','email', 'password'];
    protected $table = "logins";

    public function getAuthPassword() {
        return $this->UserEmail ;   }
}
