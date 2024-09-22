<?php

namespace Database\Seeders;

use App\Models\Acara;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AcaraSeeder extends Seeder
{
    public function run(): void
    {
        Acara::create([
            'gambar' => 'images/acara/acara1.jpg',
            'nama' => 'Napak Tilas Ketapang 2024',
            'tanggal' => Carbon::createFromDate(2024, 10, 31, 'Asia/Jakarta'),
            'deskripsi' => 'Napak Tilas merupakan kilas balik dalam mengenang kembali perjuangan masyarakat Tumbang Titi karena ketidaksetujuan terhadap pungutan Pajak/Blasting oleh pemerintah Kolonial Hindia Belanda. Perjuangan tersebut dipelopori oleh tiga tokoh pejuang, antara lain Uti Usman, Panglima Tentemak dan Kenduruhan Bajir.',
        ]);
    }
}
