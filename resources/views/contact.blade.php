@extends('layouts.app')

@section('title', 'Contact | Fortune Tech')

@section('content')

<main>

  <!-- page title area start  -->
  <section class="page-title-area">
    <div class="container large">
      <div class="page-title-area-inner section-spacing-top">
        <div class="page-title-wrapper">
          <h2 class="page-title fade-anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">Contact</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- page title area end  -->

  <!-- contact area start  -->
  <section class="contact-area-contact-page">
    <div class="container large">
      <div class="contact-area-contact-page-inner section-spacing-top">
        <div class="section-header fade-anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
          <div class="section-title-wrapper">
            <div class="subtitle-wrapper">
              <span class="section-subtitle">Contact</span>
            </div>
            <div class="title-wrapper">
              <h2 class="section-title font-sequelsans-romanbody">Let’s drop us a line
                and get the project
                started.</h2>
            </div>
          </div>
        </div>
        <div class="section-content-wrapper fade-anim" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
          <div class="section-content">
            <div class="contact-mail">
              <p class="title">Get in touch</p>
              <p class="text">We’re excited to hear from you
                and let’s start something special
                together <br>
                <a href="mailTo:connect@fortunetechservices.com">connect@fortunetechservices.com</a>
              </p>
            </div>
            <div class="contact-social">
              <p class="title">Follow</p>
              <div class="social-links">
                <a href="#">Facebook</a>
                <a href="https://www.linkedin.com/company/fortune-tech-services">LinkedIn</a>
                <a href="#">Instagram</a>
              </div>
            </div>
          </div>
          <div class="contact-wrap">

            <form id="contact__form" method="POST" action="{{ route('contact.store') }}" autocomplete="on">
              @csrf
              <div class="contact-formwrap">

                <div class="contact-formfield">
                  <input type="text"
                    name="name"
                    placeholder="Name*"
                    autocomplete="name"
                    required>
                  <span class="error-message" style="color:red; display:none;"></span>
                </div>

                <div class="contact-formfield">
                  <input type="email"
                    name="email"
                    placeholder="Email*"
                    autocomplete="email"
                    required>
                  <span class="error-message" style="color:red; display:none;"></span>
                </div>

                <div class="contact-formfield">
                  <input type="tel"
                    name="phone"
                    placeholder="Phone*"
                    autocomplete="tel"
                    required>
                  <span class="error-message" style="color:red; display:none;"></span>
                </div>

                <div class="contact-formfield">
                  <input type="text"
                    name="company"
                    placeholder="Company*"
                    autocomplete="organization"
                    required>
                  <span class="error-message" style="color:red; display:none;"></span>
                </div>

                <div class="contact-formfield">
                  <select name="budget" required>
                    <option value="" disabled selected>Budget*</option>
                    <option value="5000-10000">5,000 - 10,000</option>
                    <option value="10000-15000">10,000 - 15,000</option>
                    <option value="15000-20000">15,000 - 20,000</option>
                    <option value="20000-25000">20,000 - 25,000</option>
                    <option value="25000+">25,000 - Above</option>
                  </select>
                  <span class="error-message" style="color:red; display:none;"></span>
                </div>

                <div class="contact-formfield">
                  <input type="text"
                    name="solution"
                    placeholder="Solution*"
                    autocomplete="off"
                    required>
                  <span class="error-message" style="color:red; display:none;"></span>
                </div>

                <div class="contact-formfield message">
                  <input type="text"
                    name="message"
                    placeholder="Message*"
                    autocomplete="off"
                    required>
                  <span class="error-message" style="color:red; display:none;"></span>
                </div>

              </div>

              <div class="submit-btn">
                <button type="submit" class="rr-btn">
                  <span class="btn-wrap">
                    <span class="text-one">Send Message</span>
                    <span class="text-two">Send Message</span>
                  </span>
                </button>
              </div>
            </form>

          </div>

        </div>
      </div>
  </section>
  <!-- contact area end  -->

</main>

<!-- Toastify -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<style>
  /* Placeholder red */
  input.error::placeholder,
  select.error {
    color: red !important;
  }

  input.error,
  select.error {
    border-color: red !important;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact__form');

    form.addEventListener('submit', function(e) {
      e.preventDefault();
      // Reset all previous errors
      form.querySelectorAll('input, select').forEach(el => {
        el.classList.remove('error');
      });

      // Validate fields one by one
      const fields = [{
          el: form.name,
          msg: 'Name is required'
        },
        {
          el: form.email,
          msg: 'Email is required',
          type: 'email'
        },
        {
          el: form.phone,
          msg: 'Phone is required',
          type: 'phone'
        },
        {
          el: form.company,
          msg: 'Company is required'
        },
        {
          el: form.budget,
          msg: 'Budget is required'
        },
        {
          el: form.solution,
          msg: 'Solution is required'
        },
        {
          el: form.message,
          msg: 'Message is required'
        },
      ];

      for (let field of fields) {
        const value = field.el.value.trim();
        if (value === '' || (field.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) ||
          (field.type === 'phone' && !/^[0-9]{7,15}$/.test(value))
        ) {
          field.el.classList.add('error');
          let errorText = field.msg;
          if (field.type === 'email' && value !== '' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
            errorText = 'Invalid email format';
          }
          if (field.type === 'phone' && value !== '' && !/^[0-9]{7,15}$/.test(value)) {
            errorText = 'Invalid phone number';
          }

          Toastify({
            text: errorText,
            duration: 6000,
            close: true,
            gravity: "top",
            position: "right",
            style: {
              background: "rgb(255 0 21 / 21%)", // dark red transparent
              color: "#9b000d", // text color
              fontWeight: "600",
              padding: "20px 50px",
              borderRadius: "12px",
              border: "1px solid #9b000d",
              boxShadow: "0 0 0 0"
            }
          }).showToast();
          field.el.focus();
          return; // Stop at first error
        }
      }

      // If all valid, submit via fetch
      const formData = new FormData(form);

      fetch(form.action, {
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
          },
          body: formData
        })
        .then(res => res.json())
        .then(data => {
          Toastify({
            text: data.message || "Form submitted successfully",
            duration: 6000,
            close: true,
            gravity: "top",
            position: "right",
            style: {
              background: "rgba(5, 27, 17, 0.8)", // dark green transparent
              color: "#75b798", // text color
              fontWeight: "600",
              padding: "20px 50px",
              borderRadius: "12px",
              border: "1px solid #75b798",
              boxShadow: "0 0 0 0"
            }
          }).showToast();
          form.reset();
        })
        .catch(err => {
          Toastify({
            text: "Something went wrong!",
            duration: 6000,
            close: true,
            gravity: "top",
            position: "right",
            style: {
              background: "rgb(255 0 21 / 21%)", // dark red transparent
              color: "#9b000d",
              fontWeight: "600",
              padding: "20px 50px",
              borderRadius: "12px",
              border: "1px solid #9b000d",
              boxShadow: "0 0 0 0"
            }
          }).showToast();
        });
    });
  });
</script>

<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contact__form');

    form.addEventListener('submit', function(e) {
        e.preventDefault(); // prevent normal submit

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if(data.message){
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: data.message,
                    confirmButtonText: 'OK'
                });
                form.reset(); // clear the form
            }
        })
        .catch(error => {
            console.error(error);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong! Please try again.',
            });
        });
    });
});
</script> -->


@endsection