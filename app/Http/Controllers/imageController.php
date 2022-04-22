<?php

namespace App\Http\Controllers;

use App\Models\Images as imagemodel;
use Illuminate\Http\Request;
use Image;

class imageController extends Controller
{




    public function dropzone() {
        return view('dropzone');
    }



    public function document_upload(Request $request)
    {


        // return 'dsa';die;


        $image = $request->file('image_one');

        // $imagetwo = $request->file('image_two');


        foreach ($image as $multi_img)
        {
            $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
            Image::make($multi_img)->resize(300,300)->Save('upload/brand/'.$name_gen);
            $save_url = 'upload/brand/'.$name_gen;

            imagemodel::insert([
                'image'=>$save_url,
            ]);
        }



    }








}


