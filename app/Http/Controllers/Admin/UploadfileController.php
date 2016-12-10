<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;

class UploadfileController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->isMethod('post')) {
            $file = $request->file('file')->store('uploads');
            // 文件是否上传成功
           return $file;
        }
        return 'upload failed';

    }
}