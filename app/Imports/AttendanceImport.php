<?php

namespace App\Imports;

use App\Models\Attendance;
use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AttendanceImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $employee = Employee::find(intval($row['employee_id']));

        if ($employee) {
            return new Attendance([
                'employee_id' => $employee->id, 
                'schedule_id' => intval($row['schedule_id']),
                'checkin' => $row['checkin'],
                'checkout' => $row['checkout'],
            ]);
        } else {
            // Handle case where employee is not found
            // You can log an error, skip the record, or handle it based on your application's logic
            return null;
        }
    }
}
