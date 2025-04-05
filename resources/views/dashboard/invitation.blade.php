@extends('dashboard.layouts.utama')

@section('css')
    <style>

    </style>
@endsection

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Undangan</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Undangan</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Ada yang tertarik dengan penampilan Anda! Yuk terima undangan untuk tampil diseluruh Indonesia!</h5>

                            <table class="table table-hover" id="tableAdditional" style="width: 100% !important; white-space: nowrap !important;">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Acara</th>
                                        <th scope="col">Lokasi</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @for ($i = 0; $i < 1; $i++)
                                        <tr>
                                            <td>Hari Setiaji</td>
                                            <td>Festival Kesenian Yogyakarta</td>
                                            <td>Yogyakarta</td>
                                            <td>
                                                {{-- <button type="button" class="btn btn-primary mr-2">
                                                    <i class="bi bi-info-circle-fill"></i> Detail
                                                </button> --}}
                                                <button type="button" class="btn btn-primary mr-2">
                                                    <i class="bi bi-check-circle-fill"></i> Terima
                                                </button>
                                                <button type="button" class="btn btn-primary">
                                                    <i class="bi bi-x-circle-fill"></i> Tolak
                                                </button>
                                            </td>
                                        </tr>
                                    @endfor

                                </tbody>
                            </table>

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
