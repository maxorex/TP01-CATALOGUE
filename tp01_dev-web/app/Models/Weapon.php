<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Weapon extends Model
{
   public function getImageUrlAttribute(): string
   {
       if (!$this->imagePath) {
           return asset('images/image-not-available.png');
       }

       if (str_contains($this->imagePath, '/')) {
           return Storage::url($this->imagePath);
       }

       return asset('images/' . $this->imagePath);
   }

   public function category()
   {
       return $this->belongsTo(Category::class);
   } 
}