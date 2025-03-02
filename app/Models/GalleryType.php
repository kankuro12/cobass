<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryType extends Model
{ public function galleries()
    {
        return $this->hasMany(Gallery::class, 'gallery_type_id');
    }
}
