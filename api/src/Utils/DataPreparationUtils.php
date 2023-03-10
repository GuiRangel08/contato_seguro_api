<?php

namespace App\Utils;

class DataPreparationUtils
{

    public static function prepareMissingData(array $reference, array $data)
    {

        foreach ($reference as $key) {
            if (!array_key_exists($key, $data)) {
                $data[$key] = '';
            }
            if (is_null($data[$key])) {
                $data[$key] = '';
            }
        }

        return $data;

    }
}