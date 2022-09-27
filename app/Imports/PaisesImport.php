<?php

namespace App\Imports;

use App\Models\Paises;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PaisesImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Paises([
                'id'=>$row['id_pais'],
                'pais_nombre'=>$row['pais_nombre'],                
        ]);
    }
}
