<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMuc extends Model
{
    use HasFactory;


    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'trang_thai',
        'danh_muc',
    ];
    protected $casts = [
        'trang_thai' => 'boolean'
    ];
}
