<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Pekerjaan</h4>
            <form class="forms-sample" action="<?php echo base_url();?>pekerjaan/simpan" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">ID <span>*</span></label>
                <input type="text" name="id" class="form-control" id="exampleInputName1" placeholder="ID" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Pekerjaan <span>*</span></label>
                <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail3" placeholder="pekerjaan" required="">
              </div>
                            
              <button type="submit" class="btn btn-success">Simpan</button>
              <a href="<?php echo base_url();?>pekerjaan" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>