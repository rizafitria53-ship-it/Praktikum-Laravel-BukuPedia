<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{
    private $buku = [
        [
            'slug' => 'laskar-pelangi',
            'judul' => 'Laskar Pelangi',
            'penulis' => 'Andrea Hirata',
            'kategori' => 'Novel',
            'tahun' => 2005,
            'deskripsi' => 'Kisah perjuangan sepuluh anak di Belitung untuk mendapatkan pendidikan dan meraih cita-cita.',
            'gambar' => 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'slug' => 'bumi',
            'judul' => 'Bumi',
            'penulis' => 'Tere Liye',
            'kategori' => 'Fantasi',
            'tahun' => 2014,
            'deskripsi' => 'Petualangan Raib dan teman-temannya dalam dunia yang penuh rahasia dan kekuatan istimewa.',
            'gambar' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'slug' => 'negeri-5-menara',
            'judul' => 'Negeri 5 Menara',
            'penulis' => 'Ahmad Fuadi',
            'kategori' => 'Novel',
            'tahun' => 2009,
            'deskripsi' => 'Perjalanan enam sahabat dalam mengejar impian melalui pendidikan dan persahabatan.',
            'gambar' => 'https://images.unsplash.com/photo-1519682337058-a94d519337bc?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'slug' => 'filosofi-teras',
            'judul' => 'Filosofi Teras',
            'penulis' => 'Henry Manampiring',
            'kategori' => 'Pengembangan Diri',
            'tahun' => 2018,
            'deskripsi' => 'Pengantar filsafat Stoisisme untuk membantu menghadapi emosi dan masalah sehari-hari.',
            'gambar' => 'https://images.unsplash.com/photo-1516979187457-637abb4f9353?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'slug' => 'sang-pemimpi',
            'judul' => 'Sang Pemimpi',
            'penulis' => 'Andrea Hirata',
            'kategori' => 'Novel',
            'tahun' => 2006,
            'deskripsi' => 'Cerita tentang persahabatan, kerja keras, dan keberanian untuk bermimpi besar.',
            'gambar' => 'https://images.unsplash.com/photo-1513001900722-370f803f498d?auto=format&fit=crop&w=600&q=80',
        ],
        [
            'slug' => 'atomic-habits',
            'judul' => 'Atomic Habits',
            'penulis' => 'James Clear',
            'kategori' => 'Pengembangan Diri',
            'tahun' => 2018,
            'deskripsi' => 'Panduan membangun kebiasaan baik melalui perubahan kecil yang dilakukan secara konsisten.',
            'gambar' => 'https://images.unsplash.com/photo-1543002588-bfa74002ed7e?auto=format&fit=crop&w=600&q=80',
        ],
    ];

    public function home()
    {
        $buku = array_slice($this->buku, 0, 3);

        return view('home', compact('buku'));
    }

    public function index()
    {
        return view('buku.index', [
            'buku' => $this->buku,
        ]);
    }

    public function show($slug)
    {
        foreach ($this->buku as $item) {
            if ($item['slug'] === $slug) {
                return view('buku.show', [
                    'item' => $item,
                ]);
            }
        }

        abort(404);
    }
}
