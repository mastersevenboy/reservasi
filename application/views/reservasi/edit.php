<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Reservasi</h4>
            <form class="forms-sample" action="<?php echo base_url();?>reservasi/update/<?php echo $reservasi->id;?>" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">ID<span>*</span></label>
                <input type="text" name="id" class="form-control" id="id" placeholder="Id" value="<?php echo $reservasi->id;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Pelanggan <span>*</span></label>
                <input type="text" name="pelanggan" class="form-control" id="exampleInputEmail3" placeholder="Pelanggan" value="<?php echo $reservasi->pelanggan_id;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Kendaraan <span>*</span></label>
                <input type="text" name="kendaraan" class="form-control" id="exampleInputEmail3" placeholder="Kendaraan" value="<?php echo $reservasi->kendaraan_id;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tgl_Reservasi <span>*</span></label>
                <input type="date" name="tgl_reservasi" class="form-control" id="exampleInputEmail3" placeholder="Tgl_reservasi" value="<?php echo $reservasi->tgl_reservasi;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tgl_kembali <span>*</span></label>
                <input type="date" name="tgl_kembali" class="form-control" id="exampleInputEmail3" placeholder="Tgl_kembali" value="<?php echo $reservasi->tgl_kembali;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Lama_Reservasi <span>*</span></label>
                <input type="text" name="lama_reservasi" class="form-control" id="exampleInputEmail3" placeholder="Lama_reservasi" value="<?php echo $reservasi->lama_reservasi;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Biaya_reservasi <span>*</span></label>
                <input type="text" name="biaya_reservasi" class="form-control" id="exampleInputEmail3" placeholder="Biaya_reservasi" value="<?php echo $reservasi->biaya_reservasi;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Denda <span></span></label>
                <input type="text" name="denda" class="form-control" id="exampleInputEmail3" placeholder="Denda" value="<?php echo $reservasi->denda;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Total_biaya <span></span></label>
                <input type="text" name="total_biaya" class="form-control" id="exampleInputEmail3" placeholder="Total_biaya" value="<?php echo $reservasi->total_biaya_reservasi;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Catatan <span>*</span></label>
                <input type="text" name="catatan" class="form-control" id="exampleInputEmail3" placeholder="Catatan" value="<?php echo $reservasi->catatan;?>" required="">
              </div>
              <button type="submit" class="btn btn-success">Ubah</button>
              <a href="<?php echo base_url();?>reservasi" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>