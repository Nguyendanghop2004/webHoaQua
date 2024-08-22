<?php

namespace App\Exports;

use App\Models\Danhmuc;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DangMucExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection 
     */
    /**
     * @return array
     */


    public function headings(): array
    {
        return
            [
                'số thứ tự',
                'Tên Danh mục',
                'Trang thái'
            ];
    }
    public function collection()
    {
        return Danhmuc::all();
    }


}
