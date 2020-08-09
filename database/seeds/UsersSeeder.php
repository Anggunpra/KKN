<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'Masyarakat'],
            ['name' => 'Perangkat Desa'],
        ];
        foreach ($roles as $role) {
            Role::create($role);
        }
        $users = [
            [
                'nama_lengkap' => 'Perangkat Desa',
                'tanggal_lahir' => '1999-05-28',
                'email' => 'admin@admin.com',
                'password' => bcrypt('secret'),
                'nomor_telepon' => '081357763665',
                'nomor_ktp' => '350916888987654',
                'alamat_tinggal' => 'Desa Karetan, Purwoharjo, Banyuwangi',
                'pekerjaan' => 'Mahasiswa',
            ],
            [
                'nama_lengkap' => 'Masyarakat',
                'tanggal_lahir' => '1998-09-10',
                'email' => 'masyarakat@masyarakat.com',
                'password' => bcrypt('secret'),
                'nomor_telepon' => '085800000935',
                'nomor_ktp' => '350916888987653',
                'alamat_tinggal' => 'Villa Tegal Besar D - 47',
                'pekerjaan' => 'Mahasiswa',
            ],
        ];
        foreach ($users as $user) {
            $user = \App\User::create($user);
            if($user->nama_lengkap == 'Perangkat Desa'){
                $user->assignRole('Perangkat Desa');
            }else{
                $user->assignRole('Masyarakat');
            }
        }
    }
}
