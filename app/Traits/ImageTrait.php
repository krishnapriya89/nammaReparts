<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait ImageTrait
{
    /**
     * upload image
     *
     * @author Krishna priya
     */
    // public function uploadImage($file, $directory)
    // {
    //     $imageName  = Str::uuid() . '.' . $file->getClientOriginalExtension();
    //     $filePath   = 'uploads/' . $directory . '/' . $imageName;

    //     $file->storeAs('public/uploads/' . $directory, $imageName);

    //     return $filePath;
    // }
    public function uploadImage($file, $directory)
    {
        $imageName = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $filePath = $directory . '/' . $imageName;

        // Store the image
        $file->storeAs('public/' . $directory, $imageName);

        return $filePath; // Return just the path for storage in DB
    }



    /**
     * Delete the image file associated with the model.
     *
     * @return void
     */
    public function deleteImage($fieldName)
    {
        if ($this->$fieldName){
            if (Storage::disk('public')->exists($this->$fieldName)) {
                Storage::disk('public')->delete($this->$fieldName);
                return true;
            } else {
                return false;
            }
    } else {
            return false;
        }
    }
}
