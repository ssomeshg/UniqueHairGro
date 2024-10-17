
   <!--=====================================
        BREADCRUMB START
    =====================================-->
    <section class="breadcrumb_area" style="background: url(<?php echo base_url() ?>assets/web/images/bg-layer.jpg);">
        <div class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_text">
                            <h1>Blog Details</h1>
                            <ul>
                                <li><a href="#"><i class="fas fa-home" aria-hidden="true"></i> home</a></li>
                                <li><a href="#">Blog Details</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
        BREADCRUMB END
    =====================================-->


    <!--=====================================
        BLOG DETAILS START
    =====================================-->
    <section class="blog_details mt_120 xs_mt_70 pb_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_details_text">
                        <div class="blog_details_img">
                            <img src="<?php echo base_url('uploads/blog/' . $blog->image); ?>" alt="blog_details" class="img-fluid w-100">
                        </div>

                        <ul class="header_info d-flex flex-wrap justify-content-between">
                            <li><i class="far fa-calendar-alt"></i><?= date("d F ,Y", strtotime($blog->created_at)); ?></li>
                        </ul>

                        <h4><?= $blog->title;?></h4>
                        <p><?= $blog->description;?></p>
                 
                    </div>             
                </div>              
            </div>           
        </div>
    </section>
    <!--=====================================
        BLOG DETAILS END
    =====================================-->