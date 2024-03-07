<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\softDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, softDeletes;

    protected $primaryKey = 'u_id';

    public $timestamps = true;
    
    protected $fillable = [
        'u_email',
        'u_password',
        'u_name',
        'u_birthdate',
        'u_tel',
        'u_postcode',
        'u_basic_address',
        'u_detail_address',
        'remember_token', 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // 외래키 연결목적 설정
    public function User_library_comment() {
        return $this->hasManyThrough(User_library_comment::class, User_library::class, 'u_id', 'ul_id');
    }

    public function User_library() {
        return $this->hasMany(User_library::class, 'u_id');
    }
    
    public function user_wishlist() {
        return $this->hasMany(User_wishlist::class, 'u_id');
    }
    
    public function book_detail_comment() {
        return $this->hasMany(Book_detail_comment::class, 'u_id');
    }
    public function book_detail_reply() {
        return $this->hasMany(Book_detail_reply::class, 'u_id');
    }
    public function book_detail_comment_state() {
        return $this->hasMany(Book_detail_comment_state::class, 'u_id');
    }
    public function book_detail_reply_state() {
        return $this->hasMany(Book_detail_reply_state::class, 'u_id');
    }
}