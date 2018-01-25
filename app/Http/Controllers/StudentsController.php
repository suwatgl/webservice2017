<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
	public function Index(Request $request)
	{
		if ($request->has('table')) {
			$students = \App\Student::get();
			return view('friends.table')->with('students', $students);
		}
	}
	
	public function create()
	{
		return view('friends.create');
	}
	
	public function store(Request $request)
	{
		try {
			\App\Student::create($request->all());
			$students = \App\Student::get();
			return view('friends.table')->with('students', $students);
		}
		catch(Exception $e) {
			return $e->getMessage();
		}
	}

	public function edit($id)
	{
		$student = \App\Student::find($id);
		return view('friends.edit')->with('student', $student);
	}

	public function update(Request $request, $id)
	{
		try {
			$student = \App\Student::find($id);
			$student->init_name 	= $request->get('init_name');
			$student->first_name 	= $request->get('first_name');
			$student->last_name 	= $request->get('last_name');
			$student->save();

			$students = \App\Student::get();
			return view('friends.table')->with('students', $students);
		}
		catch(Exception $e) {
			return $e->getMessage();
		}
	}

	public function destroy($id)
    {
        // delete
        $student = \App\Student::find($id);
        $student->delete();

		$students = \App\Student::get();
		return view('friends.table')->with('students', $students);
    }
}
