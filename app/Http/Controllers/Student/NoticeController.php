<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Model\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function noticeView()
    {
        $data['allData'] = Notice::orderBy('id', 'desc')->get();
        return view('student.notice.view-notice', $data);
    }

    public function details($id)
    {
        $data['detailsData'] = Notice::find($id);
        return view('student.notice.detail-notice', $data);
    }
}
