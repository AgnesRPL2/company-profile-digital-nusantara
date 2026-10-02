document.addEventListener("DOMContentLoaded", function () {

    /* =========================
       TOGGLE MENU
    ========================= */

    const menuToggle = document.getElementById("menuToggle");
    const navMenu = document.getElementById("navMenu");

    if (menuToggle && navMenu) {

        menuToggle.addEventListener("click", function () {

            navMenu.classList.toggle("active");

        });

    }


    /* =========================
       SLIDER
    ========================= */

    const slides = document.querySelectorAll(".slide");

    const nextButton = document.getElementById("nextSlide");

    const prevButton = document.getElementById("prevSlide");

    let currentSlide = 0;


    function showSlide(index) {

        if (slides.length === 0) {
            return;
        }

        slides.forEach(function (slide) {

            slide.classList.remove("active");

        });

        slides[index].classList.add("active");

    }


    if (nextButton && slides.length > 0) {

        nextButton.addEventListener("click", function () {

            currentSlide++;

            if (currentSlide >= slides.length) {
                currentSlide = 0;
            }

            showSlide(currentSlide);

        });

    }


    if (prevButton && slides.length > 0) {

        prevButton.addEventListener("click", function () {

            currentSlide--;

            if (currentSlide < 0) {
                currentSlide = slides.length - 1;
            }

            showSlide(currentSlide);

        });

    }


    /* AUTO SLIDER */

    if (slides.length > 0) {

        setInterval(function () {

            currentSlide++;

            if (currentSlide >= slides.length) {
                currentSlide = 0;
            }

            showSlide(currentSlide);

        }, 5000);

    }


    /* =========================
       VALIDASI FORM KONTAK
    ========================= */

    const contactForm = document.getElementById("contactForm");

    if (contactForm) {

        contactForm.addEventListener("submit", function (event) {

            let valid = true;


            const nama = document.getElementById("nama");

            const email = document.getElementById("email");

            const pesan = document.getElementById("pesan");


            const namaError = document.getElementById("namaError");

            const emailError = document.getElementById("emailError");

            const pesanError = document.getElementById("pesanError");


            namaError.textContent = "";
            emailError.textContent = "";
            pesanError.textContent = "";

            nama.classList.remove("input-error");
            email.classList.remove("input-error");
            pesan.classList.remove("input-error");


            /* NAMA */

            if (nama.value.trim() === "") {

                namaError.textContent =
                    "Nama tidak boleh kosong.";

                nama.classList.add("input-error");

                valid = false;

            }


            /* EMAIL */

            const emailPattern =
                /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


            if (email.value.trim() === "") {

                emailError.textContent =
                    "Email wajib diisi.";

                email.classList.add("input-error");

                valid = false;

            } else if (!emailPattern.test(email.value.trim())) {

                emailError.textContent =
                    "Email harus menggunakan format yang valid.";

                email.classList.add("input-error");

                valid = false;

            }


            /* PESAN */

            if (pesan.value.trim() === "") {

                pesanError.textContent =
                    "Pesan wajib diisi.";

                pesan.classList.add("input-error");

                valid = false;

            }


            if (!valid) {

                event.preventDefault();

            }

        });

    }

});
