<?php 
    echo "
              <div class='card card-info'>
                <div class='card-header with-border'>
                  <h3 class='card-title'>Tambah File Download</h3>
                </div>
              <div class='card-body'>";
              $attributes = array('class'=>'form-horizontal','role'=>'form');
              echo form_open_multipart($this->uri->segment(1).'/tambah_download',$attributes); 
          echo "
                  <table class='table table-sm table-borderless'>
                  <tbody>
                    <input type='hidden' name='id' value=''>
                    <tr><th width='120px' scope='row'>Judul</th>    <td><input type='text' class='form-control' name='a' required></td></tr>
                    <tr><th width='120px' scope='row'>Cari File</th>    <td><input type='file' class='form-control' name='b'></td></tr>
                  </tbody>
                  </table>
                </div>
              
              <div class='card-footer'>
                    <button type='submit' name='submit' class='btn btn-info'>Tambahkan</button>
                    <a href='".base_url().$this->uri->segment(1)."/download'><button type='button' class='btn btn-default pull-right'>Cancel</button></a>
                    
                  </div>
            </div></div>";
            echo form_close();
