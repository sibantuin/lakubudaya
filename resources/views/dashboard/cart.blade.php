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
                    <li class="breadcrumb-item active">Keranjang</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Yuk segera selesaikan pesanan Anda</h5>

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
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="minus" type="button" class="btn btn-primary">
                                                    <i class="bi bi-dash-circle-fill"></i>
                                                </button>
                                                <input id="quantity" type="text" class="form-control text-center" style="border-radius: 0px !important; width: 50px !important" value="1">
                                                <button id="plus" type="button" class="btn btn-primary">
                                                    <i class="bi bi-plus-circle-fill"></i>
                                                </button>
                                            </div>
                                        </td>
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
                                        E-tiket akan dikirim ke alamat email Anda, harap pastikan email Anda alamatnya benar.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <form class="row g-3">
                                        <div class="col-12 col-md-6">
                                            <label class="form-label">Nama Depan</label>
                                            <input type="text" class="form-control" id="nama-penerima" placeholder="Masukan nama depan">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label">Nama Belakang</label>
                                            <input type="text" class="form-control" id="nama-penerima" placeholder="Masukan nama belakang">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" id="email" placeholder="Masukan email">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="form-label">Konfirmasi Email</label>
                                            <input type="text" class="form-control" id="email" placeholder="Masukan konfirmasi email">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Nomor HP</label>
                                            <input type="text" class="form-control" id="no-hp" placeholder="Masukan no HP">
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <label class="form-label">Ongkos Akomodasi</label>
                                            <select id="inputState" class="form-select">
                                                <option selected="">- Pilih -</option>
                                                <option>Free Delivery</option>
                                                <option>Sehari Sampai</option>
                                            </select>
                                        </div> --}}
                                    </form>
                                </div>

                                <div class="col-12 col-md-6 mt-2 mt-md-0">

                                    <div class="col-md-12">
                                        <label class="form-label">Voucher</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Masukkan Voucher" aria-describedby="basic-addon2">
                                            <span class="input-group-text btn btn-primary" id="gunakan-voucher">Pakai</span>
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
                                        <a href="{{ route('cart-payment') }}" class="input-group-text btn btn-primary" id="lanjut-pembayaran">
                                            <i class="bi bi-bag-check-fill pr-2"></i>
                                            <span class="ml-2">Lanjutkan</span>
                                        </a>
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
