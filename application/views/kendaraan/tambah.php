<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Kendaraan</h4>
            <form class="forms-sample" action="<?php echo base_url();?>kendaraan/simpan" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">ID <span>*</span></label>
                <input type="text" name="id" class="form-control" id="exampleInputName1" placeholder="ID" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Kendaraan <span>*</span></label>
                <input type="text" name="kendaraan" class="form-control" id="exampleInputName1" placeholder="Kendaraan" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Plat <span>*</span></label>
                <input type="text" name="plat" class="form-control" id="exampleInputName1" placeholder="Plat" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tahun <span>*</span></label>
                <input type="text" name="tahun" class="form-control" id="exampleInputEmail3" placeholder="Tahun" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Warna <span>*</span></label>
                <input type="text" name="warna" class="form-control" id="exampleInputPassword4" placeholder="Warna" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tgl_Service <span>*</span></label>
                <input type="date" name="tgl_service" class="form-control" id="exampleInputEmail3" placeholder="Tgl_Service" required="">
              </div>
             <div class="form-group">
                <label for="exampleInputEmail3">Harga Reservasi <span>*</span></label>
                <input type="text" name="harga_reservasi" class="form-control" id="exampleInputEmail3" placeholder="Harga_reservasi" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Keterangan <span>*</span></label>
                <input type="text" name="keterangan" class="form-control" id="exampleInputEmail3" placeholder="Keterangan" required="">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Status</label>
                <select class="form-control" name="status" required="">
                  <?php foreach ($status as $key => $value): ?>
                      <option value="<?php echo $key;?>"><?php echo $value;?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <button type="submit" class="btn btn-success">Simpan</button>
              <a href="<?php echo base_url();?>kendaraan" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>