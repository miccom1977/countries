<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Http\Requests\UploadFileRequest;

class FileController extends Controller
{
    public function store(UploadFileRequest $request)
    {

            $fileModel = new File;
            if($request->file()) {
                $fileName = $request->file->getClientOriginalName();
                $filePath = $request->file('file')->store('uploaded', ['disk' => 'files']);
                $fileModel->name = $request->file->getClientOriginalName();
                $fileModel->path = $filePath;
                $fileModel->country_id = $request->country_id;
                $fileModel->save();

                return back()
                ->with('success','Plik został dodany')
                ->with('file', $fileName);
            }

    }
}
