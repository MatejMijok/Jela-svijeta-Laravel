<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ["title", "slug", "id_meal", "id_language"];

    public function meal(){
        return $this->belongsTo(Meal::class, "id_meal");
    }

    public function language(){
        return $this->belongsTo(Language::class,"id_language");
    }
}
