<?php

namespace App\Imports;


use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;

class FeedbacksImport implements ToCollection, WithHeadingRow
{

    public function collection(Collection $collection)
    {
        return $collection; //add this line
    }
}
