<?php

namespace App\Imports;

use App\Models\Admin;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{


    public function model(array $row)
    {
        return new Admin([
            'name'     => $row['name'],
            'email'    => $row['email'],
            'password' => \Hash::make($row['password']),
        ]);
    }


}
