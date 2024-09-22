<?php

namespace Database\Seeders;

use App\Models\WarisanBudayaTakBenda;
use Illuminate\Database\Seeder;

class WarisanBudayaTakBendaSeeder extends Seeder
{
    public function run(): void
    {
        WarisanBudayaTakBenda::create([
            'foto' => 'images/warisan-budaya/warisan1.jpg',
            'nama' => 'Syair Gulung Ketapang',
            'nomor_sk' => 'Sertifikat Menteri Pendidikan Kebudayaan Riset dan Teknologi No: 3040/F4/KB.09.06/2022',
            'deskripsi' => 'Syair Gulung merupakan khasanah kebudayaan Melayu yang harus dipertahankan. Melalui syair, banyak sekali yang bisa dilakukan diantaranya, mengenalkan wilayah, memberikan kritik, memberikan hiburan kepada orang lain (yang penting jangan sampai ada yang tersakiti). Syair yang dibaca harus sesuai dengan situasi dan kondisi. Dahulu penyebarannya dilakukan dengan menggunakan seni-seni budaya dan tradisi setempat dan juga sebagai media dakwah. Disebut syair gulung, karena kertas yang dibaca di sambung panjang kebawah dan ada wadahnya setelah digulung.',
        ]);


        WarisanBudayaTakBenda::create([
            'foto' => 'images/warisan-budaya/warisan2.jpg',
            'nama' => 'Ritual Adat Kanjang Serayong',
            'nomor_sk' => 'Sertifikat Menteri Pendidikan Kebudayaan Riset dan Teknologi No: 3040/F4/KB.09.06/2022',
            'deskripsi' => 'Kanjan Serayong ini merupakan ritual adat kematian dalam masyarakat dayak pesaguan dan merupakan sebuah ritual untuk menghormati arwah orang yang meninggal. Upacara ini mirip dengan upacara ngaben di Bali. Makna dari menganjan ini adalah semacam ungkapan kemenangan atas maut. Adapun maksud dan tujuan dari upacara ini adalah mengganti suasana dalam masa berkabung menjadi suasana yang riang gembira. Di samping itu juga untuk melepaskan semacam ikatan dari masa berkabung.',
        ]);


        WarisanBudayaTakBenda::create([
            'foto' => 'images/warisan-budaya/warisan3.jpg',
            'nama' => 'Ritual Adat Meruba',
            'nomor_sk' => '-',
            'deskripsi' => 'Ritual Adat Meruba adalah sebuah upacara adat yang sangat penting bagi masyarakat Dayak di Dusun Sengkuang, Desa Benua Krio, Kecamatan Hulu Sungai, Kabupaten Ketapang, Kalimantan Barat. Upacara ini dilaksanakan setiap tahunnya pada tanggal 25 Juni dan memiliki makna yang sangat dalam bagi kehidupan masyarakat setempat. Inti dari ritual ini adalah pencucian pusaka Kerajaan Hulu Aik, khususnya keris keramat Bosi Koling. Proses pencucian ini diyakini sebagai cara untuk menjaga kesucian dan kekuatan pusaka agar tetap melindungi masyarakat. Meruba juga dipandang sebagai momen untuk memperbarui ikatan spiritual antara masyarakat dengan leluhur dan alam semesta. Ritual ini bertujuan untuk menjaga keharmonisan dan keseimbangan dalam masyarakat. Diharapkan dengan terlaksananya Meruba, masyarakat akan hidup rukun dan damai. Meruba juga menjadi bentuk ungkapan syukur kepada Tuhan Yang Maha Esa atas segala berkah yang telah diberikan.',
        ]);


        WarisanBudayaTakBenda::create([
            'foto' => 'images/warisan-budaya/warisan4.jpg',
            'nama' => 'Ritual Adat Nungkat Gumi',
            'nomor_sk' => '-',
            'deskripsi' => 'Ritual Adat Nungkat Gumi merupakan upacara adat yang sangat penting bagi masyarakat Dayak Semandang-Kualan di Kecamatan Simpang Hulu, Kabupaten Ketapang, Kalimantan Barat. Ritual ini memiliki makna yang sangat dalam terkait hubungan manusia dengan alam semesta. Secara harfiah, "nungkat" berarti menopang dan "gumi" berarti bumi. Jadi, ritual ini bertujuan untuk membersihkan bumi dari segala kotoran dan energi negatif yang dapat mengganggu keseimbangan alam. Nungkat Gumi juga bertujuan untuk menjaga keharmonisan antara manusia dengan alam semesta, leluhur, dan sesama manusia. Melalui ritual ini, masyarakat memohon berkah kepada Sang Pencipta agar diberikan kesehatan, rezeki, dan perlindungan.',
        ]);


        WarisanBudayaTakBenda::create([
            'foto' => 'images/warisan-budaya/warisan5.jpg',
            'nama' => 'Ritual Adat Bebantan',
            'nomor_sk' => '-',
            'deskripsi' => 'Ritual Adat Bebantan merupakan upacara adat yang sangat penting bagi masyarakat Dayak Pesaguan khususnya yang berada di Kabupaten Ketapang Kalimantan Barat. Bebantan merupakan tradisi yang dilakukan secara turun-temurun dengan tujuan untuk membersihkan kampung, mengusir roh jahat, dan memohon berkah kepada Sang Hyang Duwata (Tuhan Yang Maha Esa) serta leluhur. Ritual ini bertujuan untuk membersihkan kampung dari segala pengaruh negatif, baik itu dari roh jahat maupun energi buruk lainnya. Bebantan juga merupakan bentuk ungkapan syukur kepada alam semesta atas segala karunia yang telah diberikan.',
        ]);
    }
}
