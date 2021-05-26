<?php

namespace App\Traits;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
trait CloudinaryTrait
{
    public function UploadImage(String $request) {
        return Cloudinary::upload($request)->getSecurePath();
    }
}
