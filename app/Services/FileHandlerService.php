<?php

namespace App\Services;

trait FileHandlerService
{
    public function handleFile($file, $path, $existingFile)
    {
        if ($file) {
            $this->removeFile($existingFile);

            return $this->getFile($file, $path);
        }

        return $existingFile;
    }

    private function getFile($file, $path): string
    {
        $fileExtension = uniqid().'.'.$file->getClientOriginalExtension();
        $uploadPath = $path;
        $file->move(public_path($uploadPath), $fileExtension);

        return $uploadPath.$fileExtension;
    }

    public function removeFile($existingFile): void
    {
        if ($existingFile && file_exists(public_path($existingFile))) {
            unlink(public_path($existingFile));
        }
    }
}
