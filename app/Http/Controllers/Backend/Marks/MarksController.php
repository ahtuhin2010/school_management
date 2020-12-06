<?php

namespace App\Http\Controllers\Backend\Marks;

use App\Http\Controllers\Controller;
use App\User;
use App\Model\AssignStudent;
use App\Model\DiscountStudent;
use App\Model\ExamType;
use App\Model\StudentClass;
use App\Model\FeeCategoryAmount;
use App\Model\StudentGroup;
use App\Model\StudentShift;
use App\Model\Year;
use App\Model\StudentMark;
use Illuminate\Http\Request;
use DB;
use PDF;

class MarksController extends Controller
{
    public function add()
    {
        $data['years'] = Year::orderBY('id', 'desc')->get();
        $data['classes'] = StudentClass::all();
        $data['exam_types'] = ExamType::all();
        return view('backend.marks.add-marks', $data);
    }

    public function store(Request $request)
    {
        $studentcount = $request->student_id;
        if ($studentcount) {
            for ($i=0; $i <count($request->student_id); $i++) {
                $data = new StudentMark();
                $data->year_id = $request->year_id;
                $data->class_id = $request->class_id;
                $data->assign_subject_id = $request->assign_subject_id;
                $data->exam_type_id = $request->exam_type_id;
                $data->student_id = $request->student_id[$i];
                $data->id_no = $request->id_no[$i];
                $data->marks = $request->marks[$i];
                $data->save();
            }
        }
        return redirect()->back()->with('success', 'Marks Insert Successfully');
    }

    public function edit(Request $request)
    {
        $data['years'] = Year::orderBY('id', 'desc')->get();
        $data['classes'] = StudentClass::all();
        $data['exam_types'] = ExamType::all();
        return view('backend.marks.edit-marks', $data);
    }

    public function getMarks(Request $request)
    {
        $year_id = $request->year_id;
        $class_id = $request->class_id;
        $assign_subject_id = $request->assign_subject_id;
        $exam_type_id = $request->exam_type_id;
        $getStudent = StudentMark::with(['student'])->where('year_id', $year_id)->where('class_id', $class_id)->where('assign_subject_id', $assign_subject_id)->where('exam_type_id', $exam_type_id)->get();
        return response()->json($getStudent);
    }
    public function update(Request $request)
    {
        StudentMark::where('year_id', $request->year_id)->where('class_id', $request->class_id)->where('assign_subject_id', $request->assign_subject_id)->where('exam_type_id', $request->exam_type_id)->delete();

        $studentcount = $request->student_id;
        if ($studentcount) {
            for ($i = 0; $i < count($request->student_id); $i++) {
                $data = new StudentMark();
                $data->year_id = $request->year_id;
                $data->class_id = $request->class_id;
                $data->assign_subject_id = $request->assign_subject_id;
                $data->exam_type_id = $request->exam_type_id;
                $data->student_id = $request->student_id[$i];
                $data->id_no = $request->id_no[$i];
                $data->marks = $request->marks[$i];
                $data->save();
            }
        }
        return redirect()->back()->with('success', 'Marks Updated Successfully');
    }

}
