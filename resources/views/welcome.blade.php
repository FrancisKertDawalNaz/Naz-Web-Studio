@include('partials.__header')

<main class="fk-corp">
    <div class="container-fluid p-0">
        <div class="row g-0 fk-corp__row">

            {{-- LEFT: brand panel (hidden sa mobile) --}}
            <aside class="col-lg-6 d-none d-lg-flex fk-corp__brand">
                <div class="fk-corp__brand-inner">
                    <a href="{{ url('/') }}" class="fk-corp__back mb-4">
                        <i class="bi bi-arrow-left"></i> Back to main page
                    </a>
                    <div class="fk-corp__logo mb-4">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h2 class="fk-corp__headline">Admin Dashboard</h2>
                    <p class="fk-corp__sub">
                        This is the private admin area of my portfolio website, built to manage
                        my projects, messages, and site content in one place.
                    </p>

                    <ul class="fk-corp__features list-unstyled">
                        <li><i class="bi bi-check2-circle"></i> Built with Laravel, PHP and JavaScript</li>
                        <li><i class="bi bi-check2-circle"></i> Secure login and protected routes</li>
                        <li><i class="bi bi-check2-circle"></i> Manage projects and inquiries</li>
                    </ul>
                </div>
                <small class="fk-corp__copyright">&copy; {{ date('Y') }} Francis Kert D. Naz. All rights
                    reserved.</small>
            </aside>

            {{-- RIGHT: form --}}
            <section class="col-lg-6 fk-corp__panel">
                <div class="fk-corp__form-wrap">
                    <div class="mb-4">
                        <h3 class="fk-corp__title">Sign in</h3>
                        <p class="fk-corp__muted mb-0">Enter your credentials to access your account.</p>
                    </div>

                    <form id="adminLoginForm" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="login_counselor_email" class="form-label fk-corp__label">Email address</label>
                            <div class="fk-corp__field">
                                <i class="bi bi-envelope"></i>
                                <input type="email" class="form-control fk-corp__input" id="login_counselor_email"
                                    name="email" placeholder="name@company.com" autocomplete="username">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="login_counselor_password" class="form-label fk-corp__label">Password</label>
                            <div class="fk-corp__field">
                                <i class="bi bi-lock"></i>
                                <input type="password" class="form-control fk-corp__input" id="login_counselor_password"
                                    name="password" placeholder="Enter your password" autocomplete="current-password">
                                <button type="button" class="fk-corp__toggle" id="togglePassword"
                                    aria-label="Show password">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label fk-corp__muted" for="remember">Remember me</label>
                            </div>
                            <a href="#" class="fk-corp__link">Forgot password?</a>
                        </div>

                        <button type="submit" class="btn fk-corp__btn fk-corp__btn--primary w-100">
                            Sign in
                        </button>

                        <div class="fk-corp__divider"><span>or</span></div>
                    </form>

                    <p class="fk-corp__note">
                        <i class="bi bi-lock-fill"></i> Your connection is secure. Authorized users only.
                    </p>
                </div>
            </section>
        </div>
    </div>
</main>

@include('partials.__footer')