<?php

namespace App\Traits;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Request;

trait CloudinaryTrait
{
    public function UploadImage(Request $request, String $name) {
        return Cloudinary::upload($request->file($name)->getRealPath())->getSecurePath();
    }
}
