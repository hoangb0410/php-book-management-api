<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

if (!function_exists('uploadImage')) {
    function uploadFile($file)
    {
        $publicPath = 'uploads';
        $absolutePath = public_path($publicPath);
        File::makeDirectory($absolutePath, 0755, true, true);
        $file->move($absolutePath, $file->getClientOriginalName());

        return $publicPath . '/' . $file->getClientOriginalName();
    }
}
