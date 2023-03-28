@extends('layouts.user')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('title', 'APPM')

@section('content')
    {{-- Section Header --}}
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <div class="container-fluid">

                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        @if (Auth::guard('masyarakat')->check())
                            <ul class="navbar-nav text-center ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link ml-3 text-white" href="{{ route('pemas.laporan') }}">Buat Laporan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ml-3 text-white" href="{{ route('pemas.logout') }}"
                                        style="text-decoration: underline">Keluar</a>
                                </li>
                            </ul>
                        @else
                            <ul class="navbar-nav text-center ml-auto">
                                <li class="nav-item">
                                    <button class="btn text-white" type="button" class="btn btn-primary"
                                        data-toggle="modal" data-target="#loginModal">Masuk</button>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('pemas.formRegister') }}" class="btn btn-outline-purple">Daftar</a>
                                </li>
                            </ul>
                        @endauth
                </div>
            </div>
        </div>
    </nav>

    <div class="text-center">
        <h2 class="medium text-white mt-3 mb-5">Layanan Pengaduan Masyarakat</h2>
        <p class="medium text-white mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur at similique blanditiis unde delectus excepturi fuga aut voluptatibus, eaque necessitatibus mollitia dolorum assumenda numquam recusandae, a quo asperiores fugiat eius vitae vero in doloribus velit labore? Esse, eligendi recusandae illo vero impedit dicta, eius enim cumque, modi fugit sequi est iste debitis quam nesciunt quod quisquam rem? Dolorem nobis, iste ex officiis voluptas ab sequi beatae cupiditate aperiam nostrum ipsa voluptatem quam, culpa autem est optio porro quas! Voluptatem autem maxime, nihil ullam cumque a est dolorum, saepe sit tempore odit minima maiores esse aperiam pariatur nobis quod ea debitis!</p>
    </div>

    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
</section>

{{-- MODAL LOGIN --}}
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="mt-2 mb-5 text-center">Silahkan masuk menggunakan akun yang sudah didaftarkan.</h3>
                <form action="{{ route('pemas.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-purple text-white mt-3" style="width: 100%">MASUK</button>
                </form>
                @if (Session::has('pesan'))
                    <div class="alert alert-danger mt-2">
                        {{ Session::get('pesan') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@if (Session::has('pesan'))
    <script>
        $('#loginModal').modal('show');
    </script>
@endif
@endsection
