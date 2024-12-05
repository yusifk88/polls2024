<?php

namespace App\Imports;

use App\Models\PollingStation;
use Maatwebsite\Excel\Concerns\ToModel;

class PollingStationImport implements ToModel
{
    /**
     * @param array $row
     */
    public function model(array $row)
    {
        return new PollingStation([
            "code" => $row[0],
            "name" => $row[1],
        ]);
    }
}
