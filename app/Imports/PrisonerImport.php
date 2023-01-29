<?php
  
namespace App\Imports;
  
use App\Models\Prisoner;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon;
  
class PrisonerImport implements ToModel, WithHeadingRow
{

    
    public function model(array $row)
    {
        return new Prisoner([
            'name' => $row['name'],
            'id_number' => $row['id_number'], 
            'date_arrest' => Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date_arrest'])), 
            'expected_release_date' => Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['expected_release_date'])),  
            'marital_status' => $row['marital_status'], 
            'number_children' => $row['number_children'], 
            'lifelong' => $row['lifelong'], 
            'years_rule' => $row['years_rule'], 
            'judgment_months' => $row['judgment_months'], 
            'judgment_days' => $row['judgment_days'], 
            'organization' => $row['organization'], 
            'governorate' => $row['governorate'], 
            'neighborhood' => $row['neighborhood'], 
            'address' => $row['address'], 
            'mobile' => $row['mobile'], 
            'phone' => $row['phone'], 
            'family_phone' => $row['family_phone'], 
        ]);
    }

    
}