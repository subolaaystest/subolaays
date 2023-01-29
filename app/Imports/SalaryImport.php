<?php
  
namespace App\Imports;
  
use App\Models\Salary;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
  
class SalaryImport implements ToModel, WithHeadingRow
{

    
    public function model(array $row)
    {
        return new Salary([
            'id_number' => $row['id_number'],
            'user_code' => $row['user_code'], 
            'name' => $row['name'], 
            'salary' => $row['salary'], 
            'month' => $row['month'], 
            'year' => $row['year'], 
            'salary_date' => $row['salary_date'], 
        ]);
    }

    
}