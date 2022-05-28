<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;

class UsersImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
         Validator::make($rows->toArray(), [
             '*.' => 'required',
         ])->validate();

        foreach ($rows as $row) {
            User::create([
                'Cargo no' => $row['cargo_no'],
                'Cargo type' => $row['cargo_type'],
                'Cargo size' => $row['cargo_size'],
                'Weight' => $row['weight'],
                'Remarks' => $row['remarks'],
                'Wharfage' => $row['wharfage'],
                'Penalty' => $row['penalty'],
                'Storage' => $row['storage'],
                'Electricity' => $row['electricity'],
                'Destuffing' => $row['destuffing'],
                'Lifting' => $row['lifting'],
            ]);
        }
    }

}
