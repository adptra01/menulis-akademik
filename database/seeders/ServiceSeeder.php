<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'description' => '<p>Selamat datang di halaman pelayanan kami! Kami dengan senang hati memberikan berbagai layanan yang dirancang khusus untuk memenuhi kebutuhan Anda. Berikut adalah beberapa kalimat yang menjelaskan tentang pelayanan kami:</p><ol><li>Kursus Online Interaktif: Kami menyediakan kursus online interaktif yang memungkinkan Anda belajar Seni Menulis Akademik dan Keterampilan Argumentasi dengan fleksibilitas waktu dan tempat. Anda dapat mengakses materi pembelajaran kapan saja dan di mana saja, serta berpartisipasi dalam diskusi dengan instruktur dan sesama peserta kursus.</li><li>Materi Kursus yang Komprehensif: Kami menawarkan materi kursus yang komprehensif dan terstruktur, dirancang khusus untuk membantu Anda mengembangkan keterampilan menulis akademik yang kuat dan keterampilan berargumentasi yang efektif. Materi kursus meliputi strategi penulisan, teknik argumentasi, analisis teks, dan banyak lagi.</li><li>Umpan Balik dan Bimbingan: Selama kursus, Anda akan mendapatkan umpan balik yang berharga dari instruktur kami yang berpengalaman. Instruktur akan memberikan panduan dan bimbingan individu untuk membantu Anda memperbaiki kemampuan menulis dan berargumentasi Anda.</li><li>Latihan dan Tugas Praktis: Kami menyediakan latihan dan tugas praktis yang dirancang untuk melatih keterampilan menulis dan berargumentasi Anda. Melalui latihan yang terstruktur, Anda dapat mengaplikasikan konsep yang dipelajari dalam situasi nyata, sehingga meningkatkan pemahaman dan keahlian Anda.</li><li>Dukungan Komunitas: Bergabunglah dengan komunitas peserta kursus kami dan dapatkan dukungan dari sesama peserta. Anda dapat berbagi pengalaman, ide, dan saling memberikan dukungan dalam perjalanan Anda untuk meningkatkan keterampilan menulis akademik dan berargumentasi.</li><li>Sumber Daya Tambahan: Kami menyediakan sumber daya tambahan seperti artikel, panduan, dan referensi yang relevan untuk mendukung Anda dalam pengembangan keterampilan menulis akademik dan berargumentasi. Sumber daya ini akan membantu Anda memperdalam pemahaman Anda tentang topik yang dibahas dalam kursus.</li><li>Sertifikat Kelulusan: Setelah menyelesaikan kursus, Anda akan menerima sertifikat kelulusan yang mengkonfirmasi partisipasi dan pencapaian Anda dalam mengembangkan keterampilan menulis akademik dan berargumentasi. Sertifikat ini dapat meningkatkan kredibilitas Anda dalam dunia akademik dan profesional.</li></ol><p>Kami berkomitmen untuk memberikan pelayanan terbaik kepada Anda dalam perjalanan pembelajaran Seni Menulis Akademik dan Keterampilan Argumentasi. Bergabunglah dengan kami dan tingkatkan keterampilan Anda dalam menulis dan berargumentasi secara efektif.</p>'
        ]);
    }
}
