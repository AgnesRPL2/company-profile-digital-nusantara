@extends('layouts.app')

@section('title', 'Contact - PT Digital Nusantara')

@section('content')

<section class="page-header">

    <div class="container">

        <span>CONTACT</span>

        <h1>
            Hubungi Kami
        </h1>

        <p>
            Silakan hubungi kami untuk informasi lebih lanjut.
        </p>

    </div>

</section>


<section class="section">

    <div class="container contact-grid">


        <!-- INFORMASI -->

        <div class="contact-info">

            <span class="section-label">
                GET IN TOUCH
            </span>

            <h2>
                Mari Diskusikan
                Kebutuhan Digital Anda
            </h2>

            <p>
                Kami siap membantu menjawab pertanyaan dan
                kebutuhan Anda terkait solusi digital.
            </p>


            <div class="contact-item">

                <strong>
                    Email
                </strong>

                <p>
                    info@digitalnusantara.com
                </p>

            </div>


            <div class="contact-item">

                <strong>
                    Telepon
                </strong>

                <p>
                    +62 812 3456 7890
                </p>

            </div>


            <div class="contact-item">

                <strong>
                    Alamat
                </strong>

                <p>
                    Jakarta, Indonesia
                </p>

            </div>

        </div>


        <!-- FORM -->

        <div class="contact-form-card">

            @if(session('success'))

                <div class="success-message">

                    {{ session('success') }}

                </div>

            @endif


            @if($errors->any())

                <div class="error-message">

                    <strong>
                        Periksa kembali data:
                    </strong>

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <form
                action="{{ route('contact.send') }}"
                method="POST"
                id="contactForm"
                novalidate
            >

                @csrf


                <div class="form-group">

                    <label for="nama">
                        Nama
                    </label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        value="{{ old('nama') }}"
                        placeholder="Masukkan nama Anda"
                    >

                    <small
                        class="form-error"
                        id="namaError"
                    ></small>

                </div>


                <div class="form-group">

                    <label for="email">
                        Email
                    </label>

                    <input
                        type="text"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="contoh@email.com"
                    >

                    <small
                        class="form-error"
                        id="emailError"
                    ></small>

                </div>


                <div class="form-group">

                    <label for="pesan">
                        Pesan
                    </label>

                    <textarea
                        id="pesan"
                        name="pesan"
                        rows="6"
                        placeholder="Tulis pesan Anda..."
                    >{{ old('pesan') }}</textarea>

                    <small
                        class="form-error"
                        id="pesanError"
                    ></small>

                </div>


                <button
                    type="submit"
                    class="btn btn-primary btn-full"
                >
                    Kirim Pesan
                </button>

            </form>

        </div>

    </div>

</section>

@endsection
