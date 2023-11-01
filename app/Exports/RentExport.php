<?php

namespace App\Exports;

use App\Models\Rent;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RentExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

    // public function view(): View
    // {
    //     return view('returnLog', [
    //         'rents' => Rent::all()
    //     ]);
    // }

    public function query()
    {
        return Rent::query();
    }

    public function map($rents): array
    {
        return [
            $rents->rent_date,
            $rents->return_date,
            $rents->name,
            $rents->driver->name,
            $rents->unit->name,
            $rents->approval_1,
            $rents->approval_2,
            $rents->status,

        ];
    }

    public function headings() : array
    {
        return [
            'Rent Date',
            'Return Date',
            'Rent Name',
            'Driver',
            'Unit',
            'Approved 1',
            'Approved 2',
            'Status',
        ];
    }
}