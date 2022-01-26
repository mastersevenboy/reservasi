<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Reservasi</h4>
            <form class="forms-sample" action="<?php echo base_url();?>transaksi/simpan" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">Pelanggan <span>*</span></label>
                <select class="form-control" name="pelanggan" required="">
                  <?php foreach ($pelanggan as $key => $value): ?>
                      <option value="<?php echo $value->id;?>"><?php echo $value->nama;?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Kendaraan <span>*</span></label>
                <select class="form-control" name="kendaraan" required="">
                  <?php foreach ($kendaraan as $key => $value): ?>
                      <option value="<?php echo $value->id;?>"><?php echo $value->kendaraan;?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputtanggalreservasi">Tanggal Reservasi<span>*</span></label>
                <input type="date" name="tanggalreservasi" class="form-control" id="exampleInputtanggalreservasi" placeholder="tanggalreservasi" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputlamareservasi">Lama Reservasi<span>*</span></label>
                <input type="text" name="lamareservasi" class="form-control" id="exampleInputlamareservasi" placeholder="lama reservasi" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputbiayareservasi">Biaya Reservasi<span>*</span></label>
                <input type="text" name="biayareservasi" class="form-control" id="exampleInputbiayareservasi" placeholder="biaya reservasi" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputcatatan">Catatan<span>*</span></label>
                <input type="text" name="catatan" class="form-control" id="exampleInputcatatan" placeholder="catatan" required="">
              </div>
              <button type="submit" class="btn btn-success">Simpan</button>
              <a href="<?php echo base_url();?>reservasi" class="btn btn-success">View </a>
              <a href="<?php echo base_url();?>reservasi" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>