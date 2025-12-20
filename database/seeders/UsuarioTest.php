<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsuarioTest extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Angee Camila',
            'email' => 'cami28g@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Juan Morales',
            'email' => 'juanmorales@gmail.com',
            'password' => Hash::make('12345'),
        ]);
    }
}
