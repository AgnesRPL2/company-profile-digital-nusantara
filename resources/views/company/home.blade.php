@extends('layouts.app')

@section('title', 'PT Digital Nusantara - Home')

@section('content')

{{-- =========================
     HERO SECTION
========================= --}}
<section class="hero">

    <div class="hero-content">

        {{-- TEKS HERO --}}
        <div class="hero-text">

            <span class="badge">
                DIGITAL SOLUTION COMPANY
            </span>

            <h1>
                Membangun Masa Depan
                <span>Digital</span>
                Bersama
            </h1>

            <p>
                PT Digital Nusantara menyediakan solusi teknologi
                digital untuk membantu bisnis berkembang lebih cepat,
                modern, dan efisien.
            </p>

            <div class="hero-buttons">

                <a
                    href="{{ route('services') }}"
                    class="btn btn-primary"
                >
                    Lihat Layanan
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="btn btn-outline"
                >
                    Hubungi Kami
                </a>

            </div>

        </div>


        {{-- =========================
             SLIDER GAMBAR
        ========================= --}}
        <div class="slider" id="slider">

            {{-- SLIDE 1 --}}
            <div class="slide active">

                <img
                    src="{{ asset('images/steptodown.com201552.jpg') }}"
                    alt="Teknologi Digital"
                >

                <div class="slide-caption">
                    Teknologi Digital
                </div>

            </div>


            {{-- SLIDE 2 --}}
            <div class="slide">

                <img
                    src="{{ asset('images/solusi bisnis.avif') }}"
                    alt="Solusi Bisnis"
                >

                <div class="slide-caption">
                    Solusi Bisnis
                </div>

            </div>


            {{-- SLIDE 3 --}}
            <div class="slide">

                <img
                    src="{{ asset('images/inovasi teknologi.jpg') }}"
                    alt="Inovasi Teknologi"
                >

                <div class="slide-caption">
                    Inovasi Teknologi
                </div>

            </div>


            {{-- TOMBOL SLIDER --}}
            <button
                type="button"
                class="slider-btn prev"
                id="prevSlide"
                aria-label="Gambar sebelumnya"
            >
                ‹
            </button>

            <button
                type="button"
                class="slider-btn next"
                id="nextSlide"
                aria-label="Gambar berikutnya"
            >
                ›
            </button>


            {{-- DOT SLIDER --}}
            <div class="slider-dots">

                <button
                    type="button"
                    class="dot active"
                    data-slide="0"
                ></button>

                <button
                    type="button"
                    class="dot"
                    data-slide="1"
                ></button>

                <button
                    type="button"
                    class="dot"
                    data-slide="2"
                ></button>

            </div>

        </div>

    </div>

</section>


{{-- =========================
     SECTION KEUNGGULAN
========================= --}}
<section class="section">

    <div class="container">

        <div class="section-title">

            <span>KENAPA KAMI?</span>

            <h2>
                Partner Digital Untuk Bisnis Anda
            </h2>

            <p>
                Kami membantu perusahaan memanfaatkan teknologi
                untuk mencapai tujuan bisnis.
            </p>

        </div>


        <div class="feature-grid">


            {{-- CARD 1 --}}
            <div class="feature-card">

                <div class="feature-icon">
                    01
                </div>

                <h3>
                    Profesional
                </h3>

                <p>
                    Tim kami mengutamakan kualitas dan profesionalitas
                    dalam setiap pekerjaan.
                </p>

            </div>


            {{-- CARD 2 --}}
            <div class="feature-card">

                <div class="feature-icon">
                    02
                </div>

                <h3>
                    Inovatif
                </h3>

                <p>
                    Kami menggunakan pendekatan dan teknologi
                    yang mengikuti perkembangan digital.
                </p>

            </div>


            {{-- CARD 3 --}}
            <div class="feature-card">

                <div class="feature-icon">
                    03
                </div>

                <h3>
                    Terpercaya
                </h3>

                <p>
                    Kepuasan dan kebutuhan pelanggan menjadi
                    salah satu fokus utama kami.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection
