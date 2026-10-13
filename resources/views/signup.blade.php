@include('partials.__header')

<main>
    @include('partials.__nav')

    <!-- Main Section -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm p-4" style="max-width: 420px; width: 100%;">
            <div class="text-center mb-4">

                <h4 class="fw-bold">REGISTER</h4>
                <p class="text-muted small mb-0">
                    Welcome! Please enter your details to create an account.
                </p>
            </div>

            <form id="registerForm">
                @csrf

                <div class="mb-2">
                    <label for="first_name" class="form-label">First name</label>
                    <input type="first_name" class="form-control" id="first_name" name="first_name"
                        placeholder="Enter your first name">
                </div>

                <div class="mb-2">
                    <label for="middle_name" class="form-label">Middle name</label>
                    <input type="middle_name" class="form-control" id="middle_name" name="middle_name"
                        placeholder="Enter your middle name">
                </div>

                <div class="mb-2">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="last_name" class="form-control" id="last_name" name="last_name"
                        placeholder="Enter your last name">
                </div>

                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>

                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Enter password">
                </div>

                <div class="mb-2">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="password_confirmation"
                        placeholder="Confirm your password">
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>
                <a href="/login" class="btn btn-outline-primary w-100 mt-3">Sign in</a>
            </form>
        </div>
    </div>
</main>

@include('partials.__footer')