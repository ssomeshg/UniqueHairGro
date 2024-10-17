
    <section class="breadcrumb_area" style="background: url(<?php echo base_url() ?>assets/web/images/bg-layer.jpg);">
        <div class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text">
                            <h1>before-after</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home" aria-hidden="true"></i> home</a></li>
                                <li><a href="#">Before&After</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        GALLERY 2 START
    =====================================-->
    <section class="gallery_page mt_65 xs_mt_60">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 m-auto wow fadeInUp" data-wow-duration="1s">
                    <div class="section_heading_2 mb_25">
                        <h5>UniqueHairGro</h5>
                        <h3>Hair Treatment Chennai Before & After Results</h3>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <?php foreach($before_after as $row): ?>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="gallery_item">
                        <a class="venobox" data-gall="gallery01" href="<?php echo base_url('uploads/before_after/' . $row->image); ?>">
                            <img src="<?php echo base_url('uploads/before_after/' . $row->image); ?>" alt="gallery1" class="img-fluid w-100">

                            <span><i class="fas fa-eye"></i></span>
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="gallery_item">
                        <a class="venobox" data-gall="gallery01" href="images/UHT-Interior-2.webp">
                            <img src="<?php echo base_url() ?>assets/web/images/UHT-Interior-2.webp" alt="gallery1" class="img-fluid w-100">

                            <span><i class="fas fa-eye"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="gallery_item">
                        <a class="venobox" data-gall="gallery01" href="images/unique-hairgro-hair-transplant-clinic-arumbakkam-chennai-clinics-j3u7re0lrc.webp">
                            <img src="<?php echo base_url() ?>assets/web/images/unique-hairgro-hair-transplant-clinic-arumbakkam-chennai-clinics-j3u7re0lrc.webp" alt="gallery1" class="img-fluid w-100">

                            <span><i class="fas fa-eye"></i></span>
                        </a>
                    </div>
                </div> -->
                
            </div>
            
        </div>
    </section>
    <!--=====================================
        GALLERY 2 END
    =====================================-->
