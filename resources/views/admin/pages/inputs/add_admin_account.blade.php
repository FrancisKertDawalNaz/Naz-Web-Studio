@include('admin.partials.__header')
@include('admin.partials.__nav')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Admin Account</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Add Admin Account</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body p-4">
                <form id="add_admin_account_form" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="row g-3">

                        <div class="col-md-4">
                            <label for="first_name" class="form-label">First name</label>
                            <input type="first_name" class="form-control" id="first_name" name="first_name"
                                placeholder="Enter first name">
                        </div>

                        <div class="col-md-4">
                            <label for="middle_name" class="form-label">Middle name</label>
                            <input type="middle_name" class="form-control" id="middle_name" name="middle_name"
                                placeholder="Enter middle name">
                        </div>

                        <div class="col-md-4">
                            <label for="last_name" class="form-label">Last name</label>
                            <input type="last_name" class="form-control" id="last_name" name="last_name"
                                placeholder="Enter last name">
                        </div>

                        <div class="col-md-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                                required>
                            <div class="invalid-feedback">Valid email is required.</div>
                        </div>

                        <!-- Address -->
                        <div class="col-md-4">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address"
                                placeholder="Enter address">
                        </div>


                        <input type="hidden" name="user_type" id="user_type" value="1">

                        <!-- Submit -->
                        <div class="col-12 text-end mt-3">
                            <button type="submit" class="btn btn-primary">Add Account</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

@include('admin.partials.__footer')