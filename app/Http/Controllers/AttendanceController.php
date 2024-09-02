<?php

namespace App\Http\Controllers;

use App\Models\Attendance;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function index() {
        return view('atendance');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tableName = $request->input('date');

        DB::beginTransaction();
        DB::rollBack();

        // Schema::dropIfExists($tableName);

        try {
            // Create a new table for the given date
            Schema::create($tableName, function(Blueprint $table) {
                $table->id(); // Auto-incrementing ID
                $table->string('name');
                $table->string('rollNo');
                $table->enum('status', ['absent', 'present']);
                $table->timestamps();
            });

            // Prepare data for insertion
            $students = $request->input('students');
            $data = [];
            foreach ($students as $student) {
                $data[] = [
                    'name' => $student['name'],
                    'rollNo' => $student['rollNo'],
                    'status' => $student['status'],
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }

            // Insert data into the newly created table
            DB::table($tableName)->insert($data);

            // Commit the transaction
            DB::commit();

            return redirect()->route('display.data', ['tableName' => $tableName])
                             ->with('success', "Table '$tableName' created and attendance data added successfully!");

        } catch (\Exception $e) {
            // Rollback the transaction if there was an error
            DB::rollBack();

            // Handle exception
            return redirect('/')
                             ->with('error', "Error creating table or inserting data: " . $e->getMessage());
        }
    }
}
