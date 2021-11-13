<?php

namespace App\Http\Controllers;

use App\Exports\CountryExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new CountryExport, 'countries.xlsx');
    }

}
