<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'student';

    public $timestamps = false;

    public $primaryKey = 'id_student';


    public function getGenderNameAttribute()
    {
        if ($this->gender == 1) {
            return "Nữ";
        } else {
            return "Nam";
        }
    }

    public function getStatusNameAttribute()
    {
        if ($this->trang_thai == 1) {
            return "Đã đăng kí";
        } else {
            return "Chưa đăng kí";
        }
    }


}

