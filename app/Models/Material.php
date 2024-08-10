<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        "judul",
        "deskripsi",
        "link_embed",
        "course_id"
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
