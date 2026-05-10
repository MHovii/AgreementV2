<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;



class AgreementController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function preview(Request $request)
    {
        $data = $request->all();
        return view('preview', compact('data'));
    }

    public function download(Request $request)
    {
        $data = $request->all();

        $html = view('pdf', compact('data'))->render();

        $pdfPath = public_path('agreement.pdf');

        Browsershot::html($html)
            ->setChromePath('C:\Program Files\Google\Chrome\Application\chrome.exe')
            ->format('A4')
            ->margins(0, 0, 0, 0)
            ->showBackground()
            ->save($pdfPath);

        return response()->download($pdfPath);
    }
}


