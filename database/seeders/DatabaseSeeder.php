<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Billy',
            'email' => 'billy@gmail.com',
            'password' => bcrypt('abcd1234'),
        ]);
        News::create([
            'title' => 'Kelakar Sandiaga Uno Usai Gagal Jadi Cawapres Ganjar',
            'content' => 'Ketua Badan Pemenangan Pemilu Partai Persatuan Pembangunan (PPP) Sandiaga Uno mengaku saat ini dirinya merasa bebas dan bisa bepergian jauh setelah tak terpilih menjadi bakal calon wakil presiden mendampingi bakal calon presiden Ganjar Pranowo. Hal itu ia ungkapkan di depan para pelaku ekonomi kreatif yang ia temui dalam acara Workshop Kabupaten/Kota (Kata) Kreatif, di Bogor Creative Center, Kota Bogor, Jawa Barat, Kamis (19/10/2023). Kunjungan Sandiaga ke kota hujan itu dalam kapasitasnya sebagai Menteri Pariwisata dan Ekonomi Kreatif. "Mau ke Karawang abis ini. Sekarang saya bisa pergi jauh, karena sudah enggak usah dipanggil calon wapres," kelakar Sandiaga, yang disambut tawa peserta. "Cawapresnya kan sudah diumumkan. Jadi boleh jauh-jauh sekarang perginya, ke Merauke juga boleh," sambungnya. Baca juga: Tak Jadi Cawapres, Sandiaga Disebut Legawa dan Siap Menangkan Ganjar-Mahfud Ia menceritakan, dirinya sempat dipanggil oleh Ganjar dan partai koalisi pendukung lainnya sebelum diumumkannya Mahfud MD sebagai bakal calon wakil presiden. Namun, kata Sandiaga, rupanya panggilan tersebut bukan untuk ditunjuk sebagai pendamping Ganjar, melainkan hadir menyaksikan pengumuman bacawapres Mahfud MD. "Tenang, sekarang sudah enggak ada panggilan lagi. Kemarin dipanggil ternyata hanya untuk menyaksikan pengumuman Mahfud MD," sebutnya. Sebagaimana diketahui, Ketua Umum Partai Demokrasi Indonesia Perjuangan (PDIP) Megawati resmi mengumumkan Mahfud MD sebagai sosok pendamping Ganjar Pranowo untuk maju Pilpres 2024. Pengumuman itu disampaikan Megawati di Kantor DPP PDI-P, Rabu pagi. Sandiaga yang ikut hadir menyaksikan pengumuman itu memberi ucapan selamat berjuang kepada pasangan itu.'           
        ]);
        News::create([
            'title' => 'Mario Dandy Tetap Dihukum Bayar Restitusi Rp 25 M ke David Ozora',
            'content' => 'Jakarta - Majelis hakim Pengadilan Tinggi (PT) DKI Jakarta tetap menghukum Mario Dandy Satriyo (20) membayar restitusi sebesar Rp 25 miliar. Hakim mengatakan nilai restitusi itu sudah sesuai dengan rasa keadilan.'           
        ]);
        News::create([
            'title' => 'Mata Dunia Tertuju ke Gaza, Ukraina Diam-Diam Bombardir Rusia',
            'content' => 'Mata Dunia Tertuju ke Gaza, Ukraina Diam-Diam Bombardir Rusia. Vladimir Rogov, seorang pejabat yang didukung Moskow di wilayah Zaporizhzhia selatan Ukraina tempat Berdiansk berada, mengatakan varian cluster ATACMS telah digunakan di kota tersebut, serta bentuk Bom Diameter Kecil yang Diluncurkan di Darat (GLSDBs).

            "ATACMS telah membuktikan diri," konfirmasi Presiden Ukraina Volodymyr Zelensky pada Selasa (17/10/2023) malam.
            
            Sementara itu, juru bicara Dewan Keamanan Nasional AS Adrienne Watson dalam sebuah pernyataan mengatakan yakin ATACMS ini akan memberikan dorongan signifikan terhadap kemampuan medan perang Ukraina tanpa membahayakan kesiapan militer AS.
            
            The New York Times, mengutip dua pejabat, sebelumnya melaporkan AS telah mengirimkan sekitar 20 ATACMS. Namun, ATACMS yang disediakan, yang merupakan jenis munisi tandan kedua yang dikirim AS ke Ukraina, diperkirakan tidak memiliki jangkauan maksimum yang mampu dijangkau oleh sistem tersebut.
            
            Beberapa kalangan memuji serangan itu sebagai salvo pembuka bagi fase baru upaya perang Ukraina, dan serangan yang tidak disadari oleh Moskow, sama seperti serangan balasan darat yang dilakukan Ukraina sejak awal Juni.
            
            "Ini adalah pengubah permainan lain yang akan menyelamatkan banyak nyawa di antara pasukan Ukraina," kata Volodymyr Omelyan, seorang kapten militer Ukraina dan mantan menteri infrastruktur, mengutip Newsweek. ATACMS, juga dikenal sebagai Sistem Rudal Taktis Angkatan Darat, dapat secara dramatis mengubah seluruh strategi dan taktik perang, mengalihkan perhatian dari perang darat yang melelahkan di Ukraina ke serangan jarak jauh.

            ATACMS juga akan berguna bagi Ukraina untuk menargetkan pangkalan-pangkalan Rusia seperti lapangan terbang, dibandingkan target yang diperkeras atau dibentengi seperti yang dirancang untuk rudal Storm Shadow dan SCALP yang dipasok oleh Inggris dan Prancis.'           
        ]);
        News::create([
            'title' => 'Enam Pegawai KPK Hari Ini Diperiksa Jadi Saksi Kasus Dugaan Pemerasan',
            'content' => 'Polisi akan memeriksa enam pegawai Komisi Pemberantasan Korupsi (KPK) sebagai saksi dalam dugaan pemerasan pimpinan lembaga antirasuah tersebut pada eks Menteri Pertanian Syahrul Yasin Limpo (SYL), Kamis (19/10).
            Pemeriksaan dijadwalkan pada pukul 10.00 WIB oleh penyidik Subdit Tipikor Ditreskrimsus Polda Metro Jaya.
            
            "Enam orang saksi dari pegawai KPK RI," kata Direktur Reskrimsus Polda Metro Jaya Kombes Ade Safri Simanjuntak kepada wartawan. Ade tak mengungkapkan identitas keenam pegawai KPK yang akan dimintai keterangan. Ia mengatakan penyidik juga menjadwalkan pemeriksaan terhadap dua saksi lainnya, selain enam pegawai KPK tersebut.

            "Satu orang saksi dari Pusdatin Kemenkes RI dan satu orang saksi lainnya," ucap dia.
            
            Saat ini Polda Metro Jaya tengah mengusut dugaan pemerasan oleh pimpinan KPK kepada eks Mentan Syahrul Yasin Limpo (SYL).

Kasus dugaan pemerasan ini telah masuk dalam tahap penyidikan berdasarkan gelar perkara pada Jumat 6 Oktober. Dalam kasus ini, penyidik menggunakan Pasal 12 huruf e atau Pasal 12 huruf B, atau Pasal 11 UU Tipikor Jo Pasal 65 KUHP.

Surat perintah penyidikan pun telah diterbitkan pada 9 Oktober lalu. Selama proses penyidikan, sejumlah saksi telah diperiksa, di antaranya SYL hingga Kapolrestabes Semarang Kombes Irwan Anwar.

Selain itu, penyidik juga telah menjadwalkan pemeriksaan pada Ketua KPK Firli Bahuri, dengan surat panggilan pun telah dilayangkan pada Rabu (18/10).

"Telah dikirimkan surat panggilan dalam kapasitas sebagai saksi kepada saudara FB selaku Ketua KPK RI untuk dimintai keterangan pada hari Jumat tanggal 20 Oktober 2023 pukul 14.00 WIB di ruang pemeriksaan penyidik Subdit Tipikor di Gedung Promoter," kata Direktur Reskrimsus Polda Metro Jaya Kombes Ade Safri Simanjuntak kepada wartawan kemarin.

'           
        ]);
        News::create([
            'title' => 'MMKSI tawarkan gaya hidup urban Mitsubishi XFORCE di GIIAS Semarang',
            'content' => 'Jakarta (ANTARA) - PT Mitsubishi Motors Krama Yudha Sales Indonesia (MMKSI) memperkenalkan kompak SUV terbaru sekaligus menawarkan era baru petualangan gaya hidup urban untuk masyarakat Semarang yang dinamis melalui lini kendaraan memadukan gaya, fungsionalitas, inovasi, kenyamanan, dan performa dalam ajang GAIKINDO Indonesia International Auto Show (GIIAS) Semarang 18-22 Oktober 2023 di Marina Convention Center.

            "Pergelaran otomotif ini menjadi medium yang tepat bagi kami dalam memperkenalkan Mitsubishi XFORCE secara lokal. Sebagai pusat perekonomian utama di Jawa Tengah, Semarang adalah pasar menarik yang mencerminkan semangat inovasi dan modernitas, selaras dengan kendaraan kami yang selalu hadir dengan desain inovatif dan fitur-fitur terkini dengan fungsionalitas tinggi," kata Director of Sales & Marketing Division PT MMKSI Irwan Kuncoro lewat keterangan tertulis, Rabu (18/10).
            
            Pada ajang GIIAS Semarang ini, Irwan melanjutkan, para pengunjung dapat merasakan pengalaman mendalam bersama Mitsubishi XFORCE yang dirancang untuk memadukan gaya perkotaan dan kemampuan off-road secara harmonis dan keunggulan model lainnya. Booth MMKSI, Irwan mengatakan, dirancang untuk merepresentasikan komitmen dari branding terbaru yaitu “Life’s Adventure” dengan luas area 130,5 meter persegi yang menjanjikan pengalaman luar biasa bagi para pengunjung.

            Pada ajang ini MMKSI menampilkan 2 unit mobil impresif Mitsubishi XFORCE yang memudahkan pengunjung untuk menjelajahi berbagai fitur andalan dari setiap varian model ini. Program penjualan maupun purna jual pun dihadirkan khusus di acara ini untuk memberikan keuntungan yang maksimal bagi para konsumen. Sebagai pelengkap petualangan pelanggan, MMKSI juga menawarkan 2 unit test drive yang terdiri atas dua unit model XFORCE tipe Ultimate untuk memastikan pengunjung dapat sepenuhnya merasakan pengalaman bersama Mitsubishi Motors.

            Selain produk terkini, MMKSI juga telah menyiapkan sejumlah program penjualan dan purnajual yang dirancang untuk memberikan keuntungan lebih kepada pelanggan.
            
            Peluncuran lokal ini, kata Irwan, menegaskan kembali tekad MMKSI terhadap pasar otomotif di Semarang dan wilayah Jawa Tengah karena Mitsubishi Motors telah menjadi pendamping terpercaya petualangan pelanggan selama bertahun-tahun.
            
            Semarang juga terus memberikan kontribusi positif bagi penjualan produk Mitsubishi Motors. Sepanjang periode Januari-September 2023, Semarang telah memberi kontribusi sebesar 39 persen terhadap penjualan kendaraan penumpang dan niaga ringan Mitsubishi Motors di Jawa Tengah dan telah berkontribusi sebesar 8 persen sepanjang periode Januari-September 2023 untuk penjualan nasional.
            
            Sedangkan untuk segmen kompak SUV, secara umum Semarang mencatat penjualan sebesar 30% pada periode Januari-September 2023 terhadap Jawa Tengah, atau berkontribusi kepada penjualan compact SUV secara nasional sebesar 6 persen.'           
        ]);
        News::create([
            'title' => 'Mobil hemat energi rakitan mahasiswa Malang',
            'content' => 'Mahasiswa melakukan uji coba mengendarai purwarupa kendaraan listrik yang diberi nama Rayap Aspalt Evo-5 di kampus Universitas Muhammadiyah Malang, Jawa Timur, Kamis (19/10/2023). Mahasiswa di kampus tersebut merakit dua mobil hemat energi yakni mobil berbahan bakar etanol yang mampu menempuh jarak sekitar 1.000 kilometer dengan satu liter etanol dan mobil listrik dengan jarak tempuh 200 kilometer per kilowatt hour (kWh). ANTARA FOTO/Ari Bowo Sucipto/foc.'    
        ]);
    }
}
