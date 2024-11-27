<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Util\Constants;

class UploaderHelper
{

    private $uploadsPath;
    public function __construct(string $uploadsPath)
    {
        $this->uploadsPath = $uploadsPath;
    }
    /**
     * Function to handle sending of registration confirmation mail
     *
     * @param UploadedFile $uploadedFile
     *
     * @return string
     */
    public function uploadProfileImage(UploadedFile $uploadedFile): string
    {
        $userimagefolder=Constants::USER_IMAGE_FOLDER;
        $destination = $this->uploadsPath . $userimagefolder;
        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $newFilename = $originalFilename . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
        $uploadedFile->move($destination, $newFilename);
        $filenamedb = $userimagefolder . $newFilename;
        return $filenamedb;
    }
}
