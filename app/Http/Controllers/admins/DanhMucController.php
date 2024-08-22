<?php

namespace App\Http\Controllers\admins;

use App\Exports\DangMucExport;
use App\Http\Controllers\Controller;
use App\Imports\DanhMucImport;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DanhMucController extends Controller
{
    const PATH_VIEW = 'admins.danhMuc.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DanhMuc::query()->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->except('_token');
        $data['trang_thai'] ??=  0;
        // dd($data);
        DanhMuc::query()->create($data);
        return redirect()->route('admins.index')->with('success', 'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DanhMUc::query()->findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = DanhMUc::query()->findOrFail($id);
        $model = $request->all();
        $data->update($model);
        return back()->with('success', 'Sửa thành công');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo 1;
        $data = DanhMuc::query()->findOrFail($id);
        $data->delete();
        return back()->with('success', 'xóa thành công');
    }

    public function export()
    {
        // $data = DanhMuc::all();
        return Excel::download(new DangMucExport, 'bai.xlsx');
    }
    public function showImport()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }
    public function import(Request $request)
    {
        $import = Excel::import(new DanhMucImport, request()->file('danh_muc'));
        return redirect()->back()->with('success', 'Thêm mới thành công');
    }
}
