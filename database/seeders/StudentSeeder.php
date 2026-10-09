<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'TJ ahmed',
            'email' => 'tjahmed@gmail.com',
            'phone' => '01474389369',
            'department' => 'BBA',
            'age' => 28,
        ]);

        Student::create([
            'name' => 'Arif Rahman',
            'email' => 'arif.rahman@gmail.com',
            'phone' => '01711223344',
            'department' => 'CSE',
            'age' => 22,
        ]);

        Student::create([
            'name' => 'Sadia Islam',
            'email' => 'sadia.islam@gmail.com',
            'phone' => '01822334455',
            'department' => 'EEE',
            'age' => 21,
        ]);

        Student::create([
            'name' => 'Tanvir Hasan',
            'email' => 'tanvir.hasan@gmail.com',
            'phone' => '01933445566',
            'department' => 'BBA',
            'age' => 24,
        ]);

        Student::create([
            'name' => 'Nusrat Jahan',
            'email' => 'nusrat.jahan@gmail.com',
            'phone' => '01544556677',
            'department' => 'English',
            'age' => 20,
        ]);

        Student::create([
            'name' => 'Mahmudul Hasan',
            'email' => 'mahmudul@gmail.com',
            'phone' => '01655667788',
            'department' => 'Civil',
            'age' => 23,
        ]);

        Student::create([
            'name' => 'Fariha Akter',
            'email' => 'fariha.akter@gmail.com',
            'phone' => '01366778899',
            'department' => 'Pharmacy',
            'age' => 22,
        ]);

        Student::create([
            'name' => 'Imran Khan',
            'email' => 'imran.khan@gmail.com',
            'phone' => '01477889900',
            'department' => 'CSE',
            'age' => 25,
        ]);

        Student::create([
            'name' => 'Anika Tabassum',
            'email' => 'anika.t@gmail.com',
            'phone' => '01788990011',
            'department' => 'Architecture',
            'age' => 23,
        ]);

        Student::create([
            'name' => 'Sabbir Ahmed',
            'email' => 'sabbir.ahmed@gmail.com',
            'phone' => '01899001122',
            'department' => 'EEE',
            'age' => 22,
        ]);

        Student::create([
            'name' => 'Mehedi Hasan',
            'email' => 'mehedi.hasan@gmail.com',
            'phone' => '01900112233',
            'department' => 'BBA',
            'age' => 26,
        ]);
    }
}
