<?php

namespace App\Models;

use App\Models\Material;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        "judul",
        "deskripsi",
        "durasi"
    ];

    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
