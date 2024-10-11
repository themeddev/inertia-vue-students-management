<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classe;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\ClasseResource;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $studentQuery = Student::search($request);
        $classes = ClasseResource::collection(Classe::all());

        return inertia('Student/Index', [
            'students' => StudentResource::collection(
                $studentQuery->paginate(5)
            ),
            'classes' => $classes,
            'search' => request('search') ?? ''
        ]);
    }

    protected function applySearch(Builder $query, $search)
    {
        return $query->when($search, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%');
        });
    }

    public function create()
    {
        $classes = ClasseResource::collection(Classe::all());

        return inertia('Student/Create', [
            'classes' => $classes
        ]);
    }

    public function store(StoreStudentRequest $request)
    {
        Student::create($request->validated());

        return redirect()->route('students.index');
    }

    public function edit(Student $student)
    {
        $classes = ClasseResource::collection(Classe::all());

        return inertia('Student/Edit', [
            'student' => StudentResource::make($student),
            'classes' => $classes
        ]);
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index');
    }
}