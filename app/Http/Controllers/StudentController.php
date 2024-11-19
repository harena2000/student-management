<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentController extends Controller
{

    public function __invoke() {}

    public function index()
    {
        $student = StudentResource::collection(Student::paginate(10));
        return Inertia::render('Student/Dashboard', [
            'students' => $student,
        ]);
    }
}
