@extends('dashboard.layouts.utama')

@section('css')
    <style>
        .card-input-element {
            display: none;
        }

        .card-input {
            margin: 10px;
            padding: 0px;
        }

        .card-input-element:checked + .card-input {
            box-shadow: 0 0 1px 1px #2ecc71;
        }
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
                    <li class="breadcrumb-item active">Metode Pembayaran</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Pilih metode pembayaran yang Anda inginkan</h5>

                            <h6 class="card-title py-0">Kartu Kredit</h6>
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-payment fade show py-2 pr-2 d-flex align-items-center justify-content-between" role="alert">
                                        <span>
                                            <input type="radio" class="mr-2" name="payment-method">
                                            VISA / Master Card
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <h6 class="card-title py-0">Virtual Account</h6>
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-payment fade show py-2 pr-2 d-flex align-items-center justify-content-between" role="alert">
                                        <span>
                                            <input type="radio" class="mr-2" name="payment-method">
                                            BCA
                                        </span>
                                        <img class="text-right" src="{{ asset('assets/img/dashboard/payment-1.png') }}" style="height: 20px !important">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="alert alert-payment fade show py-2 pr-2 d-flex align-items-center justify-content-between" role="alert">
                                        <span>
                                            <input type="radio" class="mr-2" name="payment-method">
                                            BNI
                                        </span>
                                        <img class="text-right" src="{{ asset('assets/img/dashboard/payment-2.png') }}" style="height: 20px !important">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="alert alert-payment fade show py-2 pr-2 d-flex align-items-center justify-content-between" role="alert">
                                        <span>
                                            <input type="radio" class="mr-2" name="payment-method">
                                            Mandiri
                                        </span>
                                        <img class="text-right" src="{{ asset('assets/img/dashboard/payment-3.png') }}" style="height: 20px !important">
                                    </div>
                                </div>
                            </div>


                            <h6 class="card-title py-0">E-Wallet</h6>
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-payment fade show py-2 pr-2 d-flex align-items-center justify-content-between" role="alert">
                                        <span>
                                            <input type="radio" class="mr-2" name="payment-method">
                                            Gopay
                                        </span>
                                        <img class="text-right" src="{{ asset('assets/img/dashboard/payment-4.png') }}" style="height: 20px !important">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="alert alert-payment fade show py-2 pr-2 d-flex align-items-center justify-content-between" role="alert">
                                        <span>
                                            <input type="radio" class="mr-2" name="payment-method">
                                            OVO
                                        </span>
                                        <img class="text-right" src="{{ asset('assets/img/dashboard/payment-5.png') }}" style="height: 20px !important">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="alert alert-payment fade show py-2 pr-2 d-flex align-items-center justify-content-between" role="alert">
                                        <span>
                                            <input type="radio" class="mr-2" name="payment-method">
                                            LinkAja
                                        </span>
                                        <img class="text-right" src="{{ asset('assets/img/dashboard/payment-6.png') }}" style="height: 20px !important">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="alert alert-payment fade show py-2 pr-2 d-flex align-items-center justify-content-between" role="alert">
                                        <span>
                                            <input type="radio" class="mr-2" name="payment-method">
                                            Shopee Pay
                                        </span>
                                        <img class="text-right" src="{{ asset('assets/img/dashboard/payment-7.png') }}" style="height: 20px !important">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center align-items-center mb-2">
                                <a href="{{ route('cart-payment-confirmation') }}" class="input-group-text btn btn-primary" id="lanjut-pembayaran">
                                    <i class="bi bi-bag-check-fill pr-2"></i>
                                    <span class="ml-2">Lanjutkan</span>
                                </a>
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
