@extends('layouts.app')

@section('komponen', 'Pengelolaan')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Daftar Film</h3>

    @php
        $filmKategori = [
            'Lagi Rame' => collect($films)->filter(fn($f) => in_array($f['judul'], ['Inception', 'JUMBO', 'Extreme Job', 'Jatuh Cinta Seperti Di Film-Film', 'Conclave', '20th Century Girl'])),
            'Pemenang Oscar' => collect($films)->filter(fn($f) => in_array($f['judul'], ['Parasite', 'Everything Everywhere All at Once', 'The Godfather', 'Oppenheimer', 'Anora'])),
            'Seram-seram' => collect($films)->filter(fn($f) => in_array($f['judul'], ['The Monkey', 'The Substance', 'Sebelum Iblis Menjemput',])),
            'Penuh Aksi' => collect($films)->filter(fn($f) => in_array($f['judul'], ['Maharaja', 'The Shadow Strays']))
        ];
    @endphp

    @foreach ($filmKategori as $judulKategori => $filmList)
        <div class="mb-5">
            <h4 class="mb-4">{{ $judulKategori }}</h4>
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
                @foreach ($filmList as $film)
                    @php
                        $stok = $film['Stok'];
                        if ($stok == 0) {
                            $stokBadge = '<span class="badge bg-danger fs-6 px-3 py-2 shadow-sm">❌ Stok Habis</span>';
                        } elseif ($stok < 5) {
                            $stokBadge = '<span class="badge bg-warning text-dark fs-6 px-3 py-2 shadow-sm">⚠️ Sisa ' . $stok . '</span>';
                        } else {
                            $stokBadge = '<span class="badge bg-success fs-6 px-3 py-2 shadow-sm">✅ Tersedia: ' . $stok . '</span>';
                        }
                    @endphp

                    <div class="col d-flex justify-content-center">
                        <div class="card shadow-sm" style="width: 100%; max-width: 300px;">
                            <img src="{{ $film['poster'] }}" class="card-img-top" style="height: 450px; object-fit: cover;" alt="{{ $film['judul'] }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $film['judul'] }}</h5>
                                <p class="card-text mb-1"><strong>Negara:</strong> {{ $film['negara'] }}</p>
                                <p class="card-text mb-1"><strong>Produksi:</strong> {{ $film['produksi'] }}</p>
                                <p class="card-text mb-1"><strong>Tahun:</strong> {{ $film['tahun'] }}</p>
                                <p class="card-text mb-1"><strong>Rating:</strong> {{ $film['rating'] }}</p>

                                <div class="mt-auto text-center mb-2">
                                    {!! $stokBadge !!}
                                </div>
                                <div class="text-center">
                                    <span class="badge bg-danger fs-6 px-3 py-2 shadow">
                                        💸 Rp{{ number_format($film['harga'], 0, ',', '.') }}/minggu
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection
