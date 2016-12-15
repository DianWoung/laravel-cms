<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use App\Service\Admin\OSS;

class UploadfileController extends Controller
{
    private $oss;

    function __construct(OSS $oss)
    {
        $this->oss = $oss;
    }

    public function upload(Request $request)
    {
        if ($request->isMethod('post')) {
            $file = $request->file('file')->store('uploads');
            // 文件是否上传成功
           return $file;
        }
        return 'upload failed';

    }
    public function uploadOSS(Request $request)
    {
        if ($request->isMethod('post')) {
            $filePath = $request->file;
            // 文件是否上传成功
            $this->oss->upload('testtest001.jpg',$filePath);
           return $this->oss->getUrl('testtest001.jpg');

        }else{
            return 'failed';
        }
    }
}