<?php
namespace App\Services ;

use Illuminate\Http\UploadedFile;

class ImageService  {
    public function upload(?UploadedFile $image ,string $folder = 'profile') {
        // *default image 
        if(!$image) {
            return 'profile/profile.png' ; 
        }
        //& validation image 
        validator(
            ['image' => $image] ,
            ["image" => 'image|mimes:png,jpg',])->validate();
        return $image->store($folder,'public');
    }
}