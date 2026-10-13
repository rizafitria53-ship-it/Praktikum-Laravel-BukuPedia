
@extends('layouts.app')

@section('title', $item['judul'])

@section('content')
<section class="detail-section">
    <a href="{{ route('buku.index') }}" class="back-link">← Kembali ke Katalog</a>

    <div class="detail-card">
        <img src="{{ $item['gambar'] }}" alt="{{ $item['judul'] }}">

        <div class="detail-content">
            <span class="category">{{ $item['kategori'] }}</span>
            <h1>{{ $item['judul'] }}</h1>

            <p class="author">Penulis: {{ $item['penulis'] }}</p>
            <p class="year">Tahun terbit: {{ $item['tahun'] }}</p>

            <h3>Tentang Buku</h3>
            <p class="description">{{ $item['deskripsi'] }}</p>

            <a href="{{ route('buku.index') }}" class="btn">Lihat Buku Lainnya</a>
        </div>
    </div>
</section>
@endsection
