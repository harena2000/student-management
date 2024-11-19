<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ClassesResource;
use App\Models\Classes;
use Inertia\Inertia;

class ClassesController extends Controller
{
    public function __invoke() {}

    public function index()
    {
        $class = ClassesResource::collection(Classes::all());
        return Inertia::render('Class/ClassesList', [
            'class' => $class,
        ]);
    }
}
