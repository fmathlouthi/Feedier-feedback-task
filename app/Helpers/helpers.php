<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;


use Maatwebsite\Excel\Facades\Excel as FacadesExcel;
use App\Imports\FeedbacksImport;

class Helpers
{

    public static function removespace($data)
    {
        $string = htmlentities($data, 0, 'utf-8');
        return trim(str_replace("&nbsp;", "", $string));
    }

    public static  function import_CSV($filename)
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;
        $header = null;
        $data = array();

        $data = (FacadesExcel::toArray(new FeedbacksImport(), $filename));
        $data = $data[0];
        $csv_data = array_slice($data, 1);

        return $csv_data;
    }
}
