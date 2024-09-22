<?php

namespace Database\Seeders;

use App\Models\Pustaka;
use Illuminate\Database\Seeder;

class PustakaSeeder extends Seeder
{
    public function run(): void
    {
        Pustaka::create([
            'gambar' => 'images/pustaka/pustaka1.jpg',
            'judul' => 'Cerita Rakyat Kalimantan Barat: Legenda Batu Menangis',
            'konten' => 'Alkisah di atas sebuah bukit, jauh dari pemukiman penduduk di Kalimantan Barat, hiduplah ibu bersama anak perempuannya. Suaminya sudah lama meninggal tanpa mewariskan harta berarti. Kehidupan menjanda di umur cukup tua tak meninggalkan ibu banyak pilihan. Ia tak mungkin menikah lagi, jadi ibu harus berusaha sendiri untuk menghidupi anak perempuan kesayangannya, Darmi. Setiap hari ibu bekerja keras. Mengurus kebun sayur sejak pagi buta: menanam bibit, menyiram, memberi pupuk, menyiangi semak, memanen, dan menjual hasil panen ke pasar. Belum lagi mengurus anak yang masih kecil, juga mencari kayu bakar untuk memasak. Kulit ibu yang awalnya cerah, lama-lama menggelap karena terpapar sinar matahari. Berat badannya menyusut, ibu tak memiliki waktu untuk mengurus dirinya sendiri. Harapan ibu, Darmi bisa hidup bahagia, tak seperti dirinya. Maka Darmi pun dimanja; penuh kasih sayang. Darmi tumbuh menjadi gadis cantik! Kulitnya kuning langsat, tubuh semampai, paras memesona, dan rambutnya hitam legam panjang terurai. Darmi juga selalu mengenakan baju indah dan aksesori mentereng. Berbeda dari ibu yang sudah lama tak membeli barang untuk diri sendiri. Ia sudah tua, pikirnya. Tak memerlukan lagi semua hal itu. Tapi Darmi masih muda dan suka bergaul. Darmi pun selalu senang jika dibelikan baju baru, aksesori, dan alat berhias. Lama kelamaan, hanya benda-benda itu yang ada di benaknya. Darmi senang sekali bercermin sambil menyisir rambutnya. Ia sadar, kalau dirinya sangat cantik. Tapi hanya itu pula yang Darmi lakukan. Mengagumi diri sendiri sepanjang hari, saat ibu bekerja keras di kebun. Suatu hari ibu lupa mengantar pesanan sayur ke pelanggannya di desa. Ibu meminta tolong Darmi untuk memasak. Tapi saat pulang, ternyata Darmi masih bersolek. Jangankan memasak, kamarnya pun masih berantakan seperti saat ibu tinggalkan. Saat ditanya, Darmi malah geram, karena ibu mengganggunya berdandan dan meninggalkannya kelaparan. Akhirnya ibu juga yang membuat makanan, kemudian membereskan kamar Darmi. Darmi makin keenakan, untuk mengambil segelas air saja harus memanggil ibu. Tak pernah sekalipun Darmi mengerjakan pekerjaan rumah, apalagi berpanas-panasan di kebun sayur atau mengantar dagangan ke pasar di kaki bukit. Tapi saat menginginkan sesuatu, Darmi akan merengek hingga mendapatkan keinginannya. Jika ibu tidak punya uang, Darmi marah besar! Mengatakan ia kesal dilahirkan di keluarga miskin. Hal ini membuat ibu sedih, dan sering kali menguras uang tabungannya. Bagaimanapun, Darmi adalah satu-satunya cinta ibu, anaknya tersayang yang ia besarkan sendiri dari kecil.',
        ]);


        Pustaka::create([
            'gambar' => 'images/pustaka/pustaka2.jpg',
            'judul' => 'Bubor Pedas, Bubur Hijau Khas Kalimantan Barat',
            'konten' => 'Saat pertama kali mendengar makanan yang satu ini, banyak orang yang mungkin akan menyangka bahwa bubur jenis ini memiliki rasa pedas. Padahal tidak demikian. Istilah “paddas” atau pedas sendiri adalah perumpamaan dari suku Melayu Sambas, Kalimantan Barat, yang berarti beragam sayuran dan rempah yang terdapat di dalam bubur. Rasa pedasnya yang berasal dari bumbu merica dan cabe merah juga tidak berlebihan. Bubor pedas merupakan kuliner khas masyarakat Melayu Sambas yang berdiam di wilayah pesisir pantai utara Kalimantan Barat. Anda bisa menemukan bubur ini di setiap sudut kota Sambas. Mulai dari kantin-kantin sekolah, pasar tradisional, bahkan di restoran berbintang. Melansir dari laman resmi indonesia.go.id, bubor pedas kuliner khas Sambas dulunya berasal dari suku Melayu dari wilayah Pontianak, Singkawang, dan sekitarnya. Pada awalnya, bubur ini hanya dimasak dan disajikan ketika ada acara kerajaan atau upacara adat yang bersifat sakral. Namun, ketika terjadi perang dan stok bahan makanan di Sambas menipis, bubor pedas yang menjadi simbol semangat Bhinneka Tunggal Ika ini dibuat oleh masyarakat sebagai salah satu cara untuk berhemat dan dapat dinikmati oleh seluruh anggota keluarga. Tidak seperti bubur-bubur di kota lain yang dimasak hingga lembut, bubor pedas dibuat dengan cara menumbuk beras hingga halus, lalu dioseng dan dicampur berbagai sayur-sayuran seperti kangkung, daun kesum, dan daun pakis, yang dimasukkan secara bersamaan saat bubur dimasak. Bubor pedas ini biasa disajikan dengan ikan teri goreng lengkap dengan kacang tanah sebagai topping yang sering dihidangkan sebagai menu berbuka di bulan Ramadan. Hal ini dikarenakan bubor pedas yang dibuat dari beras tumbuk, kelapa parut, berbagai sayuran, serta ubi merah, diyakini dapat mengembalikan stamina setelah berpuasa selama 14 jam dengan cepat.',
        ]);


        Pustaka::create([
            'gambar' => 'images/pustaka/pustaka3.jpg',
            'judul' => 'Gendang Beriak, Pertunjukan Gendang Khas Masyarakat Dayak',
            'konten' => 'Sama halnya dengan musik tradisional berbagai suku di Asia Tenggara lainnya, musik Suku Dayak juga didominasi oleh bunyi-bunyi yang dihasilkan dari alat musik perkusi. Musik perkusi merupakan musik yang lahir dari kebudayaan yang lekat hubungannya dengan alam. Dengan kata lain, musik ini bersumber dari pola hidup masyarakat yang agraris, mengingat alat musik perkusi lahir dan terinspirasi dari tumbuhan. Dayak memiliki berbagai alat musik perkusi, seperti togunggak, peruncong, sengkurung, gendang Dayak, dan lainnya. Yang menarik, salah satu ciri dari alat musik perkusi Dayak adalah nadanya yang saling mengisi, atau dalam istilah Suku Dayak disebut dengan ngait, ngipa, atau ningka. Menurut Willian Malm, seorang etnomusikolog berkebangsaan Amerika Serikat, tangga nada dalam alat musik Dayak tidak sama dengan alat musik tradisional Jawa. Alat musik Dayak hanya mempunyai lima tangga nada dan tidak memilki jarak nada setengah yang disebut dengan anhemitonic-penthatonic–dapat dilihat dari alat musik sape. Karenanya, banyak yang menganggap musik Dayak lebih rumit jika dibandingkan dengan alat musik tradisional Jawa yang memiliki tujuh tangga nada. Namun, tidak semua alat musik tradisional Dayak terlihat rumit. Gendang Dayak, misalnya. Jika alat musik perkusi Dayak lainnya dimainkan menggunakan tehnik ngait, maka gendang Dayak dalam pementasan gendang beriak justru dimainkan dengan cara rampak. Suara gendang beriak hampir sama dengan suara gendang pada umumnya. Yang membedakan gendang beriak dari gendang lainnya adalah tempo permainannya. Tabuhan menghentak tapi lambat disesuaikan dengan gerakan para penari yang bertumpu pada gerak hentak kaki.',
        ]);
    }
}