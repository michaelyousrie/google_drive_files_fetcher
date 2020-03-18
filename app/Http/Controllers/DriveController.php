<?php

namespace App\Http\Controllers;

use App\File;
use App\Helpers\GoogleDrive;
use Illuminate\Http\Request;

class DriveController extends Controller
{
    public function index()
    {
        $files = File::all();

        return view('welcome', compact('files'));
    }

    public function store()
    {
        $files = GoogleDrive::listFiles();

        File::truncate();

        foreach ($files as $file) {
            File::forceCreate([
                'file_id'   => $file->id,
                'name'      => $file->name,
                'mime'      => $file->mimeType,
                'link'      => $file->webViewLink,
                'size'      => (string) ($file->size / 1000)
            ]);
        }

        return redirect()->route('index');
    }

    public function truncate()
    {
        File::truncate();

        return redirect()->route('index');
    }
}
