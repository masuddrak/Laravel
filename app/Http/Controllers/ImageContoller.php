<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ImageContoller extends Controller
{
    //

    function uploadImage(Request $request)
    {
        if ($request->file("image")) {
            $path = $request->file("image")->store("images", "public");
            $image = explode("/", $path)[1];
            $images = new Image();
            $images->image = $image;
            $result = $images->save();
            if ($result || $path) {
                return redirect("images");
            } else {
                return "Image not upload";
            }
        } else {
            return "Image not found";
        }
    }
    function getImages(Request $request)
    {

        $images = Image::all();
        if ($images) {
            return view("images", ["images" => $images]);
        } else {
            return "Image not upload";
        }
    }
}
