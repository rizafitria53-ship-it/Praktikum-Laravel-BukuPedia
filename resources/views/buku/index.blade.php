
@extends('layouts.app')

@section('title', 'Katalog Buku')

@section('content')
<section class="page-heading">
    <p class="eyebrow">KOLEKSI BUKU</p>
    <h1>Katalog Buku</h1>
    <p>Pilih buku yang menarik dan temukan cerita di dalamnya.</p>
</section>

<section class="section catalog-section">
    <p class="result-count">Tersedia {{ count($buku) }} koleksi buku</p>

    <div class="book-grid">
        @foreach ($buku as $item)
            <article class="book-card">
                <img src="{{ $item['gambar'] }}" alt="{{ $item['judul'] }}">
                <div class="book-info">
                    <span class="category">{{ $item['kategori'] }}</span>
                    <h3>{{ $item['judul'] }}</h3>
                    <p>{{ $item['penulis'] }}</p>
                    <a href="{{ route('buku.show', $item['slug']) }}" class="detail-link">
                        Lihat Detail →
                    </a>
                </div>
            </article>
        @endforeach
    </div>
</section>
@endsection
