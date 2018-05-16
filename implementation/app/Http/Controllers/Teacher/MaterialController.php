<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Material;

class MaterialController extends Controller
{
    public function store(Request $request, $lesson_id)
    {
       $material = Material::create([
           'lesson_id' => $lesson_id,
           'title' => $request->input('title'),
           'url' => $request->input('url')
       ]);

       return $material;
    }

    public function delete($material_id)
    {
        Material::findOrFail($material_id)->delete();

        return back();
    }
}
