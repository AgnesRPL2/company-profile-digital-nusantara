@extends('layouts.app')

@section('title', 'Layanan - PT Digital Nusantara')

@section('content')

<section class="page-header">

    <div class="container">

        <span>LAYANAN KAMI</span>

        <h1>
            Solusi Digital
        </h1>

        <p>
            Berbagai layanan untuk membantu kebutuhan bisnis Anda.
        </p>

    </div>

</section>


<section class="section">

    <div class="container">

        <div class="section-title">

            <span>SERVICES</span>

            <h2>
                Apa Yang Kami Tawarkan?
            </h2>

        </div>


        <div class="service-grid">

            <div class="service-card">

                <div class="service-number">
                    01
                </div>

                <h3>
                    Website Development
                </h3>

                <p>
                    Pengembangan website profesional untuk
                    kebutuhan perusahaan, bisnis, dan organisasi.
                </p>

                <a href="{{ route('contact') }}">
                    Konsultasi →
                </a>

            </div>


            <div class="service-card">

                <div class="service-number">
                    02
                </div>

                <h3>
                    Digital Marketing
                </h3>

                <p>
                    Membantu bisnis membangun kehadiran digital
                    dan menjangkau pelanggan melalui media digital.
                </p>

                <a href="{{ route('contact') }}">
                    Konsultasi →
                </a>

            </div>


            <div class="service-card">

                <div class="service-number">
                    03
                </div>

                <h3>
                    UI/UX Design
                </h3>

                <p>
                    Perancangan tampilan dan pengalaman pengguna
                    yang menarik serta mudah digunakan.
                </p>

                <a href="{{ route('contact') }}">
                    Konsultasi →
                </a>

            </div>


            <div class="service-card">

                <div class="service-number">
                    04
                </div>

                <h3>
                    IT Consultation
                </h3>

                <p>
                    Konsultasi teknologi untuk membantu menentukan
                    solusi IT yang sesuai dengan kebutuhan bisnis.
                </p>

                <a href="{{ route('contact') }}">
                    Konsultasi →
                </a>

            </div>

        </div>

    </div>

</section>

@endsection
