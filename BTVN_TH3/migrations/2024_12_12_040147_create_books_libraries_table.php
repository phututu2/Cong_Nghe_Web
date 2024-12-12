<?php

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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();                               // Mã thư viện tự động tăng
            $table->string('name');                     // Tên thư viện
            $table->string('address')->nullable();      // Địa chỉ thư viện
            $table->string('contact_number')->nullable(); // Số điện thoại liên hệ
            $table->timestamps();                       // Thời gian tạo và cập nhật
        });

        // Tạo bảng books
        Schema::create('books', function (Blueprint $table) {
            $table->id();                                // Mã sách tự động tăng
            $table->string('title');                      // Tên sách
            $table->string('author');                     // Tác giả
            $table->year('publication_year');             // Năm xuất bản
            $table->string('genre');                      // Thể loại
            $table->foreignId('library_id')->constrained()->onDelete('cascade'); // Khóa ngoại tới bảng libraries
            $table->timestamps();                        // Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
        Schema::dropIfExists('libraries');
    }
};
