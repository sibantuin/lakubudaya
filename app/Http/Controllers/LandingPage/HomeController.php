<?php

namespace App\Http\Controllers\LandingPage;

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
            ],
            "eventData" => [
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
            ],
            "recomendationEventData" => [
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
            ],
        ];

        return view('landingpages.home', $data);
    }
}
