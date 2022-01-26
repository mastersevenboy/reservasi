<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Karyawan</h4>
            <form class="forms-sample" action="<?php echo base_url();?>karyawan/update/<?php echo $karyawan->id;?>" method="POST">
              <div class="form-group">
                <label for="exampleInputName1">Nama <span>*</span></label>
                <input type="text" name="nama" class="form-control" id="exampleInputName1" placeholder="Nama" value="<?php echo $karyawan->nama;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Email <span>*</span></label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email" value="<?php echo $karyawan->email;?>" required="">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Password </label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleInputCity1">No Hp</label>
                <input type="text" name="nohp" class="form-control" id="exampleInputCity1" placeholder="No HP" value="<?php echo $karyawan->nohp;?>">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleTextarea1" rows="2"><?php echo $karyawan->alamat;?></textarea>
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Status</label>
                <select class="form-control" name="status" required="">
                  <?php foreach ($status as $key => $value): ?>
                      <option value="<?php echo $key;?>"<?php if ($key==$karyawan->status): ?><?php echo 'selected';?>
                      <?php endif ?>>
                      <?php echo $value;?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <button type="submit" class="btn btn-success">Ubah</button>
              <a href="<?php echo base_url();?>karyawan" class="btn btn-light">Batal</a>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>