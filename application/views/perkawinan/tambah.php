<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Status Kawin</h4>
            <form class="forms-sample" action="<?php echo base_url();?>perkawinan/simpan" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">KD_Sts_Kawin <span>*</span></label>
                <input type="text" name="kd_sts_kawin" class="form-control" id="exampleInputName1" placeholder="KD_Sts_Kawin" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Status_Kawin <span>*</span></label>
                <input type="text" name="status_kawin" class="form-control" id="exampleInputEmail3" placeholder="Status_Kawin" required="">
              </div>
                            
              <button type="submit" class="btn btn-success">Simpan</button>
              <a href="<?php echo base_url();?>perkawinan" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>