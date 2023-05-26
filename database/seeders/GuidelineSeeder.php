<?php

namespace Database\Seeders;

use App\Models\Guideline;
use Illuminate\Database\Seeder;

class GuidelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guideline::create([
            'description' => '<p>Berikut adalah beberapa pedoman dalam Seni Menulis Akademik dan Keterampilan Argumentasi yang dapat membantu Anda dalam perjalanan peningkatan keterampilan menulis dan berargumentasi:</p><ol><li>Klarifikasi Tujuan: Sebelum memulai menulis atau membuat argumen, jelaskan tujuan Anda dengan jelas. Apakah Anda ingin meyakinkan pembaca, menyampaikan informasi dengan jelas, atau mempertahankan pendapat Anda? Tujuan yang jelas akan membantu membentuk struktur tulisan atau argumen Anda.</li><li>Riset Mendalam: Melakukan riset yang mendalam adalah langkah penting dalam menulis akademik dan berargumentasi. Dapatkan pemahaman yang kuat tentang topik yang akan Anda tulis atau argumen yang akan Anda buat. Gunakan sumber-sumber terpercaya dan beragam untuk mendukung klaim Anda.</li><li>Struktur yang Jelas: Organisasi yang baik adalah kunci dalam menulis akademik dan berargumentasi. Gunakan pendekatan yang terstruktur dengan memperkenalkan pembaca kepada topik, menyusun argumen secara logis, dan mengakhiri dengan kesimpulan yang kuat. Pastikan setiap bagian terkait erat dengan topik utama.</li><li>Gunakan Bahasa yang Jelas dan Tepat: Gunakan bahasa yang jelas, tepat, dan mudah dipahami. Hindari jargon yang hanya dipahami oleh kalangan tertentu. Jelaskan konsep yang kompleks dengan bahasa yang sederhana dan jelas untuk memastikan pesan Anda tersampaikan dengan baik.</li><li>Dukung dengan Bukti dan Argumen yang Kuat: Menggunakan bukti yang kuat dan argumen yang meyakinkan adalah kunci dalam menulis akademik dan berargumentasi. Gunakan fakta, data, kutipan, dan contoh yang relevan untuk mendukung klaim Anda. Buatlah argumen yang konsisten dan logis.</li><li>Hindari Bias dan Emosi yang Berlebihan: Dalam menulis akademik dan berargumentasi, penting untuk menghindari bias dan emosi yang berlebihan. Tetaplah objektif dan berfokus pada fakta dan bukti yang ada. Sampaikan pendapat dengan argumen yang rasional dan beralasan.</li><li>Perhatikan Tata Bahasa dan Penulisan: Jaga kebersihan tata bahasa dan penulisan Anda. Periksa kesalahan ejaan, tata bahasa, dan struktur kalimat. Gunakan kalimat yang bervariasi dan mengikuti aturan tata bahasa yang benar. Baca kembali tulisan Anda untuk memastikan keseluruhan pesan Anda disampaikan dengan baik.</li><li>Berikan Pemikiran Kritis dan Refleksi: Latih pemikiran kritis dan refleksi dalam menulis akademik dan berargumentasi. Evaluasi argumen Anda secara kritis, pertimbangkan sudut pandang alternatif, dan sampaikan refleksi yang mendalam tentang topik yang Anda bahas.</li></ol><p>Dengan mengikuti pedoman-pedoman ini, Anda dapat mengembangkan keterampilan menulis akademik dan berargumentasi yang lebih baik. Latihan terus-menerus dan umpan balik yang konstruktif juga akan membantu meningkatkan kemampuan Anda seiring berjalannya waktu.</p>'
        ]);
    }
}
