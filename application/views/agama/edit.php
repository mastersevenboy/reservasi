<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Agama</h4>
            <form class="forms-sample" action="<?php echo base_url();?>agama/update/<?php echo $agama->kd_agama;?>" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">KD_Agama <span>*</span></label>
                <input type="text" name="kd_agama" class="form-control" id="exampleInputName1" placeholder="KD_Agama" value="<?php echo $agama->kd_agama;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Agama <span>*</span></label>
                <input type="text" name="agama" class="form-control" id="exampleInputEmail3" placeholder="Agama" value="<?php echo $agama->agama;?>" required="">
              </div>
              
              <button type="submit" class="btn btn-success">Ubah</button>
              <a href="<?php echo base_url();?>agama" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>