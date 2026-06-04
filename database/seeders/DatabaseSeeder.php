<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Profile::create([
            'ho_ten'      => 'Nguyễn Hoàng Phúc',
            'ngay_sinh'   => '2000-05-15',
            'nghe_nghiep' => 'Lập trình viên',
            'que_quan'    => 'Hà Nội',
        ]);
    }
}
