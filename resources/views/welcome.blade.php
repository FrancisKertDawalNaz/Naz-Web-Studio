@include('partials.__header')

<main>
    @include('partials.__nav')

    <!-- Main Section -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm p-4" style="max-width: 420px; width: 100%;">
            <div class="text-center mb-4">

                <h4 class="fw-bold">ADMIN LOG IN</h4>
                <p class="text-muted small mb-0">
                    Welcome back! Please enter your credentials to continue.
                </p>
            </div>

            <form id="adminLoginForm">
                @csrf
                <div class="mb-3">
                    <label for="login_counselor_email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="login_counselor_email" name="email"
                        placeholder="Enter your email">
                </div>

                <div class="mb-2">
                    <label for="login_counselor_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="login_counselor_password" name="password"
                        placeholder="Enter your password">
                </div>

                <div class="d-flex justify-content-end mb-3">
                    <a href="#" class="small text-decoration-none">Forgot password?</a>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
                <a href="/signup" class="btn btn-outline-primary w-100 mt-3">Sign up</a>
            </form>
        </div>
    </div>
</main>

@include('partials.__footer')