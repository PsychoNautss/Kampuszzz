<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rating_reviews')->insert([
            ['id'=>1, 'name'=>'Siti Nurhaliza', 'email'=>'siti@example.com', 'no_telp'=>'081234567890', 'rating'=>5, 'review'=>'Batik yang sangat cantik! Kualitas kain premium dan motifnya elegan. Pengiriman juga sangat cepat. Highly recommended!', 'product_detail_id'=>1, 'region_id'=>1, 'created_at' => now(), 'updated_at' => now()],
            ['id'=>2, 'name'=>'Budi Santoso', 'email'=>'budi@example.com', 'no_telp'=>'082345678901', 'rating'=>5, 'review'=>'Laptop sesuai deskripsi, performa mantap untuk gaming dan editing. Packing rapi dan aman. Seller responsif!', 'product_detail_id'=>2, 'region_id'=>2, 'created_at' => now(), 'updated_at' => now()],
            ['id'=>3, 'name'=>'Dewi Lestari', 'email'=>'dewi@example.com', 'no_telp'=>'083456789012', 'rating'=>5, 'review'=>'Gelang cantik banget! Desain unik dan berkualitas. Cocok untuk hadiah. Terima kasih seller!', 'product_detail_id'=>3, 'region_id'=>3, 'created_at' => now(), 'updated_at' => now()],
            ['id'=>4, 'name'=>'Ahmad Rizki', 'email'=>'ahmad@example.com', 'no_telp'=>'084567890123', 'rating'=>5, 'review'=>'Alat tulis lengkap dan berkualitas. Cocok untuk kebutuhan kuliah. Harga terjangkau. Puas banget!', 'product_detail_id'=>4, 'region_id'=>4, 'created_at' => now(), 'updated_at' => now()],
            ['id'=>5, 'name'=>'Rina Wijaya', 'email'=>'rina@example.com', 'no_telp'=>'085678901234', 'rating'=>5, 'review'=>'Obat herbal original dan khasiatnya terasa. Packaging aman dan rapi. Recomended seller!', 'product_detail_id'=>5, 'region_id'=>5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
