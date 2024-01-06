<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Restore;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (app()->isLocal()) {
            User::factory()->create([
                'name' => 'Admin',
                'number' => '1111',
                'number_type' => 'NIS',
                'role' => User::ROLES['Admin'],
                'password' => Hash::make('admin'),
                'address' => 'indonesia',
                'telephone' => '627878787878',
                'gender' => User::GENDERS['Man'],
            ]);

            User::factory()->create([
                'name' => 'Pustakawan',
                'number' => '2222',
                'number_type' => 'NIS',
                'role' => User::ROLES['Librarian'],
                'password' => Hash::make('pustakawan'),
                'address' => 'indonesia',
                'telephone' => '627878787878',
                'gender' => User::GENDERS['Woman'],
            ]);

            $member = User::factory()->create([
                'name' => 'Member',
                'number' => '3333',
                'number_type' => 'NIS',
                'role' => User::ROLES['Member'],
                'password' => Hash::make('member'),
                'address' => 'indonesia',
                'telephone' => '627878787878',
                'gender' => User::GENDERS['Woman'],
            ]);

            $books = [
                [
                    'title' => 'Cantik itu Luka',
                    'synopsis' => 'Di akhir masa kolonial, seorang perempuan dipaksa menjadi pelacur. Kehidupan itu terus dijalaninya hingga ia memiliki tiga anak gadis yang kesemuanya cantik. Ketika mengandung anaknya yang keempat, ia berharap anak itu akan lahir buruk rupa. Itulah yang terjadi, meskipun secara ironik ia memberinya nama si Cantik.',
                    'publisher' => 'Gramedia Pustaka Utama',
                    'writer' => 'Eka Kurniawan',
                    'publish_year' => 2004,
                    'cover' => 'covers/cantik_itu_luka.jpg',
                    'category' => 'Fiksi',
                    'amount' => 3,
                    'status' => Book::STATUSES['Available'],
                ],
                [
                    'title' => 'Laut bercerita',
                    'synopsis' => 'Jakarta, Maret 1998 Di sebuah senja, di sebuah rumah susun di Jakarta, mahasiswa bernama Biru Laut disergap empat lelaki tak dikenal. Bersama kawan-kawannya, Daniel Tumbuan, Sunu Dyantoro, Alex Perazon, dia dibawa ke sebuah tempat yang tak dikenal. Berbulan-bulan mereka disekap, diinterogasi, dipukul, ditendang, digantung, dan disetrum agara bersedia menjawab satu pertanyaan penting: siapakah yang berdiri di balik gerakan aktivis dan mahasiswa saat itu. Jakarta, Juni 1998 Keluarga Arya Wibisono, seperti biasa, pada hari Minggu sore memasak bersama, menyediakan makanan kesukaan Biru Laut. Sang ayah akan meletakkan satu piring untuk dirinya, satu piring untuk sang ibu, Biru Laut, dan satu piring untuk si bungsu Asmara Jati. Mereka duduk menanti dan menanti',
                    'publisher' => 'Kepustakaan Populer Gramedia',
                    'writer' => 'Leila S. Chudori',
                    'publish_year' => 2017,
                    'cover' => 'covers/laut_bercerita.jpg',
                    'category' => 'Fiksi',
                    'amount' => 4,
                    'status' => Book::STATUSES['Available'],
                ],
                [
                    'title' => 'Bumi manusia',
                    'synopsis' => ' Buku ini bercerita tentang perjalanan seorang tokoh bernama Minke. Minke adalah salah satu anak pribumi yang sekolah di HBS. Pada masa itu, yang dapat masuk ke sekolah HBS adalah orang-orang keturunan Eropa. Minke adalah seorang pribumi yang pandai, ia sangat pandai menulis. Tulisannya bisa membuat orang sampai terkagum-kagum dan dimuat di berbagai Koran Belanda pada saat itu. Sebagai seorang pribumi, ia kurang disukai oleh siswa-siswi Eropa lainnya. Minke digambarkan sebagai seorang revolusioner di buku ini. Ia berani melawan ketidakadilan yang terjadi pada bangsanya. Ia juga berani memberontak terhadap kebudayaan Jawa, yang membuatnya selalu di bawah.',
                    'publisher' => 'Hasta Mitra',
                    'writer' => 'Pramoedya Ananta Toer',
                    'publish_year' => 1981,
                    'cover' => 'covers/bumi_manusia.jpg',
                    'category' => 'Fiksi Sejarah',
                    'amount' => 2,
                    'status' => Book::STATUSES['Available'],
                ],
                [
                    'title' => 'Saman',
                    'synopsis' => 'Empat perempuan bersahabat sejak kecil. Shakuntala si pemberontak. Cok si binal. Yasmin yang selalu ingin ideal. Dan Laila, si lugu yang sedang bimbang untuk menyerahkan keperawanannya pada lelaki beristri. Tapi diam-diam dua di antara sahabat itu menyimpan rasa kagum pada seorang pemuda dari masa silam: Saman, seorang aktivis yang menjadi buron dalam masa rezim militer Orde Baru. Kepada Yasmin, atau Lailakah, Saman akhirnya jatuh cinta? Sejak terbit bersamaan dengan Reformasi, Saman tetap diminati dan telah diterjemahkan ke sepuluh bahasa asing. Novel ini mendapat penghargaan dari dalam dan luar negeri karena mendobrak tabu dan memperluas cakrawala sastra. Karya klasik yang wajib dibaca.',
                    'publisher' => 'Kepustakaan Populer Gramedia',
                    'writer' => 'Ayu Utami',
                    'publish_year' => 2021,
                    'cover' => 'covers/saman.jpg',
                    'category' => 'Fiksi',
                    'amount' => 6,
                    'status' => Book::STATUSES['Available'],
                ],
                [
                    'title' => 'Ronggeng Dukuh Paruk',
                    'synopsis' => 'Semangat Dukuh Paruk kembali menggeliat sejak Srintil dinobatkan menjadi ronggeng baru, menggantikan ronggeng terakhir yang mati dua belas tahun yang lalu. Bagi pedukuhan yang kecil, miskin, terpencil, dan bersahaja itu, ronggeng adalah perlambang. Tanpanya, dukuh itu merasa kehilangan jati diri. Dengan segera Srintil menjadi tokoh yang amat terkenal dan digandrungi. Cantik dan menggoda. Semua ingin pernah bersama ronggeng itu. Dari kaula biasa hingga pejabat-pejabat desa maupun kabupaten. Namun malapetaka politik tahun 1965 membuat dukuh tersebut hancur, baik secara fisik maupun mental. Karena kebodohannya, mereka terbawa arus dan divonis sebagai manusia-manusia yang telah mengguncangkan negara ini. ',
                    'publisher' => 'Gramedia Pustaka Utama',
                    'writer' => 'Ahmad Tohari',
                    'publish_year' => 2020,
                    'cover' => 'covers/ronggeng_dukuh_paruk.jpg',
                    'category' => 'Fiksi',
                    'amount' => 4,
                    'status' => Book::STATUSES['Available'],
                ],                
                [
                    'title' => 'Laskar pelangi',
                    'synopsis' => 'Ceritanya terjadi di desa Gantung, Belitung Timur. Dimulai ketika sekolah Muhammadiyah terancam akan dibubarkan oleh Depdikbud Sumsel jikalau tidak mencapai siswa baru sejumlah 10 anak. Ketika itu baru 9 anak yang menghadiri upacara pembukaan, akan tetapi tepat ketika Pak Harfan, sang kepala sekolah, hendak berpidato menutup sekolah, Harun dan ibunya datang untuk mendaftarkan diri di sekolah kecil itu.',
                    'publisher' => 'Bentang Pustaka',
                    'writer' => 'Andrea Hirata',
                    'publish_year' => 2005,
                    'cover' => 'covers/laskar_pelangi.jpg',
                    'category' => 'Roman',
                    'amount' => 3,
                    'status' => Book::STATUSES['Available'],
                ],
            ];

            foreach ($books as $bookData) {
                $book = Book::create($bookData);
                $bookIds[] = $book->id;
            }


            $borrowCount = count($bookIds);
            foreach ($bookIds as $bookId) {
                $borrows = Borrow::factory($borrowCount)->create([
                    'book_id' => $bookId,
                    'user_id' => $member->id,
                    'confirmation' => true,
                ]);

                if ($borrowCount >= 4) {
                    Restore::factory()->create([
                        'returned_at' => now()->addDays($borrows[0]->duration + 1),
                        'fine' => 10000,
                        'confirmation' => false,
                        'status' => Restore::STATUSES['Fine not paid'],
                        'book_id' => $bookId,
                        'user_id' => $member->id,
                        'borrow_id' => $borrows[0]->id,
                    ]);

                    Restore::factory()->create([
                        'confirmation' => true,
                        'status' => Restore::STATUSES['Returned'],
                        'book_id' => $bookId,
                        'user_id' => $member->id,
                        'borrow_id' => $borrows[1]->id,
                    ]);

                    Restore::factory()->create([
                        'returned_at' => now()->addDays($borrows[0]->duration + 1),
                        'confirmation' => false,
                        'status' => Restore::STATUSES['Past due'],
                        'book_id' => $bookId,
                        'user_id' => $member->id,
                        'borrow_id' => $borrows[2]->id,
                    ]);

                    Restore::factory()->create([
                        'confirmation' => false,
                        'status' => Restore::STATUSES['Not confirmed'],
                        'book_id' => $bookId,
                        'user_id' => $member->id,
                        'borrow_id' => $borrows[3]->id,
                    ]);
                }

                Borrow::factory()->create([
                    'book_id' => $bookId,
                    'user_id' => $member->id,
                    'confirmation' => false,
                ]);

                $borrowCount--;
            }
        }
    }
}
