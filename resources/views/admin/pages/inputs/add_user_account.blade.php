@include('admin.partials.__header')
@include('admin.partials.__nav')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add user account</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item active">Add user account</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body p-3">
                <form id="add_user_account_form" class="was-validated">
                    <div class="row g-2 mb-3">

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


                        <input type="hidden" name="user_type" id="user_type" value="2">

                        <!-- Submit -->
                        <div class="col-12 text-end mt-3">
                            <button type="submit" class="btn btn-primary">Add Account</button>
                        </div>

                </form>
            </div>
        </div>
    </section>

</main>

@include('admin.partials.__footer')