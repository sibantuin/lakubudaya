<div id="loginModal2" class="modal-style-2 modal">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-login">
        <div class="modal-content">

            <div class="modal-header p-0">
                <h4 class="modal-title">Selamat Datang Kembali</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <hr class="my-3">

            <div class="modal-body">

                <div class="row justify-conten-center align-items-center">

                    <div class="col-12 col-md-6">

                        <div class="row p-4 justify-content-center">
                            <img style="max-width: 350px !important" src="{{ asset('assets/img/landingpages/login.png') }}" alt="">
                        </div>

                        <div class="row pb-4 justify-content-center">
                            <img style="width: 150px !important" src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                        </div>

                    </div>

                    <div class="col-12 col-md-6 justify-conten-center align-items-center">

                        <div class="mt-3 col-12 col-md-10 align-items-center">
                        {{-- <form action="{{ route('dashboard') }}" class="mt-3 col-12 col-md-10 align-items-center">
                            @csrf --}}

                            <div class="form-group">
                                <span style="color: #634730 !important; font-size: 14px !important">Nama Pengguna</span>
                                <div class="input-group align-items-center">
                                    <span class="input-group-addon p-0"><i class="fa fa-user" style="color: #634730 !important"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Masukan email atau nama pengguna">
                                </div>
                            </div>
                            <div class="form-group">
                                <span style="color: #634730 !important; font-size: 14px !important">Kata sandi</span>
                                <div class="input-group align-items-center">
                                    <span class="input-group-addon p-0"><i class="fa fa-lock" style="color: #634730 !important"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Masukan password" autocomplete="on">
                                </div>
                            </div>
                            <div class="row pl-1 pr-1">
                                <div class="col text-left">
                                    <label class="custom-control custom-checkbox pl-0">
                                        <div class="squaredThree">
                                            <input type="checkbox" name="optionsRadios" id="checkOther" value="other">
                                            <label for="checkOther"></label>
                                        </div>
                                        <span class="pl-3">&nbsp;Ingat saya</span>
                                    </label>
                                </div>
                                <div class="col text-right hint-text pt-0">
                                    <a href="javascript:void(0)" class="text-danger">Lupa kata sandi?</a>
                                </div>
                            </div>

                            <div class="form-group text-center mt-5 mb-4 mb-0">
                                {{-- <button type="submit" class="border-btn border-btn2 py-3 btn-sm">Masuk</button> --}}
                                <a href="{{ route('dashboard') }}" class="border-btn border-btn2 py-3 btn-sm">Masuk</a>
                            </div>

                            <div>
                                <p class="hint-text mt-0 text-with-line">
                                    <span class="">atau lanjut dengan</span>
                                </p>
                            </div>
                            <div class="social-login text-center">
                                <a class="btn-facebook text-uppercase" href="javascript:void(0)"><i class="fab fa-facebook-f mr-2 ml-2" style="color: #395144 !important"></i> </a>
                                <a class="btn-facebook text-uppercase" href="javascript:void(0)"><i class="fab fa-google mr-2 ml-2" style="color: #395144 !important"></i></a>
                                <a class="btn-facebook text-uppercase" href="javascript:void(0)"><i class="fab fa-twitter mr-2 ml-2" style="color: #395144 !important"></i></a>
                            </div>

                        </div>
                        {{-- </form> --}}

                    </div>

                </div>

            </div>

            <div class="modal-footer">
                Belum punya akun?
                <b class="daftar-disini"><a href="#registerModal2" class="pl-2" data-dismiss="modal" data-toggle="modal">Daftar disini</a></b>
            </div>

        </div>
    </div>
</div>

<div id="registerModal2" class="modal-style-2 modal">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-login">
        <div class="modal-content">

            <div class="modal-header p-0">
                <h4 class="modal-title">Selamat Datang Kembali</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <hr class="my-3">

            <div class="modal-body">

                <div class="row justify-conten-center align-items-center">

                    <div class="col-12 col-md-6">

                        <div class="row p-4 justify-content-center">
                            <img style="max-width: 350px !important" src="{{ asset('assets/img/landingpages/login.png') }}" alt="">
                        </div>

                        <div class="row pb-4 justify-content-center">
                            <img style="width: 150px !important" src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                        </div>

                    </div>

                    <div class="col-12 col-md-6 justify-conten-center align-items-center">

                        <div class="mt-3 col-12 col-md-10 align-items-center">
                        {{-- <form action="{{ route('dashboard') }}" class="mt-3 col-12 col-md-10 align-items-center">
                            @csrf --}}

                            <div class="form-group">
                                <span style="color: #634730 !important; font-size: 14px !important">Nama Pengguna</span>
                                <div class="input-group align-items-center">
                                    <span class="input-group-addon p-0"><i class="fa fa-user" style="color: #634730 !important"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Masukan nama pengguna">
                                </div>
                            </div>
                            <div class="form-group">
                                <span style="color: #634730 !important; font-size: 14px !important">Email</span>
                                <div class="input-group align-items-center">
                                    <span class="input-group-addon p-0"><i class="fa fa-user" style="color: #634730 !important"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="Masukan email">
                                </div>
                            </div>
                            <div class="form-group">
                                <span style="color: #634730 !important; font-size: 14px !important">Kata sandi</span>
                                <div class="input-group align-items-center">
                                    <span class="input-group-addon p-0"><i class="fa fa-lock" style="color: #634730 !important"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Masukan password" autocomplete="on">
                                </div>
                            </div>
                            <div class="form-group">
                                <span style="color: #634730 !important; font-size: 14px !important">Konfirmasi Kata sandi</span>
                                <div class="input-group align-items-center">
                                    <span class="input-group-addon p-0"><i class="fa fa-lock" style="color: #634730 !important"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Masukan password" autocomplete="on">
                                </div>
                            </div>

                            <div class="form-group text-center mt-5 mb-4 mb-0">
                                {{-- <button type="submit" class="border-btn border-btn2 py-3 btn-sm">Daftar</button> --}}
                                <a href="{{ route('dashboard') }}" class="border-btn border-btn2 py-3 btn-sm">Daftar</a>
                            </div>

                        {{-- </form> --}}
                        </div>

                    </div>

                </div>

            </div>

            <div class="modal-footer">
                Sudah punya akun?
                <b class="daftar-disini"><a href="#loginModal2" class="pl-2" data-dismiss="modal" data-toggle="modal">Masuk disini</a></b>
            </div>

        </div>
    </div>
</div>
