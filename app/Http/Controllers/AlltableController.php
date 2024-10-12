<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\Alltable;
use Illuminate\Http\Request;

class AlltableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = DB::select('SHOW TABLES');
        $dateTables = [];

        // Loop through the tables and check if the name starts with '202'
        foreach ($tables as $table) {
            // Get the first property dynamically
            $tableName = array_values((array)$table)[0];

            // Log the table name for debugging
            \Log::info('Checking table: ' . $tableName);
            
            // Check if the table name starts with '202'
            if (str_starts_with($tableName, '202')) {
                // Get the table details such as columns and data types
                $columns = DB::select("SHOW COLUMNS FROM `$tableName`");

                // Store table name and column details
                $dateTables[] = [
                    'table_name' => $tableName,
                    'columns' => $columns,
                    // Optionally retrieve sample data from the table (e.g., first 5 rows)
                    'sample_data' => DB::table($tableName)->limit(5)->get()
                ];

                \Log::info('Valid date table found: ' . $tableName);
            } else {
                \Log::info('Table does not start with "202": ' . $tableName);
            }
        }

        // Pass the filtered tables with details to the view
        return view('dates', ['dateTables' => $dateTables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alltable  $alltable
     * @return \Illuminate\Http\Response
     */
    public function show(Alltable $alltable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alltable  $alltable
     * @return \Illuminate\Http\Response
     */
    public function edit(Alltable $alltable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alltable  $alltable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alltable $alltable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alltable  $alltable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alltable $alltable)
    {
        //
    }
}
