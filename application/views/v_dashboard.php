<div class="row">
  <div class="col-md-3 col-md-offset-9">
    <a href="<?=site_url('koleksi/add')?>" class="btn btn-block btn-primary">Tambah</a>
  </div>
</div>
<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Laporan Admin</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">

                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <h1>Halaman yang sering dilihat</h1>
            <div style="overflow-x:auto;">
              <table class="table table-bordered">
              <table class="table table-responsive">
                <tbody><tr>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Subjek</th>
                  <th>Kategori</th>
                  <th>Dilihat</th>
                  <th>Diunduh</th>
                </tr>
                <tr>
                  <td style="width: 30%;"><?=$koleksi->judul?></td>
                  <td style="width: 10%;"><?=$koleksi->penulis?></td>
                  <td style="width: 10%;"><?=$koleksi->subjek?></td>
                  <td><?=$koleksi->kategori?></td>
                  <td style="width: 15%;"><?=$koleksi->seen?> kali</td>
                  <td style="width: 15%;"><?=$koleksi->downloaded?> kali</td>
                  <!--<td>
                    <?php if($this->session->userdata('level')=='pustakawan' && $data->approved_by == 0):?>
                      <a href="<?=site_url('koleksi/approve/'.$data->id)?>" class="btn btn-primary">Approve</a>
                    <?php endif;?>
                      <a href="<?=site_url('koleksi/update/'.$data->id)?>" class="btn btn-primary">Edit</a>
                      <a href="<?=site_url('koleksi/delete/'.$data->id)?>" data-id="<?=$data->id?>" onclick="return warnDelete();"  class="btn btn-danger">Hapus</button>
                  </td>-->
                </tr>
                
               
              </tbody></table>
              </table>
            </div>
            </div>

            <div class="box-body">
              <h1>Halaman yang sering diunduh</h1>
            <div style="overflow-x:auto;">
              <table class="table table-bordered">
              <table class="table table-responsive">
                <tbody><tr>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Subjek</th>
                  <th>Kategori</th>
                  <th>Dilihat</th>
                  <th>Diunduh</th>
                </tr>
                <?php $no=1; ?>
                <tr>
                  <td style="width: 30%;"><?=$koleksid->judul?></td>
                  <td style="width: 10%;"><?=$koleksid->penulis?></td>
                  <td style="width: 10%;"><?=$koleksid->subjek?></td>
                  <td><?=$koleksid->kategori?></td>
                  <td style="width: 15%;"><?=$koleksid->seen?> kali</td>
                  <td style="width: 15%;"><?=$koleksid->downloaded?> kali</td>
                  <!--<td>
                    <?php if($this->session->userdata('level')=='pustakawan' && $data->approved_by == 0):?>
                      <a href="<?=site_url('koleksi/approve/'.$data->id)?>" class="btn btn-primary">Approve</a>
                    <?php endif;?>
                      <a href="<?=site_url('koleksi/update/'.$data->id)?>" class="btn btn-primary">Edit</a>
                      <a href="<?=site_url('koleksi/delete/'.$data->id)?>" data-id="<?=$data->id?>" onclick="return warnDelete();"  class="btn btn-danger">Hapus</button>
                  </td>-->
                </tr>
                
               
              </tbody></table>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              
            </div>
          </div>
          <script>
function warnDelete() {
    job=confirm("Are you sure to delete permanently?");
    if(job!=true)
    {
        return false;
    }
    
}
</script>