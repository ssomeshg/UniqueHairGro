    <!--===================================== 
        BANNER START
    =====================================-->
    <section class="banner">
      <div class="row banner_slider">
        <?php foreach ($banner as $row): ?>
        <div class="col-12">
          <div
            class="single_slider"
            style="background: url(<?php echo base_url('uploads/banner/' . $row->image); ?>)"
          >
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-md-8">
                  <div
                    class="single_slider_text wow fadeInUp"
                    data-wow-duration="1s"
                  >
                    <h5><?= $row->title ?></h5>
                    <h1>
                      <?= $row->heading ?>
                      <span>Hair Transplants!!!</span>
                    </h1>
                    <p>
                      <?= $row->content ?>
                    </p>
                    <ul class="d-flex flex-wrap">
                      <li>
                        <a class="common_btn" href="#">get started</a>
                      </li>
                      <li>
                        <a
                          class="venobox play_btn"
                          data-autoplay="true"
                          data-vbtype="video"
                          href="<?= $row->video_link ?>"
                        >
                          <i class="fas fa-play"></i>
                        </a>
                        <span>Intro Video</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach ?>
        <!-- <div class="col-12">
          <div
            class="single_slider"
            style="background: url(<?php echo base_url() ?>assets/web/images/banner_img_2.jpg)"
          ></div>
        </div> -->
        <!-- <div class="col-12">
          <div
            class="single_slider"
            style="background: url(images/banner_img_3.jpg)"
          >
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-md-8">
                  <div
                    class="single_slider_text wow fadeInUp"
                    data-wow-duration="1s"
                  >
                    <h5>welcome To Our Spa Salon</h5>
                    <h1>
                      Make Your Look Even More Perfect With Our
                      <span>Salon.</span>
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipiscing elit sed
                      do eiusmt mod tempor incididunt ut labore et dolore magna
                      aliqua.
                    </p>
                    <ul class="d-flex flex-wrap">
                      <li>
                        <a class="common_btn" href="#">get started</a>
                      </li>
                      <li>
                        <a
                          class="venobox play_btn"
                          data-autoplay="true"
                          data-vbtype="video"
                          href="https://youtu.be/wy74iRBqOzQ?si=AY12yBaL5dQ9fv2T"
                        >
                          <i class="fas fa-play"></i>
                        </a>
                        <span>Intro Video</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </section>
    <!--=====================================
        BANNER END
    =====================================-->

    <!--=====================================
        ABOUT START
    =====================================-->
    <section class="about mt_120 xs_mt_70">
      <div class="container">
        <div class="row">
          <div
            class="col-xl-6 col-md-10 col-lg-6 wow fadeInUp m-auto"
            data-wow-duration="1s"
          >
            <div class="row">
              <div class="col-12">
                <div class="section_heading heading_left mb_25">
                  <h5>About Unique HairGro</h5>
                </div>
              </div>
              <div class="col-12">
                <div class="about_text">
                  <div class="about_text_center">
                    <p>
                      <b> Unique Hair Grow Hair Transplant Clinic</b> is
                      well-known for providing the
                      <b>best hair transplant in Chennai</b>. We have a strong
                      base of satisfied customers who have noticed proven
                      benefits after treatment. Please browse the before and
                      after images to get a correct idea of the quality of hair
                      transplant services we provide.
                    </p>
                    <!-- <div class="about_text_center_user d-flex flex-wrap">
                      <div class="about_text_center_user_img">
                        <img
                          src="images/about_small_img.png"
                          alt="about"
                          class="img-fluid w-100"
                        />
                      </div>
                      <div class="about_text_center_user_text">
                        <h3>
                          David Smith <span>(CEO Of Banfax Spa Salon)</span>
                        </h3>
                        <div
                          class="about_text_center_user_call d-flex flex-wrap"
                        >
                          <span><i class="fas fa-phone-alt"></i></span>
                          <p>
                            Call For Booking Appointment details:
                            <a href="callto:1234567890">+435 6789 4321</a>
                          </p>
                        </div>
                      </div>
                    </div> -->
                  </div>
                  <p class="">
                    Our clinic is located very close to koyambedu. 133 MMDA
                    Colony Main Rd, SIDCO Industrial Estate, MMDA Colony,
                    Arumbakkam, Chennai, Tamil Nadu 600106.
                  </p>

                  <a class="common_btn mt_25" href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
            <div class="about_img">
              <a
                class="venobox"
                data-autoplay="true"
                data-vbtype="video"
                href="https://youtu.be/wy74iRBqOzQ?si=AY12yBaL5dQ9fv2T"
              >
                <i class="fas fa-play"></i>
              </a>
              <img
                src="<?php echo base_url() ?>assets/web/images/about_img_1.jpg"
                alt="about us"
                class="img-fluid-100 w-100 large_img_1"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================
        ABOUT END
    =====================================-->

    <!--=====================================
        CATEGORIES START
    =====================================-->
    <section
      class="services mt_115 xs_mt_70 mt-5"
      style="background: url(<?php echo base_url() ?>assets/web/images/background_shapes.jpg); margin-top: 50px"
    >
      <div class="container">
        <div class="row">
          <div
            class="col-xl-7 col-lg-8 col-md-10 m-auto wow fadeInUp"
            data-wow-duration="1s"
          >
            <div class="section_heading mb_35">
              <h5>Technique and Services</h5>
              <h3>Our Services</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div
            class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp about_content d-flex"
            data-wow-duration="1s"
          >
            <div class="single_categories">
              <span>
                <img
                  src="<?php echo base_url() ?>assets/web/images/category_icon_1.png"
                  alt="category"
                  class="img-fluid w-100"
                />
              </span>
              <h4>Hair Transplant</h4>
              <p>
                Everyone wants to have attractive looks, a healthy looking body,
                and full and lush hair. In many cases, pollution and stress
                cause serious hair loss. It is estimated that more than 60% of
                men and 10% of women suffer from hair loss. Most people are
                concerned about balding nowadays, and the best treatment is to
                get a hair transplant.
              </p>
            </div>
          </div>
          <div
            class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp about_content d-flex"
            data-wow-duration="1s"
          >
            <div class="single_categories">
              <span>
                <img
                  src="<?php echo base_url() ?>assets/web/images/category_icon_2.png"
                  alt="category"
                  class="img-fluid w-100"
                />
              </span>
              <h4>Dandruff Treatment</h4>
              <p>
                Dandruff is mainly caused due to dry scalp skin, but it’s also a
                major reason behind excessive hair loss. If you have tried all
                home remedies but still facing an issue, please connect with us
                for the best advice based on your skin type.
              </p>
            </div>
          </div>
          <div
            class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp about_content d-flex"
            data-wow-duration="1s"
          >
            <div class="single_categories">
              <span>
                <img
                  src="<?php echo base_url() ?>assets/web/images/category_icon_3.png"
                  alt="category"
                  class="img-fluid w-100"
                />
              </span>
              <h4>PRP for Hair loss</h4>
              <p>
                It’s platelet-rich plasma therapy, a three-step process in which
                we collect your blood from one area, process it and inject it
                into your scalp. Increasing blood circulation in the scalp or
                affected area promotes hair growth and thickens your hair. The
                impact would last 18 to 24 months, and this treatment is best
                for those who don’t want to undergo a complete hair transplant.
              </p>
            </div>
          </div>
          <div
            class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp about_content d-flex"
            data-wow-duration="1s"
          >
            <div class="single_categories">
              <span>
                <img
                  src="<?php echo base_url() ?>assets/web/images/category_icon_4.png"
                  alt="category"
                  class="img-fluid w-100"
                />
              </span>
              <h4>FUE Hair Transplant</h4>
              <p>
                Do you have a busy schedule and cannot take a week out for
                treatment? Then the best-recommended method is an FUE hair
                transplant. The primary benefit of this technique is that it
                doesn’t leave any scar marks in the donor area. Also, it heals
                quickly within 2-3 days. The method is pretty effective and
                famous these days.
              </p>
            </div>
          </div>
          <div
            class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp about_content d-flex"
            data-wow-duration="1s"
          >
            <div class="single_categories">
              <span>
                <img
                  src="<?php echo base_url() ?>assets/web/images/category_icon_5.png"
                  alt="category"
                  class="img-fluid w-100"
                />
              </span>
              <h4>Beard Transplant</h4>
              <p>
                Most people dream of getting that perfect beard but never
                achieve that with natural oils and remedies. Don’t worry., We
                can help you with the transplant. Our surgeons will shape your
                new beard in the exact line you requested and give you a look
                you have always dreamed of.
              </p>
            </div>
          </div>
          <div
            class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp about_content d-flex"
            data-wow-duration="1s"
          >
            <div class="single_categories">
              <span>
                <img
                  src="<?php echo base_url() ?>assets/web/images/category_icon_6.png"
                  alt="category"
                  class="img-fluid w-100"
                />
              </span>
              <h4>Chemical Peeling</h4>
              <p>
                A simple process that helps eliminate dead skin on your scalp
                that hinders hair growth. We use various techniques to conduct
                the process but always take care of the intensity because harsh
                chemical peeling promotes hair fall
              </p>
            </div>
          </div>
          <div
            class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp about_content d-flex"
            data-wow-duration="1s"
          >
            <div class="single_categories">
              <span>
                <img
                  src="<?php echo base_url() ?>assets/web/images/category_icon_7.png"
                  alt="category"
                  class="img-fluid w-100"
                />
              </span>
              <h4>Female Hair Transplant</h4>
              <p>
                Whether a hair transplant is performed on a male or female, the
                procedure will be similar. At Unique Hair Gro Hair Transplant
                Clinic, Koyambadu, Chennai, India with modern technology, women
                undergoing hair transplant procedures don't have to shave off
                their heads or get their hair trimmed at any stage.
              </p>
            </div>
          </div>
          <div
            class="col-xl-3 col-sm-6 col-lg-4 wow fadeInUp about_content d-flex"
            data-wow-duration="1s"
          >
            <div class="single_categories">
              <span>
                <img
                  src="<?php echo base_url() ?>assets/web/images/category_icon_8.png"
                  alt="category"
                  class="img-fluid w-100"
                />
              </span>
              <h4>GFC Hair Treatment</h4>
              <p>
                Unique Hair Gro Hair Transplant Clinic uses the latest
                techniques and equipment, and all treatments are conducted by
                expert doctors (not technicians) to provide safe, accurate and
                long lasting results. At Unique Hair Gro Hair Transplant Clinic,
                we use only the best, disposable sterile equipment to ensure
                there is no cross-contamination.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================
        CATEGORIES END
    =====================================-->

    <!--=====================================
        SERVICES START
    =====================================-->
    <section
      class="services mt_115 xs_mt_70"
      style="background: url(<?php echo base_url() ?>assets/web/images/background_shapes.jpg)"
    >
      <div class="container">
        <div class="row">
          <div
            class="col-xl-7 col-lg-8 col-md-10 wow fadeInUp"
            data-wow-duration="1s"
          >
            <div class="section_heading heading_left mb_35">
              <h5>Hair Transplant Chennai Reviews</h5>
              <h3>Patient Testimonials</h3>
            </div>
          </div>
        </div>
        <div class="row testi_slider wow fadeInUp" data-wow-duration="1s">
          <?php foreach ($video as $row): ?>
          <div class="col-xl-4">
            <div class="single_testimonial p-0">
              <div
                class="single_testimonial_text position-relative"
                style="height: 250px; overflow: hidden; border-radius: 10px"
              >
                <div
                  class="bg-black position-absolute w-100 h-100 opacity-50"
                ></div>
                <div class="position-absolute top-50 start-50 translate-middle">
                  <a
                    class="venobox vbox-item veno-vdo"
                    data-autoplay="true"
                    data-vbtype="video"
                    href="<?= $row->video_id; ?>"
                  >
                    <i class="fas fa-play" aria-hidden="true"></i>
                  </a>
                </div>
                <img
                  src="<?php echo base_url('uploads/video/' . $row->image); ?>"
                  alt=""
                  style="height: 250px; width: 100%; object-fit: cover"
                />
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <a class="common_btn" href="#">Show All</a>


        <!--=== before and after  ====-->
        <div class="row mt-5">
          <div
            class="col-xl-7 col-md-10 m-auto wow fadeInUp"
            data-wow-duration="1s"
          >
            <div class="section_heading mb_35">
              <h5>Hair Transplant Chennai Before & After</h5>
            </div>
          </div>
        </div>
        <div class="row mt-2 pt-0 d-sm-flex" data-wow-duration="1s">
          <?php foreach ($before_after as $row): ?>
          <div class="col-xl-4">
            <div class="single_testimonial p-0 mt-2">
              <div style="height: 250px; overflow: hidden; border-radius: 10px">
                <div
                  id="slider"
                  class="beer-slider"
                  data-beer-label="before"
                  style="height: 100%;"
                >
                  <img
                    src="<?php echo base_url('uploads/before_after/' . $row->before_image); ?>"
                    alt=""
                    class="h-100"
                    style="object-fit: cover; object-position: right;"
                  />
                  <div class="beer-reveal" data-beer-label="after">
                    <img
                      src="<?php echo base_url('uploads/before_after/' . $row->after_image); ?>"
                      alt=""
                      class="h-100"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!--=====================================
        SERVICES END
    =====================================-->

    <div class="award mt_115 xs_mt_70">
      <div class="container">
          <div class="row">
              
              <div class="col-xl-6 col-lg-6 col-md-9 wow fadeInUp" data-wow-duration="1s">
                  <div class="award_img">
                      <img src="<?php echo base_url() ?>assets/web/images/UHT-Hair-Transplant-Cost-1024x683.webp" alt="award" class="img-fluid w-100 shadow">
                    
                  </div>
              </div>
              <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                  <div class="award_text">
                      <h4>Hair transplant cost</h4>
                      <p>We understand the pain of losing hair and getting those annoying comments from people. However, the cost of beauty treatments is skyrocketing with time making it unaffordable for common people. Our clinic is behind in solving this problem.

                        We aim to make hair transplants affordable with strong values and 21 highly experienced doctors. Experts run the clinic in the industry, and you will experience the best hair transplant in Chennai at much competitive price.</p>
                      <ul>
                          <li>
                              <h3>Type of surgery required.</h3>
                              
                          </li>
                          <li>
                              <h3>Number of sittings needed for complete treatment.</h3>
                             
                          </li>
                          <li>
                              <h3>Other factors like your gender, density of hairs needed, etc</h3>
                            
                          </li>
                          
                      </ul>
                      <p>After figuring out all these factors, we will inform you of a budget. It will be more or less based on the parameters mentioned above but be assured that our treatment is much more affordable than others.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>


  

    <!--=====================================
        WORK START
    =====================================-->
    <section class="work mt_115 xs_mt_70">
      <div class="container">
          <div class="row">
              <div class="col-xl-7 col-lg-8 col-md-10 m-auto wow fadeInUp" data-wow-duration="1s">
                  <div class="section_heading mb_85 xs_mb_30">
                      <h5>What makes us different from others?</h5>
                      <h3>We will provide you with the best advice and a solution!</h3>
                  </div>
              </div>
          </div>
          <div class="work_text_area">
              <div class="row">
                  <div class="col-xl-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                      <div class="work_single first">
                          <h4>Expertise</h4>
                          <p>Experienced doctors offering affordable, high-quality treatment.</p>
                      </div>
                  </div>
                  <div class="col-xl-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                      <div class="work_single second">
                          <h4>Reputation</h4>
                          <p>Accessible, trusted, with advanced facilities and care.</p>
                      </div>
                  </div>
                  <div class="col-xl-4 col-md-4 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                      <div class="work_single third">
                          <h4>Safety</h4>
                          <p>We ensure safe transplants with necessary precautions.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--=====================================
      WORK END
  =====================================-->
     <!--=====================================
        FAQ START
    =====================================-->
    <section class="faq mt_120 xs_mt_70">
      <div class="container">
        <div class="row">
          <div
            class="col-xl-7 col-lg-8 col-md-10 m-auto wow fadeInUp"
            data-wow-duration="1s"
          >
            <div class="section_heading">
              <h5>Frequently Asked Questions</h5>
            </div>
          </div>
        </div>
        <div class="row">
          <div
            class="col-xl-8 col-lg-9 m-auto wow fadeInUp"
            data-wow-duration="1s"
          >
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                  >
                    Are the transplanted hairs permanent?
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      Yes, once natural growth starts, it continues to grow as
                      you age. But similar to natural hairs, they may gradually
                      stop producing as many hairs as they used to.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                  >
                    Do hair transplants look natural?
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      Yes, because the transplanted hairs will fall out within a
                      few weeks and leave you with naturally growing hair that
                      even your barber won’t be able to identify.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                  >
                    How long will the FUE surgery take?
                  </button>
                </h2>
                <div
                  id="collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      Hair transplant surgery will take 2 days and 4 to 6 hours
                      per day with regular meal intervals like breakfast, lunch
                      and dinner.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree1">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree1"
                    aria-expanded="false"
                    aria-controls="collapseThree1"
                  >
                    Does PRP regrow hair permanently?
                  </button>
                </h2>
                <div
                  id="collapseThree1"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree1"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      Unlike FUT or FUE, the results derived from PRP are not
                      permanent, and you must undergo the same treatment
                      regularly. Primarily within every six months.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree2">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree2"
                    aria-expanded="false"
                    aria-controls="collapseThree2"
                  >
                    Is a chemical peel safe?
                  </button>
                </h2>
                <div
                  id="collapseThree2"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingThree2"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <p>
                      There is nothing to worry about because we use natural
                      acids to treat your skin, performed by experienced
                      doctors. There is minimal risk of failures; even if
                      side-effect happens, they disappear within a few days.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=====================================
      FAQ END
  =====================================-->

