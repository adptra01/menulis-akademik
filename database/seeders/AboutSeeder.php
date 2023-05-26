<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'description' => '<p>Kami adalah platform kursus online yang mengkhususkan diri dalam Seni Menulis Akademik dan Keterampilan Argumentasi. Kami percaya bahwa kemampuan menulis yang kuat dan kemahiran berargumentasi yang efektif adalah kunci untuk kesuksesan akademik dan profesional.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tim kami terdiri dari para ahli penulis dan praktisi argumentasi yang berpengalaman, siap membantu Anda mengembangkan keterampilan menulis akademik yang berkualitas tinggi dan keterampilan berargumentasi yang meyakinkan. Kami telah merancang kursus-kursus yang komprehensif dan terstruktur dengan materi yang relevan, latihan praktis, dan umpan balik yang berharga.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Selain itu, kami memberikan akses ke konten berkualitas tinggi, sumber daya tambahan, dan tips dan trik yang akan membantu Anda meningkatkan kemampuan menulis dan argumentasi Anda. Kami berkomitmen untuk memberikan lingkungan pembelajaran yang mendukung, di mana Anda dapat belajar dengan nyaman dan bertumbuh dalam keterampilan Anda.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tidak peduli apakah Anda seorang mahasiswa yang ingin meningkatkan esai akademik Anda, seorang profesional yang ingin memperkuat keterampilan komunikasi tulis, atau siapa pun yang ingin menjadi penulis yang lebih terampil dan argumentator yang lebih efektif, kami di sini untuk membantu Anda mencapai tujuan Anda.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Bergabunglah dengan kami hari ini dan mulailah perjalanan Anda untuk menjadi penulis akademik yang lebih baik dan argumentator yang lebih berpengaruh!</p>'
        ]);
    }
}
