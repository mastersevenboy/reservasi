<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Pelanggan</h4>
            <form class="forms-sample" action="<?php echo base_url();?>pelanggan/update/<?php echo $pelanggan->id;?>" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">ID <span>*</span></label>
                <input type="text" name="id" class="form-control" id="exampleInputName1" placeholder="ID" value="<?php echo $pelanggan->id;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">KTP <span>*</span></label>
                <input type="text" name="ktp" class="form-control" id="exampleInputName1" placeholder="KTP" value="<?php echo $pelanggan->ktp;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Nama <span>*</span></label>
                <input type="text" name="nama" class="form-control" id="exampleInputName1" placeholder="Nama" value="<?php echo $pelanggan->nama;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tpt_Lahir <span>*</span></label>
                <input type="text" name="tpt_lahir" class="form-control" id="exampleInputEmail3" placeholder="Tpt_Lahir" value="<?php echo $pelanggan->tpt_lahir;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Tgl_Lahir <span>*</span></label>
                <input type="date" name="tgl_lahir" class="form-control" id="exampleInputPassword4" placeholder="Tgl_Lahir" value="<?php echo $pelanggan->tgl_lahir;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">JK <span>*</span></label>
                <input type="text" name="jk" class="form-control" id="exampleInputEmail3" placeholder="JK" value="<?php echo $pelanggan->jk;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleTextarea1" rows="2"><?php echo $pelanggan->alamat;?></textarea>
              </div>
                        
              <div class="form-group">
                <label for="exampleInputEmail3">Kewarganegaraan <span>*</span></label>
                <input type="text" name="kewarganegaraan" class="form-control" id="exampleInputEmail3" placeholder="Kewarganegaraan" value="<?php echo $pelanggan->kewarganegaraan;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">No_Hp</label>
                <input type="text" name="nohp" class="form-control" id="exampleInputCity1" placeholder="No_HP" value="<?php echo $pelanggan->nohp;?>" required="">
              </div>
             <div class="form-group">
                <label for="exampleInputEmail3">Jumlah_Pinjaman <span>*</span></label>
                <input type="text" name="jumlah_pinjam" class="form-control" id="exampleInputEmail3" placeholder="Jumlah_Pinjaman" value="<?php echo $pelanggan->jumlah_pinjam;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Status</label>
                <select class="form-control" name="status" required="">
                  <?php foreach ($status as $key => $value): ?>
                      <option value="<?php echo $key;?>"<?php if ($key==$pelanggan->status): ?><?php echo 'selected';?>
                      <?php endif ?>>
                      <?php echo $value;?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <button type="submit" class="btn btn-success">Ubah</button>
              <a href="<?php echo base_url();?>pelanggan" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>