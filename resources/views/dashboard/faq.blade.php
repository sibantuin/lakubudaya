@extends('dashboard.layouts.utama')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Bantuan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Bantuan</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pertanyaan yang sering ditanyakan</h5>

                            <div class="accordion accordion-flush" id="faq-group">

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faq-1" type="button" data-bs-toggle="collapse">
                                            Apakah tiket dapat direfund?
                                        </button>
                                    </h2>
                                    <div id="faq-1" class="accordion-collapse collapse" data-bs-parent="#faq-group">
                                        <div class="accordion-body">
                                            Tiket yang telah dibeli tidak dapat direfund, jika Anda tidak bisa bisa menonton pertunjukan maka tiket Anda akan dianggap gugur.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faq-2" type="button" data-bs-toggle="collapse">
                                            Apakah tiket dapat dipindah tangankan?
                                        </button>
                                    </h2>
                                    <div id="faq-2" class="accordion-collapse collapse" data-bs-parent="#faq-group">
                                        <div class="accordion-body">
                                            Boleh, tiket dapat dipergunakan untuk orang lain jika Anda berhalangan hadir untuk menonton pertunjukkan
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faq-3" type="button" data-bs-toggle="collapse">
                                            Bagaimana cara membeli tiket?
                                        </button>
                                    </h2>
                                    <div id="faq-3" class="accordion-collapse collapse" data-bs-parent="#faq-group">
                                        <div class="accordion-body">
                                            Anda dapat memilih pertunjukan terlebih dahulu, kemudian ikuti langkah hingga selesai
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faq-4" type="button" data-bs-toggle="collapse">
                                            Bagaimana jika saya mengalami kendala pada akun saya?
                                        </button>
                                    </h2>
                                    <div id="faq-4" class="accordion-collapse collapse" data-bs-parent="#faq-group">
                                        <div class="accordion-body">
                                            Anda dapat menghubungi customer service kami melalui nomor berikut 08123456789
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faq-5" type="button" data-bs-toggle="collapse">
                                            Apakah ada penukaran tiket?
                                        </button>
                                    </h2>
                                    <div id="faq-5" class="accordion-collapse collapse" data-bs-parent="#faq-group">
                                        <div class="accordion-body">
                                            Kamu tidak perlu menukar tiket. Setelah melakukan scan e-voucher, kamu bisa langsung mendapatkan wristband. Jangan lupa untuk menunjukkan KTP kamu saat melakukan scan e-voucher.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faq-6" type="button" data-bs-toggle="collapse">
                                            Apa saja yang harus dipersiapkan ketika melakukan scan e-voucher?
                                        </button>
                                    </h2>
                                    <div id="faq-6" class="accordion-collapse collapse" data-bs-parent="#faq-group">
                                        <div class="accordion-body">
                                            Siapkan e-voucher dan KTP sesuai dengan nama pembeli di e-voucher kamu.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faq-7" type="button" data-bs-toggle="collapse">
                                            Apakah KTP yang dibawa harus asli?
                                        </button>
                                    </h2>
                                    <div id="faq-7" class="accordion-collapse collapse" data-bs-parent="#faq-group">
                                        <div class="accordion-body">
                                            Tidak harus asli. Kamu boleh membawa soft copy atau fotokopi-nya saja. Pastikan nama di KTP sama dengan nama yang tertera di e-voucher.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faq-8" type="button" data-bs-toggle="collapse">
                                            Bagaimana cara membuat event di Lakubudaya?
                                        </button>
                                    </h2>
                                    <div id="faq-8" class="accordion-collapse collapse" data-bs-parent="#faq-group">
                                        <div class="accordion-body">
                                            Kunjungi lakubudaya.com/buat-event. Isi formulir dengan lengkap, mulai dari upload banner/poster, nama organizer, nama event, hingga jenis tiket. Artikel terkait: di sini.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-target="#faq-9" type="button" data-bs-toggle="collapse">
                                            Berapa biaya yang akan dikenakan di setiap penjualan tiket event di Lakubudaya?
                                        </button>
                                    </h2>
                                    <div id="faq-9" class="accordion-collapse collapse" data-bs-parent="#faq-group">
                                        <div class="accordion-body">
                                            Biaya yang dikenakan bergantung pada metode pembayaran oleh pembeli tiket event kamu. Jika pembeli tiket menggunakan channel pembayaran GoPay dan Credit Card, kamu akan dikenakan LOKET Service Fee sebesar: 3.5% * total nominal transaksi. Jika pembeli tiket menggunakan channel pembayaran selain GoPay dan Credit Card (BCA Virtual Account, Permata Virtual Account, dan Alfamart) kamu akan dikenakan LOKET Service Fee sebesar: (3.5% * total kuantitas tiket * harga tiket) + (Rp3.000/transaksi). Jika pembeli tiket membeli dari situs partner, kamu akan dikenakan LOKET Service Fee sebesar: 5% * total nominal transaksi.
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>
@endsection

@section('javascript')
    <script>

    </script>
@endsection
