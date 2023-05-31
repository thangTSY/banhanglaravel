<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Menu2 extends Model
{
    use HasFactory, SoftDeletes, Notifiable;
    protected $guarded = [];
    protected $datas = ['deleted_at'];

    public function Category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');

    }
    public function Menus()
    {
        return $this->hasOne(Menus::class, 'id', 'Menu_id');
        
    }
}
