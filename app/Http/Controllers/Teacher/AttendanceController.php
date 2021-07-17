<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Model\EmployeeAttendance;
use App\User;
use PDF;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function attendanceView()
    {
        $data['employeess'] = User::where('usertype', 'teacher')->get();
        return view('teacher.attendance.attendance-view', $data);
    }

    public function attendanceGet(Request $request)
    {
        $employee_id = $request->employee_id;
        if ($employee_id != '') {
            $where[] = ['employee_id', $employee_id];
        }
        $date = date('Y-m', strtotime($request->date));
        if ($date != '') {
            $where[] = ['date', 'like', $date . '%'];
        }

        $singleAttendance = EmployeeAttendance::with(['user'])->where($where)->first();

        if ($singleAttendance == true) {
            $data['allData'] = EmployeeAttendance::with(['user'])->where($where)->get();
            $data['absents'] = EmployeeAttendance::with(['user'])->where($where)->where('attend_status', 'Absent')->get()->count();
            $data['leaves'] = EmployeeAttendance::with(['user'])->where($where)->where('attend_status', 'Leave')->get()->count();
            $data['month'] = date('M Y', strtotime($request->date));
            $pdf = PDF::loadView('teacher.attendance.attendance-pdf', $data);
            $pdf->SetProtection(['copy', 'print'], '', 'pass');
            return $pdf->stream('document.pdf');
        } else {
            return redirect()->back()->with('error', 'Sorry! These criteria does not match!');
        }
    }
}
