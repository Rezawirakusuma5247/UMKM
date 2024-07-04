<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegistrationsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Registration::where('approved', true)->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Event ID',
            'Name',
            'UMKM',
            'Number',
            'Created At',
            'Updated At',
            'Approved',
        ];
    }
}
