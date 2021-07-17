<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use App\Model\AssignSubject;
use App\Model\ExamType;
use App\Model\FeeCategoryAmount;
use App\Model\MarksGrade;
use App\Model\StudentClass;
use App\Model\StudentMark;
use App\Model\Year;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function feeCategoryAmount()
    {
        $data['allData'] = FeeCategoryAmount::select('fee_category_id')->groupBy('fee_category_id')->get();
        return view('parent.information.view-fee-category-amount', $data);
    }

    public function feeCategoryAmountDetails($fee_category_id)
    {
        $data['detailsData'] = FeeCategoryAmount::where('fee_category_id', $fee_category_id)->orderBy('class_id', 'asc')->get();
        return view('parent.information.details-fee-category-amount', $data);
    }

    public function viewExamType()
    {
        $data['allData'] = ExamType::all();
        return view('parent.information.view-exam-type', $data);
    }

    public function viewAssignSubject()
    {
        $data['allData'] = AssignSubject::select('class_id')->groupBy('class_id')->get();
        return view('parent.information.view-assign-subject', $data);
    }

    public function detailsAssignSubject($class_id)
    {
        $data['detailsData'] = AssignSubject::where('class_id', $class_id)->get();
        return view('parent.information.details-assign-subject', $data);
    }

    public function viewMarkGrade()
    {
        $data['allData'] = MarksGrade::all();
        return view('parent.information.view-mark-grade', $data);
    }

    public function markSheetView()
    {
        $data['years'] = Year::orderBY('id', 'desc')->get();
        $data['classes'] = StudentClass::all();
        $data['exam_types'] = ExamType::all();
        return view('parent.information.view-mark-sheet', $data);
    }

    public function markSheetGet(Request $request)
    {
        $year_id = $request->year_id;
        $class_id = $request->class_id;
        $exam_type_id = $request->exam_type_id;
        $id_no = $request->id_no;
        $count_fail = StudentMark::where('year_id', $year_id)->where('class_id', $class_id)->where('exam_type_id', $exam_type_id)->where('marks', '<', '33')->get()->count();
        $singleStudent = StudentMark::where('year_id', $year_id)->where('class_id', $class_id)->where('exam_type_id', $exam_type_id)->where('id_no', $id_no)->first();

        if ($singleStudent == true) {
            $allMarks = StudentMark::with(['assign_subject', 'year'])->where('year_id', $year_id)->where('class_id', $class_id)->where('exam_type_id', $exam_type_id)->where('id_no', $id_no)->get();
            $allGrades = MarksGrade::all();
            return view('parent.information.pdf-mark-sheet', compact('allMarks', 'allGrades', 'count_fail'));
        } else {
            return redirect()->back()->with('error', 'Sorry! These criteria does not match!');
        }
    }
}
