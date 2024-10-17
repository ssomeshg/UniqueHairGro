<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="Utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <title>UniqueHairGro || Chennai Best Hair Transplant Clinic</title>
    <?php if ($page == 'blog_view' && isset($meta)): ?>
        <meta name="keywords" content="<?= $meta['meta_tag']; ?>">
        <meta name="description" content="<?= $meta['meta_description']; ?>">
        <meta property="og:title" content="<?= $meta['meta_title']; ?>" />
        <meta property="og:description" content="<?= $meta['meta_description']; ?>" />
    <?php else: ?>
        <meta name="keywords" content="default, keywords">
        <meta name="description" content="Default description of the site">
        <meta property="og:title" content="Default Title" />
        <meta property="og:description" content="Default description of the site" />
    <?php endif; ?>

    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/web/images/favicon.png" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/spacing.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/venobox.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/slick.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/pointer.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/animated_barfiller.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/nice-select.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/animate.css" />

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/responsive.css" />

    <link
        rel="stylesheet"
        href="https://unpkg.com/beerslider/dist/BeerSlider.css" />
</head>

<body>
    <!--=====================================
        TOPBAR START
    =====================================-->
    <section class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-9">
                    <ul class="topbar_left d-flex flex-wrap">
                        <li>
                            <a href="mailto:uniquehairgrow@gmail.com"><i class="fas fa-envelope"></i> uniquehairgrow@gmail.com</a>
                        </li>
                        <li>
                            <a href="callto:+918925053339"><i class="fas fa-phone-alt"></i> +91 89250 53339</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-3">
                    <ul class="topbar_right d-flex flex-wrap">
                        <li>
                            <a href="https://www.facebook.com/uniquehairgrow/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCVohyO_fYqX_tGanX08SdRQ/featured" target="_blank"><i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/unique_hairgroclinic/?igshid=YmMyMTA2M2Y%3D" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        TOPBAR END
    =====================================-->

    <!--=====================================
        MENU START
    =====================================-->
    <nav class="navbar navbar-expand-lg main_menu">
        <div class="container d-flex justify-content-between">
            <div>
                <a class="navbar-brand" href="<?= base_url() . '' ?>">
                    <img
                        src="<?php echo base_url() ?>assets/web/images/UHT-Logo-01.png"
                        alt="UHT-Logo"
                        style="width: 100%; height: 100%" />
                </a>
            </div>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fal fa-bars menu_icom"></i>
                <i class="fal fa-times menu_close"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url() . '' ?>">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'about_us' ?>">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Treatments <i class="far fa-angle-down"></i></a>
                        <ul class="droap_menu">
                            <li><a href="<?= base_url() . 'hairtransplant' ?>">Hair Transplant</a></li>
                            <li><a href="<?= base_url() . 'dandruff_treatment' ?>">Dandruff Treatment</a></li>
                            <li><a href="<?= base_url() . 'prp_hair_loss_treatment' ?>">PRP for Hair Loss</a></li>
                            <li><a href="<?= base_url() . 'fue_hair_treatment' ?>">Fue Hair Treatment</a></li>
                            <li><a href="<?= base_url() . 'beard_transplant' ?>">Beard Treatment</a></li>
                            <li><a href="<?= base_url() . 'chemical_peels' ?>">Chemical Peels</a></li>
                            <li><a href="<?= base_url() . 'female_hair_transplant' ?>">Female Hair Transplant</a></li>
                            <li><a href="<?= base_url() . 'gfc_hair_treatment' ?>">GFC Hair Treatment</a></li>
                            <li><a href="<?= base_url() . 'skin_care_treatment' ?>">Skin Care Treatment</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'before_after' ?>">Before & After Result</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'hair_transplant_cost' ?>">Hair Transplant Cost </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'blog' ?>">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'contact' ?>">contact</a>
                    </li>
                </ul>
                <ul class="menu_right d-flex flex-wrap">
                    <li>
                        <a
                            class="reservation"
                            href="#"
                            data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Book Appointment</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="reservation">
        <div
            class="modal fade"
            id="staticBackdrop"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">
                            make an appointment
                        </h1>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="appointmentForm" class="reservation_form">
                            <input
                                name="name"
                                class="reservation_input"
                                type="text"
                                placeholder="Name" />
                            <span class="error text-danger" id="name_error"></span>
                            <input
                                name="phone_number"
                                class="reservation_input"
                                type="text"
                                placeholder="Phone" />
                            <span class="error text-danger" id="phone_number_error"></span>
                            <input
                                name="address"
                                class="reservation_input"
                                type="text"
                                placeholder="address" />
                            <select name="service" class="reservation_input" id="select_js">
                                <option value="select service">select service</option>
                                <option value="Hair Transplant">Hair Transplant</option>
                                <option value="Dandruff Treatment">Dandruff Treatment</option>
                                <option value="PRP for Hair Loss">PRP for Hair Loss</option>
                                <option value="Fue Hair Treatment">Fue Hair Treatment</option>
                                <option value="Beard Treatment">Beard Treatment</option>
                                <option value="Chemical Peels">Chemical Peels</option>
                                <option value="Female Hair Transplant">Female Hair Transplant</option>
                                <option value="GFC Hair Treatment">GFC Hair Treatment</option>
                            </select>
                            <input name="appointment_date" class="reservation_input" type="date" />
                            <select name="appointment_time" class="reservation_input" id="select_js2">
                                <option value="">select time</option>
                                <option value="08.00 am to 09.00 am">08.00 am to 09.00 am</option>
                                <option value="10.00 am to 11.00 am">10.00 am to 11.00 am</option>
                                <option value="12.00 pm to 01.00 pm">12.00 pm to 01.00 pm</option>
                                <option value="02.00 pm to 03.00 pm">02.00 pm to 03.00 pm</option>
                                <option value="04.00 pm to 05.00 pm">04.00 pm to 05.00 pm</option>
                            </select>
                            <textarea name="message" rows="5" placeholder="Message"></textarea>
                            <div class="g-recaptcha mb-3" data-sitekey="6LdSQz4qAAAAAAeyDrY6zgvpC9bUsDU0DbP718bQ"></div>
                            <button class="common_btn" type="submit">submit now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById("appointmentForm").addEventListener("submit", function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            document.querySelectorAll('.error').forEach((span) => {
                span.innerText = '';
            });

            fetch('Web/appointment_save', {
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
        MENU END
    =====================================-->