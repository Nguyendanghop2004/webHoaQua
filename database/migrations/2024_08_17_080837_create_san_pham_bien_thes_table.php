<?php

use App\Models\SanPham;
use App\Models\SanPhamBienThe;
use App\Models\SanPhamKhoiLuong;
use App\Models\SanPhamKichThuoc;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('san_pham_bien_thes', function (Blueprint $table) {
            $table->foreignIdFor(SanPham::class)->constrained();
            $table->foreignIdFor(SanPhamKhoiLuong::class)->constrained();
            $table->foreignIdFor(SanPhamKichThuoc::class)->constrained();
            $table->primary(['san_pham_id','san_pham_khoi_luong_id', 'san_pham_kich_thuoc_id'], 'san_pham_bien_thes_unique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_pham_bien_thes');
    }
};
