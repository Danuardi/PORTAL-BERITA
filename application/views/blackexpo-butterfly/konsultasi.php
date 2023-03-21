<?php if ($this->uri->segment(3) == ''):
    $stat = 'Pertanyaan';
    $id = '0';
else:
    $stat = 'Jawaban';
    $id = $this->uri->segment(3);
endif; ?>

<div class="container fbt-elastic-container mt-5 mb-5">
    <div class="row justify-content-center">

        <!-- Main Wrapper -->
        <div class="fbt-main-wrapper col-lg-8 mb-5 mb-lg-0">

            <div id="main-wrapper">
                <div class="main-section" id="main_content">
                    
                    <div class="fbt-sep-title">
                        <h4 class="title title-heading-left">Tuliskan <?php echo "$stat"; ?> Anda Pada Form Dibawah Ini</h4>
                        <div class="title-sep-container">
                            <div class="title-sep sep-double"></div>
                        </div>
                    </div>
                    
                    <div class="blog-posts fbt-index-post-wrap">

                        <form action="<?php echo base_url(); ?>konsultasi/reply" method="POST" onSubmit="return validasi(this)" id="form_komentar">
                            <input type="hidden" value='<?php echo $id; ?>' name='a'>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Anda *</label>
                                <div class="col-sm-10">
                                    <input type="text" name='b' placeholder="Nama Anda" value='<?php echo "$usr[nama_lengkap]"; ?>' class="form-control shadow-none radius-0" required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email *</label>
                                <div class="col-sm-10">
                                    <input type="text" name='c' placeholder="Alamat E-mail" id="email" value='<?php echo "$usr[email]"; ?>' class="form-control shadow-none radius-0" required/>
                                </div>
                            </div>

                            <?php 
                                $tanya = $this->model_utama->view_where('tbl_comment',array('id_komentar'=>$this->uri->segment(3)))->row_array();
                                if ($this->uri->segment(3) != ''){

                                    echo "<div class='form-group row'>
                                        <label class='col-sm-2 col-form-label'>Pertanyaan</label>
                                        <div class='col-sm-10'>
                                            <textarea class='form-control shadow-none radius-0' rows='5' disabled style='background:#fff;' />$tanya[isi_pesan] ?</textarea>
                                        </div>
                                    </div>";
                                }
                            ?>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><?php echo "$stat"; ?> *</label>
                                <div class="col-sm-10">
                                    <textarea name='d' placeholder="Tuliskan <?php echo "$stat"; ?> Anda.." class="form-control shadow-none radius-0" rows="5" required></textarea>
                                </div>
                            </div>

                            <?php if ($this->uri->segment(3) == ''): ?>
                                <div class="form-group m-b-0 row">
                                    <div class="offset-2 col-9">
                                        <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Yakin ingin mengirimkan pertanyaan ini ?')">Kirim Pertanyaan</button>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="form-group m-b-0 row">
                                    <div class="offset-2 col-9">
                                        <button type="submit" name="submit" class="btn btn-primary" onclick="return confirm('Kirimkan Sebagai Balasan Pesan terpilih?')">Kirim Balasan</button>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </form>
                                            

                    </div><!-- .fbt-index-post-wrap -->

                    <div class="fbt-sep-title mt-5">
                        <h4 class="title title-heading-left">
                            <?php $total = $this->model_utama->view_where('tbl_comment',array('reply'=>0))->num_rows();
                            echo "Total Ada $total Pertanyaan"; ?>
                        </h4>
                        <div class="title-sep-container">
                            <div class="title-sep sep-double"></div>
                        </div>
                    </div>
                    
                    <div class="blog-posts fbt-index-post-wrap">

                        <div class="row justify-content-center mt-4">
                            <div class="col-lg-12">
                                <div class="blog-post-comments">
                                    <section class="comments embed" id="comments">
                                        <div class="comment-list--form">
                                            <div class="comment-list">

                                                <?php
                                                    $no = 1;
                                                    foreach ($konsultasi->result_array() as $kka) {
                                                        $isian=nl2br($kka['isi_pesan']); 
                                                        $komentarku=sensor($isian); 
                                                        if(($no % 2)==0){ $warna="#ffffff;"; }else{ $warna="#e3e3e3"; }
                                                        $test = md5(strtolower(trim($kka['alamat_email'])));

                                                        echo "<div class='media comment mb-4'>
                                                            <a class='mr-4' href='#'>";
                                                                if ($kka['alamat_email'] == ''){
                                                                    echo "<img src='".base_url()."asset/foto_user/blank.png'/>";
                                                                }else{
                                                                    echo "<img src='http://www.gravatar.com/avatar/$test.jpg?s=100'/>";
                                                                }
                                                            echo "</a>
                                                            <div class='media-body' id='reply$kka[id_komentar]'>
                                                                <h5 class='mt-0'>$kka[nama_lengkap]</h5>
                                                                <p>$komentarku</p>
                                                                <div class='comments__actions'>
                                                                    <span class='button'>";
                                                                        if ($this->session->level!=''):
                                                                            echo "<div class='button-list'>
                                                                                <a class='btn btn-success btn-sm' href='".base_url()."konsultasi/index/$kka[id_komentar]'>Berikan Jawaban</a>
                                                                                <a class='btn btn-warning btn-sm' href='".base_url()."konsultasi/delete/$kka[id_komentar]'>Hapus</a>
                                                                                <a class='btn btn-danger btn-sm' href='".base_url()."administrator/logout'>Logout</a>
                                                                            </div>";
                                                                        endif;
                                                                    echo "</span>
                                                                </div>";

                                                                $reply = $this->model_utama->view_where('tbl_comment',array('reply'=>$kka['id_komentar']));
                                                                foreach ($reply->result_array() as $r):

                                                                    $testt = md5(strtolower(trim($r['alamat_email'])));

                                                                    echo "<div class='comment-reply media mt-4'>
                                                                        <a class='mr-4' href='#'>";
                                                                            if ($r['alamat_email'] == ''):
                                                                                echo "<img src='".base_url()."asset/foto_user/blank.png'/>";
                                                                            else:
                                                                                echo "<img src='http://www.gravatar.com/avatar/$test.jpg?s=100'/>";
                                                                            endif;
                                                                        echo "</a>
                                                                        <div class='media-body'>
                                                                            <h5 class='mt-0'>Dibalas Oleh : $r[nama_lengkap], Pada : ".tgl_indo($r['tanggal_komentar']).", $kka[jam_komentar] WIB </h5>
                                                                            <p><i style='color:red;'>$r[alamat_email]</i> - $r[isi_pesan]</p>
                                                                        </div>
                                                                    </div>";
                                                                endforeach;
                                
                                                            echo "</div>
                                                        </div>";
                            
                                                        $no++;
                                                    }
                                                ?><!-- .comment -->
                        
                                            </div><!-- .comment-list -->
                                        </div>
                                    </section>
                                </div><!-- .blog-post-comments -->
                            </div>
                        </div>            

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