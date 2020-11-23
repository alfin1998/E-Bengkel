<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'nama',
        'nohp',
        
        

          // $table->id();
        // $table->string('username');
        // $table->string('password');
        // $table->string('nama');
        // $table->string('email')->unique();
        // $table->string('nohp');
        // $table->date('tanggal_lahir');
        // $table->date('created_when');
        // $table->date('update_when');
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //'email_verified_at' => 'datetime',
        'tanggal_lahir' => 'date',
        'created_when' => 'date',
        'update_when' => 'date',
    ];
}
