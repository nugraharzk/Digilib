<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Koleksi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="judul" class="col-sm-2 control-label">Judul</label>

                  <div class="col-sm-10">
                    <input name="judul" type="text" class="form-control" id="judul" placeholder="Judul">
                  </div>
                </div>
                <div class="form-group">
                  <label for="penulis" class="col-sm-2 control-label">Penulis</label>

                  <div class="col-sm-10">
                    <input name="penulis" type="text" class="form-control" id="penulis" placeholder="Penulis">
                  </div>
                </div>
                <div class="form-group">
                  <label for="penulis" class="col-sm-2 control-label">Subjek</label>

                  <div class="col-sm-10">
                    <select name="subjek" class="form-control">
                     <option >Pilih Subjek</option>
                     <option value="perkerasan">Perkerasan Jalan</option>
                     <option value="geoteknik">Geoteknik</option>
                     <option value="jembatan">Jembatan</option>
                     <option value="teknik lalu lintas">Teknik Lalu Lintas</option>
                     <option value="lingkungan jalan">Lingkungan Jalan</option>
                   </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="penulis" class="col-sm-2 control-label">Kategori</label>

                  <div class="col-sm-10">
                   <select name="kategori" class="form-control">
                     <option >Pilih Kategori</option>
                     <option value="jurnal">Jurnal</option>
                     <option value="naskah ilmiah">Naskah Ilmiah</option>
                     <option value="laporan penelitian">Laporan Penelitian</option>
                   </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="penulis" class="col-sm-2 control-label">Deskripsi</label>

                  <div class="col-sm-10">
                    <textarea name="deskripsi" class="form-control" rows="3" placeholder="Deskripsi ..."></textarea>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="penulis" class="col-sm-2 control-label">Lampiran</label>
                  <div class="col-sm-10">
                    <input name="userfile" type="file" class="form-control" id="lampiran" placeholder="Lampiran">
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