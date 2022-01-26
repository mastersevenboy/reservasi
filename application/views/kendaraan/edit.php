<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Kendaraan</h4>
            <form class="forms-sample" action="<?php echo base_url();?>kendaraan/update/<?php echo $kendaraan->id;?>" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">ID <span>*</span></label>
                <input type="text" name="id" class="form-control" id="exampleInputName1" placeholder="ID" value="<?php echo $kendaraan->id;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Kendaraan <span>*</span></label>
                <input type="text" name="kendaraan" class="form-control" id="exampleInputName1" placeholder="Kendaraan" value="<?php echo $kendaraan->kendaraan;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Plat <span>*</span></label>
                <input type="text" name="plat" class="form-control" id="exampleInputName1" placeholder="Plat" value="<?php echo $kendaraan->plat;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tahun <span>*</span></label>
                <input type="text" name="tahun" class="form-control" id="exampleInputEmail3" placeholder="Tahun" value="<?php echo $kendaraan->tahun;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Warna <span>*</span></label>
                <input type="text" name="warna" class="form-control" id="exampleInputPassword4" placeholder="Warna" value="<?php echo $kendaraan->warna;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tgl_servis <span>*</span></label>
                <input type="date" name="tgl_servis" class="form-control" id="exampleInputEmail3" placeholder="Tgl_servis" value="<?php echo $kendaraan->tgl_servis;?>" required="">
              </div>
                                    
              <div class="form-group">
                <label for="exampleInputCity1">Harga_reservasi</label>
                <input type="text" name="harga_reservasi" class="form-control" id="exampleInputCity1" placeholder="Harga_reservasi" value="<?php echo $kendaraan->harga_reservasi;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="exampleTextarea1" rows="2"><?php echo $kendaraan->keterangan;?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Status</label>
                <select class="form-control" name="status" required="">
                  <?php foreach ($status as $key => $value): ?>
                      <option value="<?php echo $key;?>"<?php if ($key==$kendaraan->status): ?><?php echo 'selected';?>
                      <?php endif ?>>
                      <?php echo $value;?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <button type="submit" class="btn btn-success">Ubah</button>
              <a href="<?php echo base_url();?>kendaraan" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>