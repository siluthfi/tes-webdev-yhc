<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("courses.index", [
            "courses" => Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("courses.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "judul" => "required",
            "deskripsi" => "required",
            "durasi" => "required"
        ]);

        Course::create($data);

        return redirect()->route("course.index")->with("success", "Kursus berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view("courses.show", [
            "course" => $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view("courses.edit", [
            "course" => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            "judul" => "required",
            "deskripsi" => "required",
            "durasi" => "required"
        ]);

        $course->update($data);

        return redirect()->route("course.index")->with("success", "Kursus berhasil diperbarui!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route("course.index")->with("success", "Kursus berhasil dihapus!");
    }
}
