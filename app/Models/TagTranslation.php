<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagTranslation extends Model
{
    protected $fillable = ["id_tag", "id_language", "tagTranslation"];

    public function tag(){
        return $this->belongsTo(Tag::class, "id_tag");
    }

    public function language(){
        return $this->belongsTo(Language::class,"id_language");
    }
}
