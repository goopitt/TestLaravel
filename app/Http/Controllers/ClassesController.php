<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\Teachers;

class ClassesController extends Controller
{
	public function index()
	{
		$class = Classes::all();
		$teacher = Teachers::all();

		return view('classes.index', compact('class', 'teacher'));
	}
    public function create()
	{
		$teacher = Teachers::all();
		return view('classes.create', compact('teacher'));
	}

	public function store()
	{
		Classes::create([
			'name' => request('name'),
			'teachers_id' => request('teachers_id'),
		]);

		return redirect()->route('classes.index')->withSuccess('Success Add Class !');
	}

	public function edit(Classes $class)
	{
		$teacher = Teachers::all();

		return view('classes.edit', compact('class','teacher'));
	}

	public function update(Classes $class)
	{
		$class->update([
			'name' => request('name'),
			'teachers_id' => request('teachers_id'),
		]);

		return redirect()->route('classes.index')->withSuccess('Success Update Class !');
	}

	public function destroy(Classes $class)
	{
		$class->delete();

		return redirect()->route('classes.index')->withDanger('Success Delete Class !');
	}

}