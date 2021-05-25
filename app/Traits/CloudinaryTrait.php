<?php

namespace App\Traits;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Request;

trait CloudinaryTrait
{
    public function UploadImage(String $request) {
        return Cloudinary::upload($request)->getSecurePath();
    }
}
