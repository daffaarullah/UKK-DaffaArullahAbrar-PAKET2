@extends('Layouts.user')

@section('css')
    <style>
        body {
            background: #7895B2;
        }

        .btn-purple {
            background: #7895B2;
            width: 100%;
            color: #fff;
        }
    </style>
@endsection

@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center mb-5">Daftar</h2>
                        <form action="{{ route('pemas.register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input name="nik"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    type="number" maxlength="16" class="form-control" placeholder="NIK" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="number" name="telp" placeholder="No. Telp" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-purple">REGISTER</button>
                        </form>
                    </div>
                </div>
                @if (Session::has('pesan'))
                    <div class="alert alert-danger mt-2">
                        {{ Session::get('pesan') }}
                    </div>
                @endif
                <a href="{{ route('pemas.index') }}" class="btn btn-primary text-white mt-3" style="width: 100%">Kembali ke
                    Halaman Utama</a>
            </div>
        </div>
    </div>
@endsection
