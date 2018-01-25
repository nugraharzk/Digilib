<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Balai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="" method="post">
              <input type="hidden" name="balai_id" value="<?=$balai->id?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input name="nama" type="text" value="<?=isset($balai->nama) ? $balai->nama : ''?>" class="form-control" id="nama" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input name="alamat" type="text"  value="<?=isset($balai->alamat) ? $balai->alamat : ''?>" class="form-control" id="alamat" placeholder="alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="telp" class="col-sm-2 control-label">Telp</label>

                  <div class="col-sm-10">
                    <input name="telp" type="text"  value="<?=isset($balai->telp) ? $balai->telp : ''?>" class="form-control" id="telp" placeholder="Telp">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right">Tambah</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>