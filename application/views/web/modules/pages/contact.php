<section
  class="breadcrumb_area"
  style="background: url(<?php echo base_url() ?>assets/web/images/bg-layer.jpg)">
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumb_text">
            <h1>Contact Us</h1>
            <ul>
              <li>
                <a href="#"><i class="fas fa-home" aria-hidden="true"></i> home</a>
              </li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--=====================================
        CONTACT US START
    =====================================-->
<section class="contact mt_95 xs_mt_45">
  <div class="container">
    <div class="row">
      <div
        class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp d-flex"
        data-wow-duration="1s">
        <div class="contact_info w-100">
          <span><i class="fas fa-map-marker-alt"></i></span>
          <h3>Our Location</h3>
          <p>
            I – 133, MMDA Colony Main Rd, SIDCO Industrial Estate, MMDA
            Colony, Arumbakkam, Chennai, Tamil Nadu 600106
          </p>
        </div>
      </div>
      <div
        class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp d-flex"
        data-wow-duration="1s">
        <div class="contact_info w-100">
          <span><i class="fas fa-envelope"></i></span>
          <h3>Email Us</h3>
          <p>uniquehairgrow@gmail.com</p>
        </div>
      </div>
      <div
        class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp d-flex"
        data-wow-duration="1s">
        <div class="contact_info w-100">
          <span><i class="fas fa-phone-alt"></i></span>
          <h3>Call Us</h3>
          <p>089250 53339</p>
          <p>089250 63339
          </p>
        </div>
      </div>
      <div
        class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp d-flex"
        data-wow-duration="1s">
        <div class="contact_info w-100">
          <span><i class="fas fa-clock"></i></span>
          <h3>Working Hours</h3>
          <p>Monday to Sunday :</p>
          <p>10:00am - 08:00pm</p>
        </div>
      </div>
    </div>
    <div class="row mt_120 xs_mt_70">
      <div class="col-xl-5 wow fadeInUp" data-wow-duration="1s">
        <div class="contact_map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7773.119543751807!2d80.212168!3d13.06367!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52673f4ee2533f%3A0x499066d1fc56cb4f!2sUnique%20Hair%20Gro%20Hair%20transplant%20Clinic!5e0!3m2!1sen!2sin!4v1727851546501!5m2!1sen!2sin"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-lg-7 m-auto wow fadeInUp" data-wow-duration="1s">
        <form id="contactForm" class="contact_form">
          <h2>Do You have Any Questions?</h2>
          <div class="row">
            <div class="col-xl-6">
              <input type="text" name="name" placeholder="Your Name" />
              <span class="error text-danger" id="name_error"></span>
            </div>
            <div class="col-xl-6">
              <input type="email" name="email" placeholder="Your Email" />
              <span class="error text-danger" id="email_error"></span>
            </div>
            <div class="col-xl-6">
              <input type="text" name="phone_number" placeholder="Your Phone" />
              <span class="error text-danger" id="phone_number_error"></span>
            </div>
            <div class="col-xl-6">
              <input type="text text-danger" name="subject" placeholder="Subject" />
            </div>
            <div class="col-xl-12">
              <textarea
                rows="7"
                name="message"
                placeholder="Write something Here"></textarea>
              <div class="g-recaptcha mb-3" data-sitekey="6LdSQz4qAAAAAAeyDrY6zgvpC9bUsDU0DbP718bQ"></div>
              <button type="submit" class="common_btn">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script>
  document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    document.querySelectorAll('.error').forEach((span) => {
      span.innerText = '';
    });

    fetch('Web/contact_save', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          Swal.fire({
            title: "Success",
            text: data.message,
            icon: "success",
            confirmButtonText: "Okay",
            allowOutsideClick: false
          }).then(() => {
            location.reload();
          });
        } else {
          if (data.errors) {
            if (data.errors.name) {
              document.getElementById('name_error').innerText = data.errors.name;
            }
            if (data.errors.email) {
              document.getElementById('email_error').innerText = data.errors.email;
            }
            if (data.errors.phone_number) {
              document.getElementById('phone_number_error').innerText = data.errors.phone_number;
            }
          } else {
            Swal.fire({
              title: "Error",
              text: data.message,
              icon: "error",
              confirmButtonText: "Okay"
            });
          }
        }
      })
      .catch(error => {
        Swal.fire({
          title: "Error",
          text: "Something went wrong!",
          icon: "error",
          confirmButtonText: "Okay"
        });
      });
  });
</script>
<!--=====================================
        CONTACT US END
    =====================================-->