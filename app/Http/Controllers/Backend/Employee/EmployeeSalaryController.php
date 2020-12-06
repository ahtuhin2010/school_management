<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use App\User;
use App\Model\Designation;
use App\Model\EmployeeSalaryLog;
use Illuminate\Http\Request;
use DB;
use PDF;

class EmployeeSalaryController extends Controller
{
    public function view()
    {
        $data['allData'] = User::where('usertype', 'employee')->get();
        return view('backend.employee.employee_salary.view-employee-salary', $data);
    }

    public function increment($id)
    {
        $data['editData'] = User::find($id);
        return view('backend.employee.employee_salary.add-employee-salary', $data);
    }

    public function store(Request $request, $id)
    {
        $user = User::find($id);
        $previous_salary = $user->salary;
        $present_salary = (float)$previous_salary+(float)$request->increment_salary;
        $user->salary = $present_salary;
        $user->save();

        $salaryData = new EmployeeSalaryLog();
        $salaryData->employee_id = $id;
        $salaryData->previous_salary = $previous_salary;
        $salaryData->increment_salary = $request->increment_salary;
        $salaryData->present_salary = $present_salary;
        $salaryData->effected_date = date('Y-m-d', strtotime($request->effected_date));
        $salaryData->save();

        return redirect()->route('employees.salary.view')->with('success', 'Salary Increment Successfully');
    }


    public function details($id)
    {
        $data['details'] = User::find($id);
        $data['salary_log'] = EmployeeSalaryLog::where('employee_id', $data['details']->id)->get();
        return view('backend.employee.employee_salary.employee-salary-details', $data);
    }
}
