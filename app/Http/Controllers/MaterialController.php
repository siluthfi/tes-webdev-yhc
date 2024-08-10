<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("materials.create", [
            "courses" => Course::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "judul" => "required",
            "deskripsi" => "required",
            "link_embed" => "required",
            "course_id" => "required"
        ]);

        Material::create($data);

        return redirect()->route("course.show", $data['course_id'])->with("success", "Materi berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        return view("materials.edit", [
            "material" => $material,
            "courses" => Course::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        $data = $request->validate([
            "judul" => "required",
            "deskripsi" => "required",
            "link_embed" => "required",
            "course_id" => "required"
        ]);

        $material->update($data);

        return redirect()->route("course.show", $data['course_id'])->with("success", "Materi berhasil diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        $material->delete();

        return redirect()->back()->with("success", "Materi berhasil dihapus!");
    }
}
