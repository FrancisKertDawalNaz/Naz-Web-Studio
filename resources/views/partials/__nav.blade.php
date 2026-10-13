<link rel="stylesheet" href="{{ URL::asset('css/nav.css') }}">
<header class="fk-header fixed-top" id="fkHeader">
    <nav class="navbar navbar-expand-md px-3 py-3 fk-nav">
        <div class="container-fluid">
            <a class="navbar-brand fk-nav__brand d-flex align-items-center gap-2 mb-0" href="{{ url('/') }}">
                <img class="fk-nav__logo"
                    src="{{ isset($appInfo->logo) ? asset('storage/' . $appInfo->logo) : asset('img/no-image-icon-4.png') }}"
                    alt="{{ $appInfo->app_name ?? 'Logo' }}">
                <span class="fk-nav__brand-text">{{ $appInfo->app_name ?? '' }}</span>
            </a>

            <button class="navbar-toggler fk-nav__toggle" type="button" data-bs-toggle="collapse"
                data-bs-target="#fkNavMenu" aria-controls="fkNavMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="fkNavMenu">
                <ul class="navbar-nav ms-auto align-items-md-center gap-md-1 fk-nav__list">
                    <li class="nav-item">
                        <a class="nav-link fk-nav__link fk-nav__link--active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fk-nav__link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fk-nav__link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fk-nav__link" href="#certificates">Certificates</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn fk-nav__cta ms-md-3 mt-2 mt-md-0" data-bs-toggle="offcanvas"
                            data-bs-target="#fkContact" aria-controls="fkContact">
                            Contact <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="offcanvas offcanvas-end fk-contact" tabindex="-1" id="fkContact" aria-labelledby="fkContactLabel">
    <div class="offcanvas-header fk-contact__header">
        <div>
            <p class="fk-contact__eyebrow text-uppercase fw-semibold mb-1">Get In Touch</p>
            <h5 class="offcanvas-title fw-bold text-white" id="fkContactLabel">
                Let's Work <span class="fk-contact__accent">Together</span>
            </h5>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <div class="d-flex flex-column gap-3 mb-4">
            <a href="mailto:you@example.com" class="fk-contact__item">
                <i class="bi bi-envelope-fill"></i>
                <div><small>Email</small><span>you@example.com</span></div>
            </a>
            <a href="tel:+639000000000" class="fk-contact__item">
                <i class="bi bi-telephone-fill"></i>
                <div><small>Phone</small><span>+63 900 000 0000</span></div>
            </a>
            <div class="fk-contact__item">
                <i class="bi bi-geo-alt-fill"></i>
                <div><small>Location</small><span>Philippines</span></div>
            </div>
        </div>

        @if (session('contact_success'))
        <div class="alert alert-success py-2">{{ session('contact_success') }}</div>
        @endif

        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label class="fk-contact__label" for="fkName">Name</label>
                <input type="text" id="fkName" name="name" class="form-control fk-contact__input"
                    placeholder="Your name" value="{{ old('name') }}" required>
            </div>
            <div class="mb-3">
                <label class="fk-contact__label" for="fkEmail">Email</label>
                <input type="email" id="fkEmail" name="email" class="form-control fk-contact__input"
                    placeholder="you@email.com" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label class="fk-contact__label" for="fkMessage">Message</label>
                <textarea id="fkMessage" name="message" rows="4" class="form-control fk-contact__input"
                    placeholder="Your message..." required>{{ old('message') }}</textarea>
            </div>
            <button type="submit" class="btn fk-contact__send w-100">
                Send Message <i class="bi bi-send-fill ms-1"></i>
            </button>
        </form>
    </div>
</div>