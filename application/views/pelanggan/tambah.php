<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Pelanggan</h4>
            <form class="forms-sample" action="<?php echo base_url();?>pelanggan/simpan" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">ID <span>*</span></label>
                <input type="text" name="id" class="form-control" id="exampleInputName1" placeholder="ID" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">KTP <span>*</span></label>
                <input type="text" name="ktp" class="form-control" id="exampleInputName1" placeholder="KTP" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Nama <span>*</span></label>
                <input type="text" name="nama" class="form-control" id="exampleInputName1" placeholder="Nama" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tpt_Lahir <span>*</span></label>
                <input type="text" name="tpt_lahir" class="form-control" id="exampleInputEmail3" placeholder="Tpt_Lahir" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Tgl_Lahir <span>*</span></label>
                <input type="text" name="tgl_lahir" class="form-control" id="exampleInputPassword4" placeholder="Tgl_Lahir" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">JK <span>*</span></label>
                <input type="text" name="jk" class="form-control" id="exampleInputEmail3" placeholder="JK" required="">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleTextarea1" rows="2"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tpt_Lahir <span>*</span></label>
                <input type="text" name="tpt_lahir" class="form-control" id="exampleInputEmail3" placeholder="Tpt_Lahir" required="">
              </div><div class="form-group">
                <label for="exampleInputEmail3">Kd_Agama <span>*</span></label>
                <input type="text" name="kd_agama" class="form-control" id="exampleInputEmail3" placeholder="Kd_Agama" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Kd_kawin <span>*</span></label>
                <input type="text" name="kd_kawin" class="form-control" id="exampleInputEmail3" placeholder="Kd_kawin" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Kd_Pekerjaan <span>*</span></label>
                <input type="text" name="kd_pekerjaan" class="form-control" id="exampleInputEmail3" placeholder="Kd_Pekerjaan" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Kewarganegaraan <span>*</span></label>
                <input type="text" name="kewarganegaraan" class="form-control" id="exampleInputEmail3" placeholder="Kewarganegaraan" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">No Hp</label>
                <input type="text" name="nohp" class="form-control" id="exampleInputCity1" placeholder="No HP">
              </div>
             <div class="form-group">
                <label for="exampleInputEmail3">Jlh_Pinjaman <span>*</span></label>
                <input type="text" name="jlh_pijaman" class="form-control" id="exampleInputEmail3" placeholder="Jlh_Pinjaman" required="">
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
              <a href="<?php echo base_url();?>pelanggan" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>