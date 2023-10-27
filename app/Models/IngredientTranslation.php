<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientTranslation extends Model
{
    protected $fillable = ["id_ingredient", "id_language", "nameTranslation"];

    public function ingredient(){
        return $this->belongsTo(Ingredient::class, "id_ingredient");
    }

    public function language(){
        return $this->belongsTo(Language::class,"id_language");
    }
}
