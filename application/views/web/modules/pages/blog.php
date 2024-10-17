<section class="breadcrumb_area" style="background: url(<?php echo base_url() ?>assets/web/images/bg-layer.jpg);">
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_text">
                        <h1>Blog</h1>
                        <ul>
                            <li><a href="#"><i class="fas fa-home" aria-hidden="true"></i> home</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--=====================================
        BLOG GRID START
    =====================================-->
<section class="blog_page mt_95 xs_mt_45">
    <div class="container">
        <div class="row">

            <?php foreach ($blog as $row): ?>
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s">
                    <div class="single_blog">
                        <div class="single_blog_img">
                            <img src="<?php echo base_url('uploads/blog/' . $row->image); ?>" alt="blog" class="img-fluid w-100">
                        </div>
                        <div class="single_blog_text">
                            <ul class="d-flex flex-wrap justify-content-between">
                                <li><i class="fas fa-calendar-alt"></i><?= date("d F ,Y", strtotime($row->created_at)); ?></li>
                            </ul>
                            <a class="title" href="<?= base_url('blog_view/' . $row->id) ?>"><?= $row->title; ?></a>
                            <p><?= $row->description; ?></p>
                            <a class="blog_read_btn" href="<?= base_url('blog_view/' . $row->id) ?>">read more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<!--=====================================
        BLOG GRID END
    =====================================-->