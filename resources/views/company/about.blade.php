@extends('layouts.app')

@section('title', 'Tentang Kami - PT Digital Nusantara')

@section('content')

<section class="page-header">

    <div class="container">

        <span>TENTANG KAMI</span>

        <h1>
            PT Digital Nusantara
        </h1>

        <p>
            Mengenal lebih dekat perusahaan dan visi kami.
        </p>

    </div>

</section>


<section class="section">

    <div class="container about-grid">

        <div class="about-image">

            <img
                src="{{ asset('images/PT digital nusantara.jpg') }}"
                alt="PT Digital Nusantara"
            >

        </div>


        <div class="about-content">

            <span class="section-label">
                SIAPA KAMI?
            </span>

            <h2>
                Menghadirkan Solusi Digital
                Untuk Pertumbuhan Bisnis
            </h2>

            <p>
                PT Digital Nusantara merupakan perusahaan yang
                bergerak di bidang teknologi dan solusi digital.
                Kami membantu bisnis memanfaatkan teknologi
                untuk meningkatkan efisiensi dan kualitas layanan.
            </p>

            <p>
                Kami percaya bahwa teknologi bukan hanya tentang
                perangkat dan sistem, tetapi juga tentang bagaimana
                teknologi memberikan manfaat nyata bagi manusia
                dan bisnis.
            </p>

            <div class="about-list">

                <div>
                    ✓ Solusi sesuai kebutuhan
                </div>

                <div>
                    ✓ Teknologi modern
                </div>

                <div>
                    ✓ Pelayanan profesional
                </div>

            </div>

        </div>

    </div>

</section>


<section class="section section-dark">

    <div class="container">

        <div class="section-title light">

            <span>VISI & MISI</span>

            <h2>
                Membangun Ekosistem Digital
            </h2>

        </div>


        <div class="vision-grid">

            <div class="vision-card">

                <h3>
                    Visi
                </h3>

                <p>
                    Menjadi perusahaan teknologi yang memberikan
                    solusi digital inovatif dan bermanfaat bagi
                    perkembangan bisnis.
                </p>

            </div>


            <div class="vision-card">

                <h3>
                    Misi
                </h3>

                <p>
                    Memberikan layanan teknologi berkualitas,
                    mengembangkan inovasi, serta membangun hubungan
                    jangka panjang dengan pelanggan.
                </p>

            </div>

        </div>

    </div>

</section>

@endsection
