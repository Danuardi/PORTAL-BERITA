<script type="text/javascript">
    function validasireg(form){
        if (form.a.value == ""){ alert("Anda belum mengisikan Username"); form.a.focus(); return (false); }                         
        if (form.b.value == ""){ alert("Anda belum mengisikan Password"); form.b.focus(); return (false); }                                 
        if (form.c.value == ""){ alert("Anda belum menuliskan Nama Lengkap"); form.c.focus(); return (false); }
        if (form.d.value == ""){ alert("Anda belum menuliskan Email"); form.d.focus(); return (false); }
        if (form.e.value == ""){ alert("Anda belum menuliskan No Telpon"); form.e.focus(); return (false); }                                                                        
      return (true);
    }
</script>   

<div class="container fbt-elastic-container mt-5 mb-5">
    <div class="row justify-content-center">

        <!-- Main Wrapper -->
        <div class="fbt-main-wrapper col-lg-8 mb-5 mb-lg-0">

            <div id="main-wrapper">
                <div class="main-section" id="main_content">
                    
                    <div class="fbt-sep-title">
                        <h4 class="title title-heading-left">Pendaftaran untuk Kontributor</h4>
                        <div class="title-sep-container">
                            <div class="title-sep sep-double"><a href="<?php echo base_url(); ?>" class="view_more">Back to homepage</a></div>
                        </div>
                    </div>
                    
                    <div class="blog-posts fbt-index-post-wrap">

                        <div class="alert alert-info fade show">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <span class="icon"><i class="fa fa-check"></i></span><strong>Penting!</strong> Untuk berkontribusi dalam memberikan atau menulis artikel/berita, maka Silahkan Melengkapi form dibawah ini dengan data yang sebenarnya. Terima kasih,.. ^_^
                        </div>

                        <?php echo $this->session->flashdata('message'); ?>
                        <form action="<?php echo base_url(); ?>kontributor/pendaftaran" method="POST" enctype='multipart/form-data' onSubmit="return validasireg(this)">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username *</label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control shadow-none radius-0" placeholder="Nickname" name="a" id="c_name" onkeyup="nospaces(this)" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password *</label>
                                <div class="col-sm-5">
                                  <input type="text" class="form-control shadow-none radius-0" placeholder="Password" name="b" required/>
                                </div>
                            </div>

                            <div class='form-group row'>
                                <label class='col-sm-3 col-form-label'>Nama Lengkap *</label>
                                <div class='col-sm-8'>
                                    <input type="text" class="form-control shadow-none radius-0" placeholder="Nama Lengkap" name="c" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">E-Mail *</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control shadow-none radius-0" placeholder="E-mail" name="d" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Telpon *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control shadow-none radius-0" placeholder="No Telpon" name="e" required />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Foto *</label>
                                <div class="col-sm-8">
                                    <input type="file" name="f" required/><br>
                                    <i>Allowed File : gif, jpg, png, jpeg</i>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3"><?php echo $image; ?></label>
                                <div class="col-sm-6">
                                    <input name="secutity_code" style="height: 45px;" class="form-control shadow-none radius-0" maxlength=6 type="text" class="required" placeholder="Masukkkan kode di sebelah kiri..">
                                </div>
                            </div>

                            <div class="form-group m-b-0 m-t-5 row">
                                <div class="offset-3 col-8">
                                    <button type="submit" name="submit" class="btn btn-primary">Daftar Sekarang!</button>
                                </div>
                            </div>

                        </form>
                                            

                    </div><!-- .fbt-index-post-wrap -->

                </div>
            </div><!-- #main-wrapper -->

        </div><!-- .fbt-main-wrapper -->

        <div class="fbt-main-sidebar col-lg-4">
            <div class="fbt-main-sidebar__content h-100 pl-lg-3">

                <?php $this->load->view(template().'/widget/berita-popular'); ?>
                <?php $this->load->view(template().'/iklan/sidebar-2'); ?>

            </div>    
        </div><!-- .fbt-main-sidebar -->

    </div>
</div>