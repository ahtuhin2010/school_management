<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Model\AssignSubject;
use App\Model\ExamType;
use App\Model\FeeCategoryAmount;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function feeCategoryAmount()
    {
        $data['allData'] = FeeCategoryAmount::select('fee_category_id')->groupBy('fee_category_id')->get();
        return view('teacher.information.view-fee-category-amount', $data);
    }

    public function feeCategoryAmountDetails($fee_category_id)
    {
        $data['detailsData'] = FeeCategoryAmount::where('fee_category_id', $fee_category_id)->orderBy('class_id', 'asc')->get();
        return view('teacher.information.details-fee-category-amount', $data);
    }

    public function viewExamType()
    {
        $data['allData'] = ExamType::all();
        return view('teacher.information.view-exam-type', $data);
    }


    public function viewAssignSubject()
    {
        $data['allData'] = AssignSubject::select('class_id')->groupBy('class_id')->get();
        return view('teacher.information.view-assign-subject', $data);
    }

    public function detailsAssignSubject($class_id)
    {
        $data['detailsData'] = AssignSubject::where('class_id', $class_id)->get();
        return view('teacher.information.details-assign-subject', $data);
    }
}
