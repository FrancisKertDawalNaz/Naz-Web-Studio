<main id="home" class="fk-hero">
    <div class="fk-hero__bg" style="background-image: url('{{ asset('storage/img/nn.png') }}')"></div>
    <div class="fk-hero__overlay"></div>

    <div class="container position-relative fk-hero__content">
        <div class="row align-items-center min-vh-100 py-5">
            <div class="col-lg-6 text-center text-lg-start">
                <p class="fk-hero__eyebrow mb-2" data-aos="fade-down">Hello, I'm</p>
                <h1 class="fk-hero__title fw-bold text-white mb-3" data-aos="fade-up" data-aos-delay="100">
                    Francis Kert D. <span class="fk-hero__accent">Naz</span>
                </h1>
                <h2 class="fk-hero__role h4 fw-semibold text-white mb-4" data-aos="fade-up" data-aos-delay="200">
                    Full-Stack Developer
                </h2>

                <p class="fk-hero__text text-light mb-4" data-aos="fade-up" data-aos-delay="300">
                    I build modern and responsive web applications using Laravel, PHP,
                    JavaScript and modern UI technologies. I love creating solutions
                    that make an impact.
                </p>

                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3 mb-4"
                    data-aos="fade-up" data-aos-delay="400">
                    <a href="#projects" class="btn fk-hero__btn fk-hero__btn--primary">
                        View My Projects <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <a href="{{ asset('storage/files/cv.pdf') }}" download
                        class="btn fk-hero__btn fk-hero__btn--outline">
                        Download CV <i class="bi bi-download ms-1"></i>
                    </a>
                </div>

                <div class="d-flex justify-content-center justify-content-lg-start gap-2" data-aos="fade-up"
                    data-aos-delay="500">
                    <a href="#" class="fk-hero__social" aria-label="GitHub"><i class="bi bi-github"></i></a>
                    <a href="#" class="fk-hero__social" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="fk-hero__social" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="mailto:you@example.com" class="fk-hero__social" aria-label="Email"><i
                            class="bi bi-envelope-fill"></i></a>
                </div>
            </div>
        </div>
    </div>
</main>