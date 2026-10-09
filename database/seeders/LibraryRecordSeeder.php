<?php

namespace Database\Seeders;

use App\Models\LibraryRecord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibraryRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LibraryRecord::create([
            'student_name' => 'Shayla Mamun',
            'student_id' => 'STU2026000',
            'book_title' => 'A Mon Mane na Kono Badha',
            'Author' => 'Ershad Shikdar',
            'issue_date'   => '2026-09-25',
            'return_date'  => '2026-10-09',
            'status' => 'issued',
        ]);

        LibraryRecord::create([
            'student_name' => 'আরিফ রহমান',
            'student_id'   => 'STU2026001',
            'book_title'   => 'পদ্মা নদীর মাঝি',
            'author'       => 'মানিক বন্দ্যোপাধ্যায়',
            'issue_date'   => '2026-10-01',
            'return_date'  => '2026-10-15',
            'status'       => 'issued',
        ]);
        LibraryRecord::create([
            'student_name' => 'ফাতেমা আক্তার',
            'student_id'   => 'STU2026002',
            'book_title'   => 'গীতাঞ্জলি',
            'author'       => 'রবীন্দ্রনাথ ঠাকুর',
            'issue_date'   => '2026-09-20',
            'return_date'  => '2026-10-04',
            'status'       => 'returned',
        ]);
        LibraryRecord::create([
            'student_name' => 'তানভীর আহমেদ',
            'student_id'   => 'STU2026003',
            'book_title'   => 'হিমু',
            'author'       => 'হুমায়ূন আহমেদ',
            'issue_date'   => '2026-10-05',
            'return_date'  => '2026-10-20',
            'status'       => 'issued',
        ]);
        LibraryRecord::create([
            'student_name' => 'নূসরাত জাহান',
            'student_id'   => 'STU2026004',
            'book_title'   => 'লালসালু',
            'author'       => 'সৈয়দ ওয়ালীউল্লাহ',
            'issue_date'   => '2026-09-15',
            'return_date'  => '2026-09-30',
            'status'       => 'returned',
        ]);
        LibraryRecord::create([
            'student_name' => 'মেহেদী হাসান',
            'student_id'   => 'STU2026005',
            'book_title'   => 'আরণ্যক',
            'author'       => 'বিভূতিভূষণ বন্দ্যোপাধ্যায়',
            'issue_date'   => '2026-10-08',
            'return_date'  => '2026-10-22',
            'status'       => 'issued',
        ]);
        LibraryRecord::create([
            'student_name' => 'সানজিদা ইসলাম',
            'student_id'   => 'STU2026006',
            'book_title'   => 'কপালকুণ্ডলা',
            'author'       => 'বঙ্কিমচন্দ্র চট্টোপাধ্যায়',
            'issue_date'   => '2026-10-02',
            'return_date'  => '2026-10-16',
            'status'       => 'overdue',
        ]);
        LibraryRecord::create([
            'student_name' => 'রাকিবুল হাসান',
            'student_id'   => 'STU2026007',
            'book_title'   => 'চিলেকোঠার সেপাই',
            'author'       => 'আখতারুজ্জামান ইলিয়াস',
            'issue_date'   => '2026-09-10',
            'return_date'  => '2026-09-25',
            'status'       => 'returned',
        ]);
        LibraryRecord::create([
            'student_name' => 'আফরোজা সুলতানা',
            'student_id'   => 'STU2026008',
            'book_title'   => 'খোয়াবনামা',
            'author'       => 'আখতারুজ্জামান ইলিয়াস',
            'issue_date'   => '2026-10-09',
            'return_date'  => '2026-10-23',
            'status'       => 'issued',
        ]);
        LibraryRecord::create([
            'student_name' => 'ইমরান খান',
            'student_id'   => 'STU2026009',
            'book_title'   => 'সঞ্চয়িতা',
            'author'       => 'রবীন্দ্রনাথ ঠাকুর',
            'issue_date'   => '2026-09-01',
            'return_date'  => '2026-09-15',
            'status'       => 'returned',
        ]);
        LibraryRecord::create([
            'student_name' => 'তাসনিম রহমান',
            'student_id'   => 'STU2026010',
            'book_title'   => 'মিসির আলির চশমা',
            'author'       => 'হুমায়ূন আহমেদ',
            'issue_date'   => '2026-10-03',
            'return_date'  => '2026-10-17',
            'status'       => 'overdue',
        ]);
    }
}
