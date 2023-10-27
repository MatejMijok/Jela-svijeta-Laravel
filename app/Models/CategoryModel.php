<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = "category";
    protected $primaryKey = "id";
    protected $fillable = ["title", "slug","id_language", "id_meal"];
}
