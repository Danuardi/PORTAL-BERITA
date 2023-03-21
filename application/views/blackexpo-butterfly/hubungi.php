<div class="container fbt-elastic-container mt-5 mb-5">
    <div class="row justify-content-center">

        <!-- Main Wrapper -->
        <div class="fbt-main-wrapper col-lg-12 mb-5 mb-lg-0">

            <div class="fbt-sep-title">
                <h4 class="title title-heading-left">Contact Us</h4>
                <div class="title-sep-container">
                    <div class="title-sep sep-double"><a href="<?php echo base_url(); ?>" class="view_more">Back to homepage</a></div>
                </div>
            </div>

            <div id="main-wrapper">
                <div class="main-section" id="main_content">
                    
                    
                    
                    <div class="blog-posts fbt-item-post-wrap">

                        <div class="blog-post fbt-item-post">
                            
                            <div class="featuredImageContainer">
                                <div class="fbt-item-thumbnail">

                                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo "$iden[maps]"; ?>"></iframe>

                                </div>
                            </div>
                            <div class="post-body post-content mt-5">
                                <div class="row justify-content-center">
                                    <div class=" col-lg-6 mb-5 mb-lg-0">
                                        <?php echo "$rows[alamat]";?>
                                    </div>
                                    <div class=" col-lg-6 mb-5 mb-lg-0">
                                        <form action="<?php echo base_url(); ?>konsultasi/reply" method="POST" onSubmit="return validasi(this)" id="form_komentar">

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Nickname *</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="a" class="form-control shadow-none radius-0" placeholder="Nama Anda" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">E-Mail *</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="b" class="form-control shadow-none radius-0" placeholder="Alamat E-Mail" required/>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Message *</label>
                                                <div class="col-sm-9">
                                                    <textarea name="c" class="form-control shadow-none radius-0" placeholder="Tuliskan <?php echo "$stat"; ?> Anda.." rows="5" required /></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3">Secutity *</label>
                                                <div class="col-sm-9">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <?php echo $image; ?>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <input name="secutity_code" class="form-control shadow-none radius-0" style="height: 45px;" maxlength=6 type="text" class="required" placeholder="Masukkkan kode di sebelah kiri..">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group m-b-0 row">
                                                <div class="offset-3 col-sm-9">
                                                    <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Pesan anda ini akan kami balas melalui email ?'')">Send a message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div><!-- .fbt-item-post-wrap -->
                </div>
            </div><!-- #main-wrapper -->

            

        </div><!-- .fbt-main-wrapper -->

    </div>
</div>