<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Model\Notice;
use App\User;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function noticeView()
    {
        $data['allData'] = Notice::orderBy('id', 'desc')->get();
        return view('teacher.notice.view-notice', $data);
    }

    public function details($id)
    {
        $data['detailsData'] = Notice::find($id);
        return view('teacher.notice.detail-notice', $data);
    }

    public function viewParent()
    {
        $data['allData'] = User::where('usertype', 'parent')->get();
        return view('teacher.notice.view-parent', $data);
    }

}
