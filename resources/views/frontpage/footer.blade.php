<footer class="fk-footer">
    <div class="container py-5">
        <div class="row g-4 align-items-center">

            <div class="col-md-4 text-center text-md-start">
                <a href="{{ url('/') }}" class="fk-footer__brand d-inline-flex align-items-center gap-2">
                    <img class="fk-footer__logo"
                        src="{{ isset($appInfo->logo) ? asset('storage/' . $appInfo->logo) : asset('img/no-image-icon-4.png') }}"
                        alt="{{ $appInfo->app_name ?? 'Logo' }}">
                    <span>{{ $appInfo->app_name ?? '' }}</span>
                </a>
                <p class="fk-footer__tagline mt-2 mb-0">Web Developer</p>
            </div>

            <div class="col-md-4">
                <ul class="fk-footer__links list-unstyled d-flex flex-wrap justify-content-center gap-3 mb-0">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#certificates">Certificates</a></li>
                    <li>
                        <a href="#fkContact" role="button" data-bs-toggle="offcanvas"
                            data-bs-target="#fkContact">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4">
                <div class="d-flex justify-content-center justify-content-md-end gap-2">
                    <a href="#" class="fk-hero__social" aria-label="GitHub"><i class="bi bi-github"></i></a>
                    <a href="#" class="fk-hero__social" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="fk-hero__social" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="mailto:you@example.com" class="fk-hero__social" aria-label="Email"><i
                            class="bi bi-envelope-fill"></i></a>
                </div>
            </div>

        </div>

        <hr class="fk-footer__divider">

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <p class="fk-footer__copy mb-0">
                &copy; {{ date('Y') }} {{ $appInfo->app_name ?? 'Francis Kert D. Naz' }}. All rights reserved.
            </p>
            <a href="#home" class="fk-footer__top">
                Back to top <i class="bi bi-arrow-up-short"></i>
            </a>
        </div>
    </div>
</footer>