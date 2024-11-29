<?php

namespace App\Http\Controllers;

use App\Mail\Emails;
use Illuminate\Http\Request;
use App\Models\FormSubmission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Test\Constraint\EmailSubjectContains;

class FormController extends Controller
{
    public function page()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {

       //dd('ss');
       //dd($request->file('files'));
        // Validate the form input
        $validated = $request->validate([
            'name' => 'required|string',
            'ic' => 'required|string|regex:/^\d{12}$/',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'files' => 'required|array',
            'files.*' => 'required|file',
        ]);

        foreach ($request->file('files') as $file) {
            // Check if the file extension is not in the allowed list
            if (!in_array($file->getClientOriginalExtension(), ['pdf', 'zip', 'rar'])) {
                return redirect()->back()->withInput()->with('file_error', 'All uploaded files must be in PDF, ZIP, or RAR format.');
            }
        }


        // Create a new record and save form data to the database
        $formSubmission = FormSubmission::insertGetId([
            'name' => $validated['name'],
            'ic' => $validated['ic'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //dd($formSubmission);
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $filePath = $file->store('uploads', 'public'); // Store file and get path

                DB::table('attachments')->insert([
                    'submissionID' => $formSubmission, // Link to form submission
                    'filename' => $file->getClientOriginalName(), // Original filename
                    'filesize' => $file->getSize(), // File size in bytes
                    'filetype' => $file->getMimeType(), // File MIME type
                    'filepath' => $filePath, // Stored file path
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
        $fileData = [];

        //if (is_array($files)) {
        foreach ($request->file('files') as $file) {
            $fileData[] = [
                'path' => $file->getRealPath(),
                'name' => $file->getClientOriginalName(), // Original name with extension
            ];
        }
        //} elseif ($files) {
        /* $fileData[] = [
                'path' => $files->getRealPath(),
                'name' => $files->getClientOriginalName(),
            ];
        }*/
        //dd($fileData);
        /*$file;
        foreach ($request->file('files') as $file) {
            $file->attach($file->getRealPath());
        }*/

        //new emails();
        try {
            Mail::to('anakjantan577@gmail.com')->send(new Emails($validated['name'],$validated['ic'],$validated['email'], $validated['phone'], $fileData, 'Permohonan Pembiayaan Guru', null));
            return redirect()->back()->with('success', 'PEMOHONAN ANDA DITERIMA PROSES PERMOHONAN ADALAH SELAMA 7 HARI BEKERJA SEBARANG PERTANYAAN, SILA HUBUNGI I. DESTINASI SDN BHD DI TALIAN:       03-40232266');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Form not submitted. Error: ' . $e->getMessage());
        }

        // Redirect or return a response
        //return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
