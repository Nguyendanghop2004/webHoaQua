<?php

use App\Models\DanhMuc;
use App\Models\SanPham;
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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DanhMuc::class)->constrained();
            $table->string('ma_sp')->unique();
            $table->string('name');
            $table->double('gia_thuong');
            $table->double('gia_sale')->nullable();
            $table ->string('mo_ta_ngan')->nullable();
            $table ->text('dac_diem')->nullable();
            $table->string('xuat_su');
            $table->string('bao_quan');
            $table->string('loi_ich');
            $table->string('binh_luan')->nullable();
            $table->unsignedBigInteger('nguoi_xem')->default(0);
            $table ->boolean('trang_thai')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
