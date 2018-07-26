<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;

class TeachersController extends Controller
{
	public function index()
	{
		$teacher = Teachers::all();

		return view('teachers.index', compact('teacher'));
	}
	
    public function create()
	{
		return view('teachers.create');
	}

	public function store()
	{
		$this->validate(request(), [
			'name' => 'required',			
		]);
		
		Teachers::create([
			'name' => request('name'),
		]);

		return redirect()->route('teachers.index')->with('success', 'Success Add Teachers !');
	}

	public function edit(Teachers $teacher)
	{
		return view('teachers.edit', compact('teacher'));
	}

	public function update(Teachers $teacher)
	{
		$teacher->update([
			'name' => request('name'),
		]);

		return redirect()->route('teachers.index')->with('success', 'Success Update Teachers !');
	}

	public function destroy(Teachers $teacher)
	{
		$teacher->delete();

		return redirect()->route('teachers.index')->with('danger', 'Success Delete Teachers !');
	}
}
