$("#adminLoginForm").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    showLoading();
    $.ajax({
        url: "/loginsubmit",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            hideLoading();
            global_showalert(
                response.message,
                "Login Success",
                "blue",
                response.redirect,
            );
        },
        error: function (xhr) {
            hideLoading();
            if (xhr.status === 409) {
                global_showalert(
                    xhr.responseJSON.message,
                    "Warning!",
                    "orange",
                );
            } else {
                let response = JSON.parse(xhr.responseText);
                let errorMessage = "An error occurred";
                if (response.errors) {
                    errorMessage = "";
                    for (let errorKey in response.errors) {
                        errorMessage += response.errors[errorKey][0] + "\n";
                    }
                }
                global_showalert(errorMessage, "Alert!", "red");
            }
        },
    });
});

$(document).on("submit", "#registerForm", function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    // Show loading indicator
    showLoading();
    $.ajax({
        type: "POST",
        url: "/registersubmit",
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            hideLoading();
            $("#registerForm")[0].reset();
            global_showalert(response.message, "Congrats", "blue", "/login");
            // Redirect to login page after displaying the message
        },
        error: function (xhr) {
            hideLoading();
            let response = JSON.parse(xhr.responseText);
            let errorMessage = "An error occurred";
            if (response.errors) {
                errorMessage = "";
                for (let errorKey in response.errors) {
                    errorMessage += response.errors[errorKey][0] + "\n";
                }
            }
            global_showalert(errorMessage, "Alert!", "red");
        },
    });
});

document
    .getElementById("togglePassword")
    .addEventListener("click", function () {
        const input = document.getElementById("login_counselor_password");
        const icon = this.querySelector("i");
        const show = input.type === "password";
        input.type = show ? "text" : "password";
        icon.className = show ? "bi bi-eye-slash" : "bi bi-eye";
        this.setAttribute(
            "aria-label",
            show ? "Hide password" : "Show password",
        );
    });
