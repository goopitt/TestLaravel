<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use Classes;
use Teachers;
use Students;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function generatePDF()
    {
        $class_data = DB::table('teachers')
                ->join('classes', 'teachers.id', '=', 'classes.teachers_id')
                ->join('students', 'classes.id', '=', 'students.class_id')
                ->select('teachers.name as guru', 'classes.name as kelas', 'students.name as siswa')
                ->orderBy('classes.name')
                ->get();

        $data = ['title' => 'Classrooms'];
        $pdf = PDF::loadView('myPDF', $data, compact('class_data'));

        return $pdf->download('classrooms.pdf');
    }
}
