@extends('layouts.app')

@section('komponen', 'dashboard')

@section('content')
<div class="container mt-4">
    <div class="jumbotron bg-dark text-white p-5 rounded-3 shadow" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://img.freepik.com/free-photo/top-view-film-elements-composition-white-background_23-2148416827.jpg') center/cover;">
        <h1 class="display-4">Halo {{ $username }}, selamat datang di SEWAFLIX!</h1>
        <p class="lead">Platform sewa film fisik premium dengan koleksi terlengkap</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-primary text-white">
                    <h3><i class="fas fa-info-circle me-2"></i>Tentang Sewaflix</h3>
                </div>
                <div class="card-body">
                    <p>Sewaflix adalah platform sewa film fisik terkemuka yang menyediakan:</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i>Ribuan judul film berkualitas tinggi</li>
                        <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i>Harga bersahabat</li>
                        <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i>Kualitas BluRay dengan resolusi 4K</li>
                        <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i>Sewa dan tonton sepuasnya</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-danger text-white">
                    <h3><i class="fas fa-crown me-2"></i>Keunggulan Kami</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <div class="text-center p-3 bg-light rounded">
                                <i class="fas fa-trophy display-6 text-warning mb-2"></i>
                                <h5>Kualitas Terbaik</h5>
                                <p class="small">Kualitas 4K dengan Audio Dolby 7.1 hingga Atmos</p>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="text-center p-3 bg-light rounded">
                                <i class="fas fa-bolt display-6 text-info mb-2"></i>
                                <h5>Update Cepat</h5>
                                <p class="small">Film baru segera tersedia setelah turun layar bioskop</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center p-3 bg-light rounded">
                                <i class="fas fa-dollar-sign display-6 text-primary mb-2"></i>
                                <h5>Harga Terjangkau</h5>
                                <p class="small">Tidak menguras kantong</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-center p-3 bg-light rounded">
                                <i class="fas fa-users display-6 text-success mb-2"></i>
                                <h5>Untuk Semua</h5>
                                <p class="small">Kami menghadirkan konten film untuk segala usia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    .card {
        transition: transform 0.3s, box-shadow 0.3s;
        border: none;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .jumbotron {
        position: relative;
        overflow: hidden;
    }
    .badge {
        font-size: 0.8rem;
    }
    .list-group-item {
        border-left: none;
        border-right: none;
    }
</style>
@endsection
