<div class="row">
  <div class="col-md-3 col-md-offset-9">
    <a href="<?=site_url('koleksi/add')?>" class="btn btn-block btn-primary">Tambah</a>
  </div>
</div>
<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Koleksi</h3>
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
            <div style="overflow-x:auto;">
              <table class="table table-bordered">
              <table class="table table-responsive">
                <tbody><tr>
                  <th style="width: 10px">No</th>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Subjek</th>
                  <th>Kategori</th>
                  <th>Deskripsi</th>
                  <!--<th style="width: 200px">Lampiran</th>-->
                  <th>Action</th>
                </tr>
                <?php
                $no=1;
                foreach($koleksi as $data):
                ?>
                <tr>
                  <td><?=$no?></td>
                  <td style="width: 15%;"><?=$data->judul?></td>
                  <td style="width: 10%;"><?=$data->penulis?></td>
                  <td style="width: 10%;"><?=$data->subjek?></td>
                  <td><?=$data->kategori?></td>
                  <td style="width: 30%;"><?=$data->deskripsi?></td>
                  <td>
                    <?php if($this->session->userdata('level')!='sekretaris' && $data->approved_by == 0):?>
                      <a href="<?=site_url('koleksi/approve/'.$data->id)?>" class="btn btn-primary">Approve</a>
                    <?php endif;?>
                      <a href="<?=site_url('koleksi/update/'.$data->id)?>" class="btn btn-primary">Edit</a>
                      <a href="<?=site_url('koleksi/delete/'.$data->id)?>" data-id="<?=$data->id?>" onclick="return warnDelete();"  class="btn btn-danger">Hapus</button>
                  </td>
                </tr>
                <?php
                $no++;
                endforeach;
                ?>
                
               
              </tbody></table>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
             <?=$paging?>
              
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