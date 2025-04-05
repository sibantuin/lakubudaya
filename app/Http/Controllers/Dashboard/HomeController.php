<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // No action
    }

    public function index()
    {
        $data = [
            "articleData" => [
                [
                    "name" => "5 Kesenian Tradisional Indonesia yang Sempat Populer Namun Sekarang Terancam Punah",
                    "description" => "Era globalisasi memberi dampak baik pada modernisasi. Tapi, sayangnya memberi tekanan yang berat bagi tradisi. Salah satu yang menjadi korban adalah kesenian tradisional Indonesia. Beberapa kesenian tradisional Indonesia, sudah sangat jarang...",
                    "photo" => "pic-article-1.png",
                ],
                [
                    "name" => "Autentik! Ini Daftar 6 Kesenian dari Berbagai Daerah di Jawa Timur",
                    "description" => "Berbagai seni dan budaya yang unik dari Jawa Timur turut berkontribusi / menyumbang dalam kekayaan yang dimiliki oleh Indonesia. Kesenian daerah di Jawa Timur memiliki ciri khasnya masing-masing, bernuansa agama bahkan mistis juga...",
                    "photo" => "pic-article-2.png",
                ],
                [
                    "name" => "Pentingnya Melestarikan Budaya",
                    "description" => "Budaya merupakan suatu cara hidup yang berkembang dan dimiliki bersama oleh sebuah kelompok orang dan diwariskan dari generasi ke generasi. Oleh sebab itu, budaya sangat penting dan wajib dilestarikan serta dijaga agar diwariskan...",
                    "photo" => "pic-article-3.png",
                ],
            ]
        ];

        return view('dashboard.home', $data);
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function statistic()
    {
        return view('dashboard.statistic');
    }

    public function faq()
    {
        return view('dashboard.faq');
    }

    public function cart()
    {
        return view('dashboard.cart');
    }

    public function event()
    {
        $data = [
            "listData" => [
                [
                    "id" => "event-1",
                    "name" => "Pentas Besar Teater Rupo SMAN 9 Yogyakarta",
                    "location" => "Gedung Concert Hall Taman Budaya Yogyakarta",
                    "date" => "16 September 2023",
                    "photo" => "pic-event-1.jpg",
                    "htm" => "100.000",
                    "rate" => "4.9",
                    "duration" => "2 jam",
                ],
                [
                    "id" => "event-2",
                    "name" => "PENTAS THEATER ALTAR Lakon : Hamlet",
                    "location" => "Gedung Concert Hall Taman Budaya Yogyakarta",
                    "date" => "30 September 2023",
                    "photo" => "pic-event-2.jpg",
                    "htm" => "100.000",
                    "rate" => "4.9",
                    "duration" => "2 jam",
                ],
                [
                    "id" => "event-3",
                    "name" => "UKM Teater KOTAK PENTAS TUNGGAL dengan tema Laraning Lara",
                    "location" => "Aula Soetrisno Widjaja, Politeknik Negeri Jember",
                    "date" => "06 September 2023",
                    "photo" => "pic-event-3.jpg",
                    "htm" => "10.000",
                    "rate" => "4.9",
                    "duration" => "2 jam",
                ],
                [
                    "id" => "event-4",
                    "name" => "Pergelaran Wayang Purwa Lakon Gandawerdaya",
                    "location" => "nDalem Yudhonegaran (Jl. Ibu Ruswo No.33-47, Prawirodirjan, Kec. Gondomanan, Kota Yogyakarta)",
                    "date" => "27 Agustus 2023",
                    "photo" => "pic-event-4.jpg",
                    "htm" => "Gratis",
                    "rate" => "4.9",
                    "duration" => "2 jam",
                ],
                [
                    "id" => "event-5",
                    "name" => "Tlilir Art & Culture Festival 2023",
                    "location" => "Desa Tlilir, Kabupaten Temanggung, Jawa Tengah",
                    "date" => "1-3 September 2023",
                    "photo" => "pic-event-5.jpg",
                    "htm" => "100.000",
                    "rate" => "4.9",
                    "duration" => "2 jam",
                ],
                [
                    "id" => "event-6",
                    "name" => "THE 23rd CANISIUS EDUCATION FAIR",
                    "location" => "at @kolesekanisius,  Menteng Raya 64",
                    "date" => "2-3 September 2023",
                    "photo" => "pic-event-6.jpg",
                    "htm" => "100.000",
                    "rate" => "4.9",
                    "duration" => "2 jam",
                ],
            ]
        ];

        return view('dashboard.event', $data);
    }

    public function eventAdmin()
    {
        return view('dashboard.event-admin');
    }

    public function eventTalent()
    {
        return view('dashboard.event-talent');
    }

    public function eventDetail($id)
    {
        $data = [
            "listData" => [
                [
                    "id" => "event-1",
                    "name" => "Pentas Besar Teater Rupo SMAN 9 Yogyakarta",
                    "location" => "Gedung Concert Hall Taman Budaya Yogyakarta",
                    "date" => "16 September 2023",
                    "photo" => "pic-event-1.jpg",
                    "htm" => "100.000",
                    "rate" => "4.9",
                    "duration" => "2 jam",
                ],
                [
                    "id" => "event-2",
                    "name" => "PENTAS THEATER ALTAR Lakon : Hamlet",
                    "location" => "Gedung Concert Hall Taman Budaya Yogyakarta",
                    "date" => "30 September 2023",
                    "photo" => "pic-event-2.jpg",
                    "htm" => "100.000",
                    "rate" => "4.9",
                    "duration" => "2 jam",
                ],
                [
                    "id" => "event-3",
                    "name" => "UKM Teater KOTAK PENTAS TUNGGAL dengan tema Laraning Lara",
                    "location" => "Aula Soetrisno Widjaja, Politeknik Negeri Jember",
                    "date" => "06 September 2023",
                    "photo" => "pic-event-3.jpg",
                    "htm" => "10.000",
                    "rate" => "4.9",
                    "duration" => "2 jam",
                ],
                [
                    "id" => "event-4",
                    "name" => "Pergelaran Wayang Purwa Lakon Gandawerdaya",
                    "location" => "nDalem Yudhonegaran (Jl. Ibu Ruswo No.33-47, Prawirodirjan, Kec. Gondomanan, Kota Yogyakarta)",
                    "date" => "27 Agustus 2023",
                    "photo" => "pic-event-4.jpg",
                    "htm" => "Gratis",
                    "rate" => "4.9",
                    "duration" => "2 jam",
                ],
                [
                    "id" => "event-5",
                    "name" => "Tlilir Art & Culture Festival 2023",
                    "location" => "Desa Tlilir, Kabupaten Temanggung, Jawa Tengah",
                    "date" => "1-3 September 2023",
                    "photo" => "pic-event-5.jpg",
                    "htm" => "100.000",
                    "rate" => "4.9",
                    "duration" => "2 jam",
                ],
                [
                    "id" => "event-6",
                    "name" => "THE 23rd CANISIUS EDUCATION FAIR",
                    "location" => "at @kolesekanisius,  Menteng Raya 64",
                    "date" => "2-3 September 2023",
                    "photo" => "pic-event-6.jpg",
                    "htm" => "100.000",
                    "rate" => "4.9",
                    "duration" => "2 jam",
                ],
            ]
        ];

        $eventData = [];
        foreach ($data['listData'] as $item)
        {
            if ($item['id'] == $id)
            {
                $eventData = $item;
            }
        }

        return view('dashboard.event-detail', $eventData);
    }

    public function eventDetailView($id)
    {
        return view('dashboard.event-detail-view');
    }

    public function invite()
    {
        $data = [
            "listData" => [
                [
                    "id" => "invitation-1",
                    "name" => "Pencak Silat H. Ridwan Condet (Pencak silat, palang pintu, seni tari, dan ondel-ondel)",
                    "location" => "Condet, Batu Ampar I No. 19 Rt. 002 Rw. 06, Kec. Kramat Jati, Kota Jakarta Timur, DKI Jakarta",
                    "owner" => "Irwansyah",
                    "photo" => "pic-invite-1.jpg",
                    "htm" => "750.000",
                    "rate" => "4.9",
                    "contact" => "089606033617",
                    "description" => "Pencak Silat adalah seni bela diri tradisional Indonesia yang mencakup berbagai teknik, Ondel-Ondel adalah boneka besar yang digunakan dalam pertunjukan tradisional Betawi, sementara Palang Pintu Betawi adalah tradisi pernikahan khas masyarakat Betawi di Jakarta yang melibatkan pintu hiasan sebagai simbol permintaan restu dalam upacara pernikahan. Semua tiga unsur budaya ini memiliki peran penting dalam mempertahankan warisan budaya Betawi.",
                ],
                [
                    "id" => "invitation-2",
                    "name" => "Jaipong Kharisma Asih (Tari Jaipong)",
                    "location" => "Jl. Ibrahim Adji Gg. Kasturi Ii RT. 04 RW. 10 Bandung Jawa Barat",
                    "owner" => "Asep Rohman",
                    "photo" => "pic-invite-2.jpg",
                    "htm" => "750.000",
                    "rate" => "4.9",
                    "contact" => "083822198880",
                    "description" => "Jaipongan adalah seni tari dan musik yang lahir dari kreativitas H. Suanda di Karawang sekitar tahun 1976. Ini menggabungkan berbagai elemen seni tradisional Karawang seperti pencak silat, wayang golek, topeng banjet, ketuk tilu, dan lainnya. Jaipongan pesat pertumbuhannya di Karawang, di mana rekaman awalnya disebarkan secara swadaya oleh H. Suanda menggunakan kaset rekaman tanpa label. Jaipongan menjadi populer dan dianggap sebagai fenomena baru dalam seni budaya Karawang, khususnya dalam seni pertunjukan hiburan rakyat. Gugum Gumbira membawa tarian ini ke Bandung pada tahun 1960-an, mengembangkannya dari kesenian rakyat seperti Ketuk Tilu, Kliningan, dan Ronggeng. Jaipongan menjadi terkenal di seluruh Indonesia dan memberikan kontribusi besar pada revitalisasi seni tari rakyat di Jawa Barat.",
                ],
                [
                    "id" => "invitation-3",
                    "name" => "Sanggar Kinnara Kinnari Borobudur",
                    "location" => "Tingal Kulon RT.02 RW.02 Wanurejo, Borobudur, Kabupaten Magelang",
                    "owner" => "Eko Sunyoto",
                    "photo" => "pic-invite-3.jpg",
                    "htm" => "750.000",
                    "rate" => "4.9",
                    "contact" => "081392720597",
                    "description" => "Kesenian budaya Magelang, kota di Jawa Tengah, mencakup berbagai bentuk seni tradisional yang unik, termasuk Tari Topeng Ireng yang dinamis dan ekspresif, gamelan yang mempesona, pertunjukan Wayang Kulit dengan cerita epik, dan beragam kesenian rakyat lainnya seperti Tari Jatilan dan Kreasi Barongan. Upacara adat juga memainkan peran penting dalam budaya Magelang, menggabungkan unsur-unsur seni dan budaya dalam berbagai konteks seperti pernikahan, kematian, dan upacara keagamaan. Semua ini mencerminkan kekayaan budaya dan warisan Jawa Tengah yang mendalam di Magelang.",
                ],
                [
                    "id" => "invitation-4",
                    "name" => "Jathilan Krido Laras",
                    "location" => "Sukomoyo Jatimulyo Girimulyo Kulonprogo",
                    "owner" => "-",
                    "photo" => "pic-invite-4.jpg",
                    "htm" => "750.000",
                    "rate" => "4.9",
                    "contact" => "08158855471",
                    "description" => "Sanggar Jathilan Krido Laras adalah kelompok seni Jathilan yang tampil energik dengan penari mengenakan kostum kuda atau kuda lumping, melompat-lompat, dan menari di atas pecahan kaca. Musik live dengan alat-alat tradisional seperti kendang, gong, rebab, dan seruling mendampingi penampilan mereka. Sanggar ini berdedikasi pada pelestarian dan pengembangan kesenian budaya Jawa ini.",
                ],
                [
                    "id" => "invitation-5",
                    "name" => "SSB Kahanjak Huang",
                    "location" => "Jl. Perkutut No. 51 Palangka Raya, Kalimantan Tengah",
                    "owner" => "Marini, S.E.",
                    "photo" => "pic-invite-5.jpg",
                    "htm" => "750.000",
                    "rate" => "4.9",
                    "contact" => "085249115115",
                    "description" => "Sanggar Seni Dan Budaya Kahanjak Huang Memelihara dan mengembangkan Seni Dan Budaya daerah Dayak Kalimantan Tengah dalam rangka mempertahankan eksistensi Budaya Lokal sebagai bagian dari keragaman Budaya Nasional Indonesia",
                ],
                [
                    "id" => "invitation-6",
                    "name" => "Sanggar Seni Budaya Tut Wuri Handayani",
                    "location" => "Jalan Sangga Buana II No.494, RT.03, RW.13, Kel.Palangka, Kec.Jekan Raya, Palangka Raya 73112",
                    "owner" => "Ridwansyah, S.Pd",
                    "photo" => "pic-invite-6.jpg",
                    "htm" => "750.000",
                    "rate" => "4.9",
                    "contact" => "081349590919",
                    "description" => "Sanggar Tut Wuri Handayani di Kalimantan adalah kelompok seni dan budaya yang berfokus pada melestarikan dan mempromosikan warisan budaya Kalimantan, termasuk budaya Dayak dan Melayu. Mereka terlibat dalam pertunjukan seni tradisional, musik etnik, dan berbagai acara budaya untuk memperkenalkan dan melestarikan budaya Kalimantan yang beragam.",
                ],
            ]
        ];

        return view('dashboard.invite', $data);
    }

    public function inviteForm($id)
    {
        $data = [
            "listData" => [
                [
                    "id" => "invitation-1",
                    "name" => "Pencak Silat H. Ridwan Condet (Pencak silat, palang pintu, seni tari, dan ondel-ondel)",
                    "location" => "Condet, Batu Ampar I No. 19 Rt. 002 Rw. 06, Kec. Kramat Jati, Kota Jakarta Timur, DKI Jakarta",
                    "owner" => "Irwansyah",
                    "photo" => "pic-invite-1.jpg",
                    "htm" => "750.000",
                    "rate" => "4.9",
                    "contact" => "089606033617",
                    "description" => "Pencak Silat adalah seni bela diri tradisional Indonesia yang mencakup berbagai teknik, Ondel-Ondel adalah boneka besar yang digunakan dalam pertunjukan tradisional Betawi, sementara Palang Pintu Betawi adalah tradisi pernikahan khas masyarakat Betawi di Jakarta yang melibatkan pintu hiasan sebagai simbol permintaan restu dalam upacara pernikahan. Semua tiga unsur budaya ini memiliki peran penting dalam mempertahankan warisan budaya Betawi.",
                ],
                [
                    "id" => "invitation-2",
                    "name" => "Jaipong Kharisma Asih (Tari Jaipong)",
                    "location" => "Jl. Ibrahim Adji Gg. Kasturi Ii RT. 04 RW. 10 Bandung Jawa Barat",
                    "owner" => "Asep Rohman",
                    "photo" => "pic-invite-2.jpg",
                    "htm" => "750.000",
                    "rate" => "4.9",
                    "contact" => "083822198880",
                    "description" => "Jaipongan adalah seni tari dan musik yang lahir dari kreativitas H. Suanda di Karawang sekitar tahun 1976. Ini menggabungkan berbagai elemen seni tradisional Karawang seperti pencak silat, wayang golek, topeng banjet, ketuk tilu, dan lainnya. Jaipongan pesat pertumbuhannya di Karawang, di mana rekaman awalnya disebarkan secara swadaya oleh H. Suanda menggunakan kaset rekaman tanpa label. Jaipongan menjadi populer dan dianggap sebagai fenomena baru dalam seni budaya Karawang, khususnya dalam seni pertunjukan hiburan rakyat. Gugum Gumbira membawa tarian ini ke Bandung pada tahun 1960-an, mengembangkannya dari kesenian rakyat seperti Ketuk Tilu, Kliningan, dan Ronggeng. Jaipongan menjadi terkenal di seluruh Indonesia dan memberikan kontribusi besar pada revitalisasi seni tari rakyat di Jawa Barat.",
                ],
                [
                    "id" => "invitation-3",
                    "name" => "Sanggar Kinnara Kinnari Borobudur",
                    "location" => "Tingal Kulon RT.02 RW.02 Wanurejo, Borobudur, Kabupaten Magelang",
                    "owner" => "Eko Sunyoto",
                    "photo" => "pic-invite-3.jpg",
                    "htm" => "750.000",
                    "rate" => "4.9",
                    "contact" => "081392720597",
                    "description" => "Kesenian budaya Magelang, kota di Jawa Tengah, mencakup berbagai bentuk seni tradisional yang unik, termasuk Tari Topeng Ireng yang dinamis dan ekspresif, gamelan yang mempesona, pertunjukan Wayang Kulit dengan cerita epik, dan beragam kesenian rakyat lainnya seperti Tari Jatilan dan Kreasi Barongan. Upacara adat juga memainkan peran penting dalam budaya Magelang, menggabungkan unsur-unsur seni dan budaya dalam berbagai konteks seperti pernikahan, kematian, dan upacara keagamaan. Semua ini mencerminkan kekayaan budaya dan warisan Jawa Tengah yang mendalam di Magelang.",
                ],
                [
                    "id" => "invitation-4",
                    "name" => "Jathilan Krido Laras",
                    "location" => "Sukomoyo Jatimulyo Girimulyo Kulonprogo",
                    "owner" => "-",
                    "photo" => "pic-invite-4.jpg",
                    "htm" => "750.000",
                    "rate" => "4.9",
                    "contact" => "08158855471",
                    "description" => "Sanggar Jathilan Krido Laras adalah kelompok seni Jathilan yang tampil energik dengan penari mengenakan kostum kuda atau kuda lumping, melompat-lompat, dan menari di atas pecahan kaca. Musik live dengan alat-alat tradisional seperti kendang, gong, rebab, dan seruling mendampingi penampilan mereka. Sanggar ini berdedikasi pada pelestarian dan pengembangan kesenian budaya Jawa ini.",
                ],
                [
                    "id" => "invitation-5",
                    "name" => "SSB Kahanjak Huang",
                    "location" => "Jl. Perkutut No. 51 Palangka Raya, Kalimantan Tengah",
                    "owner" => "Marini, S.E.",
                    "photo" => "pic-invite-5.jpg",
                    "htm" => "750.000",
                    "rate" => "4.9",
                    "contact" => "085249115115",
                    "description" => "Sanggar Seni Dan Budaya Kahanjak Huang Memelihara dan mengembangkan Seni Dan Budaya daerah Dayak Kalimantan Tengah dalam rangka mempertahankan eksistensi Budaya Lokal sebagai bagian dari keragaman Budaya Nasional Indonesia",
                ],
                [
                    "id" => "invitation-6",
                    "name" => "Sanggar Seni Budaya Tut Wuri Handayani",
                    "location" => "Jalan Sangga Buana II No.494, RT.03, RW.13, Kel.Palangka, Kec.Jekan Raya, Palangka Raya 73112",
                    "owner" => "Ridwansyah, S.Pd",
                    "photo" => "pic-invite-6.jpg",
                    "htm" => "750.000",
                    "rate" => "4.9",
                    "contact" => "081349590919",
                    "description" => "Sanggar Tut Wuri Handayani di Kalimantan adalah kelompok seni dan budaya yang berfokus pada melestarikan dan mempromosikan warisan budaya Kalimantan, termasuk budaya Dayak dan Melayu. Mereka terlibat dalam pertunjukan seni tradisional, musik etnik, dan berbagai acara budaya untuk memperkenalkan dan melestarikan budaya Kalimantan yang beragam.",
                ],
            ]
        ];

        $inviteData = [];
        foreach ($data['listData'] as $item)
        {
            if ($item['id'] == $id)
            {
                $inviteData = $item;
            }
        }

        return view('dashboard.invite-form', $inviteData);
    }

    public function course()
    {
        $data = [
            "listData" => [
                [
                    "name" => "Mila Art Dance School",
                    "location" => "Jalan Damai No. 8, Tambakan, Sinduharjo, Ngaglik, Sleman, Yogyakarta 55581",
                    "owner" => "Mila",
                    "contact" => "082137666606",
                    "description" => "Mila Art Dance School adalah sebuah sekolah tari yang terletak di Yogyakarta, Indonesia. Sekolah ini dikenal karena memberikan pelatihan dalam berbagai jenis tari tradisional dan kontemporer, serta seni pertunjukan yang terkait. Mereka biasanya menawarkan beragam program pelatihan dan kelas untuk semua tingkat usia dan tingkat keahlian, dari pemula hingga tingkat lanjutan. Selain itu, Mila Art Dance School sering terlibat dalam pertunjukan seni, festival, dan kompetisi tari baik di tingkat lokal maupun nasional. Mereka berperan dalam mempromosikan warisan budaya Indonesia dan seni pertunjukan di wilayah Yogyakarta, serta memberikan kesempatan kepada siswa-siswa mereka untuk berkembang dalam dunia tari dan seni.",
                    "photo" => "pic-course-1.jpg",
                    "htm" => "600.000",
                    "rate" => "4.8",
                ],
                [
                    "name" => "Sanggar Seni Betawi Mamit Cs (Ondel ondel, gambang kromong, palang pintu, tanjidor dll)",
                    "location" => "Jalan. Kramat Pulo No. 64C Rt. 010 Rw. 003, Jakarta",
                    "owner" => "Taufik Hidayat",
                    "contact" => "085210393337",
                    "description" => "Sanggar Seni Betawi Mamit Cs Berdiri Pada tahun 30 Desember 1984, yang di pimpin Oleh Alm. Babe Abdul Hamit Bin Mas’ud. Awal mulanya berdiri Sanggar Seni Betawi Mamit Cs Dari 5 Sekawan Yaitu Alm. Babe Abdul Hamid, Alm. Babe andi, Alm. Kong Agus, Kong Amit dan Kong Maman. Sebelum berdiri ya nama Sanggar Seni Betawi Mamit Cs yaitu Sanggar 5 Sekawan Dan Sekarang di Ganti dengan Sanggar Seni Betawi Mamit Cs sampai saat ini.",
                    "photo" => "pic-course-2.jpg",
                    "htm" => "700.000",
                    "rate" => "4.8",
                ],
                [
                    "name" => "Kampung Seni Yudha Asri (Rampak Bedug, Bendrong Lesung, dll)",
                    "location" => "Kp. Yudha, Desa Mander, Kec. Bandung-Cikande, Serang Timur (Perbatasan Tangerang) , Banten.",
                    "owner" => "Irfan Murdani",
                    "contact" => "087871527369",
                    "description" => "Kampung Seni Yudha Asri di Banten adalah pusat seni tradisional yang melayani berbagai pertunjukan seni di wilayah Banten, Jakarta (Jabodetabek), dan sekitarnya. Mereka memainkan beragam seni tradisional seperti Rampak Bedug, Bendrong Lesung, Pencak Silat, Gamelan, dan kolaborasi seni tradisional-modern. Kampung Seni ini berperan penting dalam melestarikan dan mempromosikan kekayaan seni budaya Banten, mempersembahkan pertunjukan tari penyambutan, serta berbagai seni tradisional lainnya. Dengan demikian, kampung seni ini menjadi penjaga kearifan lokal Banten yang penting dan diakui.",
                    "photo" => "pic-course-3.jpg",
                    "htm" => "650.000",
                    "rate" => "4.8",
                ],
                [
                    "name" => "Sri Padma Studio",
                    "location" => "Jalan Yudistira Banjar Kalah Peliatan, Ubud, Gianyar.",
                    "owner" => "Kadek Ferry & Mayumi",
                    "contact" => "-",
                    "description" => "Sri Padma Group, didirikan sejak 2011 di Ubud, Bali, telah berperan penting dalam mengajar tari Bali tradisional, terutama kepada anak-anak. Mereka juga mendirikan Sanggar Tunas Maragawi untuk seni di komunitas Banjar mereka. Fokus utama Sri Padma adalah melestarikan tarian Bali klasik sebagai identitas budaya yang harus diwariskan ke generasi muda. Mereka berusaha untuk memberikan keindahan dan manfaat bagi masyarakat serta melestarikan budaya Bali. Sri Padma Group telah menciptakan berbagai karya seni dan mendapat pengakuan, termasuk kolaborasi dengan seni Jepang tradisional, dan penciptaan musik gamelan untuk berbagai pertunjukan.",
                    "photo" => "pic-course-4.jpg",
                    "htm" => "550.000",
                    "rate" => "4.8",
                ],
                [
                    "name" => "Sanggar Seni Betang Batarung",
                    "location" => "Jl. Ebony No. 10",
                    "owner" => "Tris sofia wartina",
                    "contact" => "085249277656",
                    "description" => "Sanggar Betang Betarung melayani penampilan tari-tarian tradisional Kalimantan Tengah yang diiringi dengan lantunan musik tradisional khas Dayak dalam berbagai acara, baik itu acara adat, resepsi pernikahan, ceremonial, penyambutan tamu, dll.",
                    "photo" => "pic-course-5.jpg",
                    "htm" => "540.000",
                    "rate" => "4.8",
                ],
                [
                    "name" => "Sanggar Seni dan Budaya Darung Tingang",
                    "location" => "Jl.Lamtoro Gung No.46 B.",
                    "owner" => "Siti Habibah S.Pd",
                    "contact" => "085249236046",
                    "description" => "Sanggar Seni dan Budaya Darung Tingang adalah kelompok seni dan budaya di Kalimantan, Indonesia, yang berfokus pada pelestarian dan promosi warisan budaya suku Dayak. Mereka aktif dalam berbagai seni tradisional seperti tarian, musik, dan pertunjukan teater, serta berpartisipasi dalam acara budaya dan festival untuk memperkenalkan budaya Dayak kepada masyarakat luas. Sanggar ini berperan penting dalam menjaga kearifan lokal Kalimantan dan mempromosikan seni tradisional suku Dayak sebagai bagian tak terpisahkan dari identitas budaya Kalimantan.",
                    "photo" => "pic-course-6.jpg",
                    "htm" => "900.000",
                    "rate" => "4.8",
                ]
            ]
        ];

        return view('dashboard.course', $data);
    }

    public function invitation()
    {
        return view('dashboard.invitation');
    }

    public function cartPayment()
    {
        return view('dashboard.cart-payment');
    }

    public function cartPaymentConfirmation()
    {
        return view('dashboard.cart-payment-confirmation');
    }
}
