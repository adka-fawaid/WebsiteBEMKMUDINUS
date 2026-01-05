<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SavePressImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * Menyimpan 3 gambar press release ke storage/app/public/artikel/
     */
    public function run(): void
    {
        $destinationPath = storage_path('app/public/artikel');
        
        // Pastikan folder ada
        if (!is_dir($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        // Daftar placeholder gambar (menggunakan existing images)
        $images = [
            'press-1.png' => public_path('assets/images/ss.png'),
            'press-2.png' => public_path('assets/images/logo.png'),
            'press-3.png' => public_path('assets/images/LOGOKREASI.png'),
        ];

        foreach ($images as $destName => $sourcePath) {
            $destFile = $destinationPath . '/' . $destName;
            
            // Skip jika sudah ada
            if (file_exists($destFile)) {
                echo "File $destName sudah ada, skip.\n";
                continue;
            }

            // Copy gambar
            if (file_exists($sourcePath)) {
                copy($sourcePath, $destFile);
                echo "Menyimpan $destName berhasil.\n";
            } else {
                echo "File source $sourcePath tidak ditemukan.\n";
            }
        }
    }
}
