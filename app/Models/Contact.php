<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'email'];

    public function notes() {
        return $this->hasMany(Note::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'category_contact');
    }

    public function setEmailAttribute($value) {
        $this->attributes['email'] = strtolower($value);
    }
}
