<?php
namespace App\Services;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class CloudinaryService
{
    public static function uploadFile(UploadedFile $file)
    {
        $randomName = uniqid() . '_' . Str::random(10);

        $uploadedFile = Cloudinary::upload($file->getRealPath(), [
            'folder' => 'uploads',
            'public_id' => $randomName,
            'overwrite' => true,
            'resource_type' => 'image',
        ]);

        return [
            'url' => $uploadedFile->getSecurePath(),
            'public_id' => $uploadedFile->getPublicId(),
        ];
    }

    public static function deleteFile($publicId)
    {
        Cloudinary::destroy($publicId);
    }
}
