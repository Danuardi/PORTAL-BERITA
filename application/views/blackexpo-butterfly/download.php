<div class="outer-wrapper my-5" id="outer-wrapper">

    <div class="container fbt-elastic-container">
        <div class="row justify-content-center">

            <!-- Main Wrapper -->
            <div class="fbt-main-wrapper col-lg-8 mb-5 mb-lg-0">

                <div id="main-wrapper">
                    <div class="main-section" id="main_content">
                        
                        <div class="fbt-sep-title">
                            <h4 class="title title-heading-left">Daftar Download</h4>
                            <div class="title-sep-container">
                                <div class="title-sep sep-double"><a href="<?php echo base_url(); ?>" class="view_more">Back to homepage</a></div>
                            </div>
                        </div>
                        
                        <div class="blog-posts fbt-index-post-wrap">


                            <table class='table table-striped table-bordered' style='width: 100%'>
                                <tr>
                                    <th>No</th>
                                    <th>Nama File</th>
                                    <th>Hits</th>
                                    <th style='width:70px'>Pilihan</th>
                                </tr>
                                <?php
                                    $no=$this->uri->segment(3)+1;
                                    foreach ($download->result_array() as $r) { 
                                    
                                        echo "<tr bgcolor=$warna>
                                                <td>$no</td>
                                                <td>$r[judul]</td>
                                                <td>$r[hits] Kali</td>
                                                <td><a class='button' style='background:#29b332; color:#ffffff; padding:2px 10px' href='".base_url()."download/file/$r[nama_file]'>Download</a></td>
                                              </tr>";
                                    $no++;
                                    }
                                ?>
                            </table>
                            
                            

                        </div><!-- .fbt-index-post-wrap -->

                        <?php echo $this->pagination->create_links(); ?>


                    </div>
                </div><!-- #main-wrapper -->

            </div><!-- .fbt-main-wrapper -->

            <div class="fbt-main-sidebar col-lg-4">
                <div class="fbt-main-sidebar__content h-100 pl-lg-3">

                    <?php $this->load->view(template().'/widget/berita-popular'); ?>

                </div>    
            </div>
            <!-- .fbt-main-sidebar -->

        </div>
    </div>
</div>