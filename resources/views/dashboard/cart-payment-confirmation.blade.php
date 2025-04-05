@extends('dashboard.layouts.utama')

@section('css')
    <style>

    </style>
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Keranjang</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('cart') }}">Keranjang</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('cart-payment') }}">Metode Pembayaran</a></li>
                    <li class="breadcrumb-item active">Konfirmasi Pesanan</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Mohon selesaikan pembayaran Anda</h5>

                            <table class="table table-hover" id="tableAdditional" style="width: 100% !important;">
                                <thead style=" white-space: nowrap !important;">
                                    <tr>
                                        <th scope="col">Produk</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="card mb-3" style="background: none !important">
                                                <div class="row g-0">
                                                    <div class="col-md-2">
                                                        <img src="{{ asset('assets/img/dashboard/card-image-1.png') }}" class="img-fluid rounded-start" style="width: 150px !important">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="card-body py-2 px-0 px-md-2">
                                                            <h5 class="card-title py-0 px-0">Tari Kecak Bali</h5>
                                                            <p class="card-text">20 Oktober 2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>1</td>
                                        <td>Rp 150.000</td>
                                        <td>Rp 150.000</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Detail Pesanan Anda</h5>

                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <i class="bi bi-info-circle-fill me-1"></i>
                                        E-tiket akan dikirim ke alamat email Anda jika pembayaran sudah diselesaikan
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <form class="row g-3">
                                        <div class="col-12 col-md-6">
                                            <label class="form-label">Nama Depan</label>
                                            <input type="text" class="form-control" id="nama-penerima" value="Raihan" disabled>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label">Nama Belakang</label>
                                            <input type="text" class="form-control" id="nama-penerima" value="Rifaldi" disabled>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" id="email" value="raihanrifaldi@gmail.com" disabled>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label">Konfirmasi Email</label>
                                            <input type="text" class="form-control" id="email" value="raihanrifaldi@gmail.com" disabled>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Nomor HP</label>
                                            <input type="text" class="form-control" id="no-hp" value="08123465678" disabled>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-12 col-md-6 mt-2 mt-md-0">

                                    <div class="col-12">
                                        <label class="form-label mb-0">Metode Pembayaran</label>
                                        <div class="accordion accordion-flush" id="faq-group">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <div class="d-flex justify-content-between align-items-center mb-2 accordion-button collapsed" data-bs-target="#faq-1" type="button" data-bs-toggle="collapse">
                                                        <img class="pl-3" src="{{ asset('assets/img/dashboard/payment-7.png') }}" style="height: 20px !important">
                                                    </div>
                                                </h2>
                                                <div id="faq-1" class="accordion-collapse collapse" data-bs-parent="#faq-group">
                                                    <div class="accordion-body">
                                                        <b>Cara membayar</b>
                                                        <ol class="pl-0">
                                                            <li>Isi nomor ponsel akun ShopeePay Anda</li>
                                                            <li>Klik kirim notifikasi ShopeePay</li>
                                                            <li>Buka notifikasi dari shopeePay di ponsel Anda</li>
                                                            <li>Masukkan PIN Anda</li>
                                                            <li>Klik bayar</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="mb-0">Sub Total</h6>
                                        <h6 class="mb-0">Rp 150.000</h6>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="mb-0">Biaya Layanan</h6>
                                        <h6 class="mb-0">Rp 5.000</h6>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="mb-0">Pajak</h6>
                                        <h6 class="mb-0">Rp 16.500</h6>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h6 class="mb-0">Diskon Voucher</h6>
                                        <h6 class="mb-0">- Rp 0</h6>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h5 class="mb-0">Total</h5>
                                        <h6 class="mb-0"><span class="text-danger">Rp 171.500</span></h6>
                                    </div>

                                    <br>

                                    <div class="d-flex justify-content-center align-items-center mb-2">
                                        <button type="button" class="input-group-text btn btn-primary" id="konfirmasi-pembayaran" data-bs-toggle="modal" data-bs-target="#paymentSuccess">
                                            <i class="bi bi-check-all pr-2"></i>
                                            <span class="ml-2">Konfirmasi Pembayaran</span>
                                        </button>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <div class="modal fade" id="paymentSuccess" tabindex="-1" style="display: none;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="col-12 d-flex justify-content-center">
                        <img src="{{ asset('assets/img/dashboard/payment-success.png') }}">
                    </div>

                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        <i class="bi bi-check-circle mr-1"></i>
                        Pembayaran Berhasil!
                    </div>

                    <div class="col-12 mb-5">
                        <h4>Ticket telah dikirim ke</h4>
                        <h6>raihanrifaldi@gmail.com</h6>
                    </div>

                    <div class="col-12 mb-2">
                        <span>Belum menerima tiket?</span>
                    </div>
                    <button type="button" class="btn btn-primary">Kirim Ulang E-Ticket</button>
                </div>
                <div class="modal-footer">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-6 text-center">
                            <i class="bi bi-telephone-fill m-1"></i>
                            08123456789
                        </div>
                        <div class="col-6 text-center">
                            <i class="bi bi-envelope-at-fill m-1"></i>
                            lakubudaya@gmail.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            $('#tableAdditional').DataTable({
                "aLengthMenu": [[10, 15, 20, 25, 50, 75, 100, -1], [10, 15, 20, 25, 50, 75, 100, "All"]],
                "paging": 5,
                "sScrollX": "100%",
                "language":
                {
                    "zeroRecords": "Data tidak ditemukan.",
                    "infoEmpty": "Data tidak ditemukan",
                    "show": "Cari data",
                    "search": "Cari data",
                    "sLengthMenu": "Menampilkan _MENU_ data",
                    "info": "Halaman <b>_PAGE_</b>",
                    "paginate":
                    {
                        "previous": "<<",
                        "next": ">>"
                    }
                },
                "paging": false,
                "searching": false,
                "info": false
            })

            $('#minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});

			$('#plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
        });
    </script>
@endsection
