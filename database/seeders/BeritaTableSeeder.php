<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('beritas')->insert([
            [
                'title' => 'Jake Paul Menang Unanimous Decision atas Mike Tyson',
                'slug' => $this->generateUniqueSlug('Jake Paul Menang Unanimous Decision atas Mike Tyson'),
                'content' => 'Dalam sebuah pertandingan yang mengejutkan banyak pihak, Jake Paul berhasil meraih kemenangan atas legenda tinju Mike Tyson dengan keputusan bulat (unanimous decision) setelah melalui delapan ronde yang penuh ketegangan. Pertandingan yang berlangsung di Las Vegas pada akhir pekan lalu ini menjadi salah satu pertarungan paling kontroversial dan mengundang perhatian besar dari penggemar olahraga dunia. Meskipun Tyson lebih berpengalaman dan memiliki nama besar, Paul menunjukkan dominasi yang tak terbantahkan selama pertandingan.
                                Sejak ronde pertama, Jake Paul sudah menunjukkan agresivitasnya, meskipun Tyson, yang berusia 58 tahun, berhasil mengimbangi dengan teknik bertarung yang masih tajam. Namun, stamina Tyson yang mulai menurun dan kecepatan Jake Paul yang lebih muda menjadi faktor penentu dalam pertandingan ini. Di sepanjang ronde, Paul berhasil menghindari banyak pukulan keras dari Tyson dan mengontrol alur pertarungan dengan sangat baik.
                                Tyson, yang dikenal dengan pukulannya yang mematikan, berjuang keras untuk mengejar ketertinggalan, tetapi usia dan keterbatasan fisik menjadi hambatan besar. Meskipun ia berhasil melontarkan beberapa pukulan keras yang sempat mengguncang Paul, kecepatan dan strategi bertahan Jake Paul terbukti efektif. Pada ronde-ronde akhir, Paul semakin menguasai pertarungan, mengirimkan serangan-serangan cepat yang hampir membuat Tyson kehabisan tenaga.
                                Keputusan bulat dari juri yang mendukung Jake Paul memicu perdebatan di kalangan penggemar tinju dan masyarakat luas. Banyak yang merasa bahwa Tyson, meskipun sudah berusia lanjut, masih memiliki kualitas yang tidak bisa diremehkan. Namun, kemenangan Paul menunjukkan betapa persiapan fisik dan mental yang matang bisa memberikan keuntungan dalam olahraga tinju, meskipun melawan legenda seperti Tyson.
                                Usai pertandingan, Jake Paul mengungkapkan rasa hormatnya kepada Tyson sebagai petinju legendaris, namun ia juga menegaskan bahwa ini adalah pembuktian dirinya di dunia tinju profesional. Sementara itu, Tyson, meskipun kecewa, menyatakan bahwa ia bangga dengan perjuangannya dan tetap menghormati Paul. Kemenangan ini membuka babak baru dalam karier Paul yang semakin serius di dunia tinju, dan kemungkinan akan ada lebih banyak pertarungan besar yang menantinya di masa depan.',
                'penulis' => 'Bady Ubaidillah',
                'image' => '1732114916.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mike Tyson di Callout oleh Seorang YouTube',
                'slug' => $this->generateUniqueSlug('Mike Tyson di Callout oleh Seorang YouTube'),
                'content' => 'Mike Tyson, legenda tinju dunia yang terkenal dengan kekuatan pukulannya, baru-baru ini menjadi sorotan media setelah seorang YouTuber menantangnya untuk bertarung. YouTuber tersebut, yang dikenal dengan konten-konten ekstrimnya, mengunggah video di platformnya dengan tajuk "Tantangan untuk Mike Tyson". Dalam video itu, ia menyatakan bahwa dirinya siap untuk bertanding melawan Tyson meski memiliki latar belakang yang jauh dari dunia tinju profesional.',
                'penulis' => 'Rahmat Kurniawan',
                'image' => '1732115609.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }

    /**
     * Generate a unique slug based on the title.
     */
    private function generateUniqueSlug($title)
    {
        do {
            $slug = Str::slug($title) . '-' . Str::random(5); // Generate slug with random string
        } while (DB::table('beritas')->where('slug', $slug)->exists()); // Check uniqueness

        return $slug;
    }
}
