<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input name="nama" type="text" value="<?=$user->nama ? $user->nama : ''?>" class="form-control" id="nama" placeholder="nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input name="email" type="text" value="<?=$user->email ? $user->email : ''?>" class="form-control" id="email" placeholder="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="telp" class="col-sm-2 control-label">Telpon</label>

                  <div class="col-sm-10">
                    <input name="telp" type="text" value="<?=$user->nohp ? $user->nohp : ''?>" class="form-control" id="telp" placeholder="Telp">
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input name="username" type="text" value="<?=$user->username ? $user->username : ''?>" class="form-control" id="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="penulis" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="password" placeholder="Type to change password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="level" class="col-sm-2 control-label">Level</label>

                  <div class="col-sm-10">
                    <select name="level" class="form-control">
                      <option>Pilih Level User</option>
                      <option value="admin" <?=$user->level=='admin' ? 'selected' : ''?>>Admin</option>
                      <option value="pustakawan" <?=$user->level=='pustakawan' ? 'selected' : ''?>>Pustakawan</option>
                      <option value="sekretaris" <?=$user->level=='sekretaris' ? 'selected' : ''?>>Sekretaris</option>
                    </select>
                  </div>
                </div> 

                <div class="form-group">
                  <label for="balai" class="col-sm-2 control-label">Balai</label>

                  <div class="col-sm-10">
                    <select name="balai" class="form-control">
                      <option>Pilih Balai</option>
                      <option value="balai perkerasan jalan">Balai Perkerasan Jalan</option>
                      <option value="balai geoteknik">Balai Geoteknik</option>
                      <option value="balai lalu lintas">Balai Lalu Lintas</option>
                      <option value="balai Jembatan">Balai Jembatan</option>
                      <option value="loka asbuton">Loka Asbuton</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <button type="submit" class="btn btn-info pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>