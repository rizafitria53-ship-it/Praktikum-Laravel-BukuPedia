
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero">
    <div class="hero-content">
        <p class="eyebrow">SELAMAT DATANG DI BUKUPEDIA</p>
        <h1>Temukan Buku,<br>Temukan Inspirasi.</h1>
        <p class="hero-text">
            Jelajahi berbagai pilihan buku menarik untuk menambah
            wawasan, imajinasi, dan pengalaman membaca.
        </p>
        <a href="{{ route('buku.index') }}" class="btn">Jelajahi Katalog</a>
    </div>
</section>

<section class="section">
    <div class="section-heading">
        <div>
            <p class="eyebrow">PILIHAN PEMBACA</p>
            <h2>Buku Pilihan</h2>
        </div>
        <a href="{{ route('buku.index') }}" class="text-link">Lihat semua buku →</a>
    </div>

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
