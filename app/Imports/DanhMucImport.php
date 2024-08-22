<?php

namespace App\Imports;

use App\Models\DanhMuc;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DanhMucImport implements ToModel, WithHeadingRow
{

    /**
     * @param  array  $row
     * @return Model|Model[]|null
     */
    public function headingRow(): int
    {
        return 1;
    }
    public function model(array $row)
    {
        return  new DanhMuc([
            'danh_muc' => $row['name'],
            'trang_thai' => $row['trangthai'],
        ]);
    }
}
