<?php

namespace App\Exports;

use App\Censo;
use Maatwebsite\Excel\Concerns\FromCollection;

class CensoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Censo::all();
    }
}
