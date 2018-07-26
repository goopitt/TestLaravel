<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\Classes;

class StudentsController extends Controller
{
	public function index()
	{
		$student = Students::all();
		$class = Classes::all();
		return view('students.index', compact('student','class'));
	}
    public function create()
	{
		$class = Classes::all();
		return view('students.create', compact('class'));

	}

	public function store()
	{
		Students::create([
			'name' => request('name'),
			'class_id' => request('class_id'),
		]);

		return redirect()->route('students.index')->withSuccess('Success Add Student !');
	}

	public function edit(Students $student)
	{
		$class = Classes::all();

		return view('students.edit', compact('student','class'));
	}

	public function update(Students $student)
	{
		$student->update([
			'name' => request('name'),
			'class_id' => request('class_id'),
		]);

		return redirect()->route('students.index')->withSuccess('Success Update Student !');
	}

	public function destroy(Students $student)
	{
		$student->delete();

		return redirect()->route('students.index')->withDanger('Success Delete Student !');
	}

}