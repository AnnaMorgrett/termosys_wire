<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        $dataPoints = [];

        foreach ($students as $student) {

            $dataPoints[] = array(
                "name" => $student['name'],
                "data" => [
                    intval($student['term1_marks']),
                    intval($student['term2_marks']),
                    intval($student['term3_marks']),
                    intval($student['term4_marks']),
                ],
            );
        }

        return view("line-chart", [
            "data" => json_encode($dataPoints),
            "terms" => json_encode(array(
                "Term 1",
                "Term 2",
                "Term 3",
                "Term 4",
            )),
        ]);
    }
}
