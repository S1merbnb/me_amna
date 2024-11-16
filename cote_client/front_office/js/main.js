(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').css('top', '0px');
        } else {
            $('.sticky-top').css('top', '-100px');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    
})(jQuery);

function filterCourses(category, button) {
    document.querySelectorAll('.btn-outline-primary').forEach(btn => btn.classList.remove('active'));
    
    button.classList.add('active');
    
    const courses = document.querySelectorAll('.course-item');

    courses.forEach(course => {
        if (category === 'all' || course.parentElement.getAttribute('data-category') === category) {
            course.parentElement.style.display = 'block';
        } else {
            course.parentElement.style.display = 'none';
        }
    });
}


document.getElementById("signupForm").addEventListener("submit", function (event) {
    event.preventDefault();

    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document.getElementById("confirm_password").value.trim();
    const errorMessage = document.getElementById("error-message");

    errorMessage.style.display = "none";
    errorMessage.innerHTML = "";

    // Name validation
    if (name === "") {
        errorMessage.innerHTML = "Full Name is required.";
        errorMessage.style.display = "block";
        return;
    }

    // Email validation
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        errorMessage.innerHTML = "Please enter a valid email address.";
        errorMessage.style.display = "block";
        return;
    }

    // Password length validation
    if (password.length < 6) {
        errorMessage.innerHTML = "Password must be at least 6 characters.";
        errorMessage.style.display = "block";
        return;
    }

    // Password match validation
    if (password !== confirmPassword) {
        errorMessage.innerHTML = "Passwords do not match.";
        errorMessage.style.display = "block";
        return;
    }

    // If all validations pass, you can proceed to submit the form data
    alert("Account created successfully!");
    // You can now submit the form data to your server here.
    // e.g., using AJAX to post data to the backend.
    this.submit();
});



    // Trigger file input when image is clicked
    document.getElementById('profileImagePreview').onclick = function() {
        document.getElementById('profileImage').click();
    };

    // Preview selected profile image
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function() {
            document.getElementById('profileImagePreview').src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    // Validate form: check if passwords match
    function validateForm(event) {
        event.preventDefault();
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        const passwordError = document.getElementById('passwordError');
        
        if (password !== confirmPassword) {
            passwordError.classList.remove('d-none');
        } else {
            passwordError.classList.add('d-none');
            alert('Settings saved successfully!');
            // Submit form or add form submission logic here
        }
    }