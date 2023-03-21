<div class="post-head mb-2" style="padding: 5px 50px; font-size: 16px; color: #333; background-color: #f5f5f5;"> 
    Tag : <?php echo  $rows['nama_tag'];?>
</div>
<?php 
$base_path = FCPATH;
if(!function_exists('get_viewer')) {
	function get_viewer($number) {
		if($number > 1000) {
			$number = $number /1000;
			return number_format($number,0,',','.').'k';
		}
		return number_format($number,0,',','.');
	}
}
?> 
		<div class="row" style="padding: 0 30px;"> 
			<?php
				$label_color = array('purple','green','red','tosca','pink','orange','blue','black');
				$icolor = 0;
			   foreach ($beritatag->result_array() as $i =>  $r) {	
				  $icolor = ($i % (count($label_color)) == 0) ? ($icolor = 0) : $icolor;	 
				  $isi_berita =(strip_tags($r['isi_berita'])); 
				  $isi = substr($isi_berita,0,220); 
				  $isi = substr($isi_berita,0,strrpos($isi," ")); 
				  $judul = $r['judul']; 
				  $total_komentar = $this->model_utama->view_where('komentar',array('id_berita' => $r['id_berita']))->num_rows(); 
				  $img_src = base_url()."asset/foto_berita/no-image.jpg";
				  if ($r['gambar'] !== '' &&  file_exists( $base_path ."asset/foto_berita/".($r['gambar']) ) ){
						$img_src = base_url()."asset/foto_berita/". $r['gambar'];
				  } 
				  ?>
				  <div class="col-md-6 mb-4">
					  <div class="blog card h-100">
						<div class="image-container"
							style="
								background:url('<?php echo $img_src;?>');
								background-position:center;
								background-size:cover;
								background-repeat:no-repeat
							">
						</div> 
						<div class="card-body">
							<div class="post-category">
									<a href="<?php echo base_url('kategori/detail/'.$r['kategori_seo']);?>">	
										<div class="color-label <?php echo $label_color[$icolor++];?>">
											<?php echo $r['nama_kategori'];?>
										</div>
									</a> 
							</div> 
							<a href="<?php echo base_url().$r['judul_seo'];?>">
								<h3 class="card-title"><?php echo $judul;?></h3>
							</a>
							<div class="post-meta">
								<i class="fa fa-clock-o"></i> <?php echo tgl_indo($r['tanggal']); ?> ,
								<i class="fa fa-flash"></i> dilihat <?php echo get_viewer($r['dibaca']) ; ?> 
							</div>
							<div class="card-text">
								<?php echo $isi;  ?>
							</div>
							<?php 
							if( !empty($r['tag'])) {
								$tags = explode(",",$r['tag']);							
								$hitung = count($tags);	 
							?>
								<div class="tags">
								<i class="fa fa-tags"></i>
									<?php									
										$hitung = count($tags);
										for ($x=0; $x<=$hitung-1; $x++) {
											if ($tags[$x] != ''){
												echo "<a href='".base_url()."tag/detail/$tags[$x]'>$tags[$x]</a>";
											}
										}
									?>
								</div>
							<?php } ?> 
						</div>
					</div> 
				</div>
				<?php
			  }
			?> 
		</div>
<div class="pagination" style="padding: 0 30px;">
	<?php echo $this->pagination->create_links(); ?>
</div> 