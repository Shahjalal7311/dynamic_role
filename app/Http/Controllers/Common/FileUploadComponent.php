<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;

class FileUploadComponent extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | File Uploads Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling file Uploads and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */


    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public static function upload($check_has, $image, $path, $file_name){
        if ($check_has) {
            $name = $file_name;
            $destinationPath = $path; //public_path('/uploads/posts');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $posts->image_name['name'] = $name;
        }
        return $posts->image_name['name'];
    }

}