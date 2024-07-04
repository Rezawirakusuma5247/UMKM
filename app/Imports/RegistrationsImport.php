<?php

namespace App\Imports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RegistrationsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Registration([
            'event_id' => $row['event_id'],
            'name' => $row['name'],
            'umkm' => $row['umkm'],
            'number' => $row['number'],
            'approved' => $row['approved'] ?? false,
        ]);
    }
}
