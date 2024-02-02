<?php

namespace App\Http\Controllers;

use App\Imports\AttendanceImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Attendance;

class AttendanceUploadController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('uploadAttendance', ['attendances' => $attendances]);
        
    }

    public function uploadAttendance(Request $request)
    {
        if ($request->hasFile('file')) {
            // Get the uploaded file
            $file = $request->file('file');
            
            // Parse the Excel file and insert its data into the Attendance model
            Excel::import(new AttendanceImport, $file);
            // Fetch all attendance records
            $attendances = Attendance::all();

            // Return the fetched attendance records in the JSON response
            return response()->json(['message' => 'Attendance uploaded successfully', 'attendances' => $attendances], 200);
        } else {
            return response()->json(['error' => 'No file uploaded'], 400);
        }
    }
}
