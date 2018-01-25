          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Approval List</h3>
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
              <?php if (isset($koleksi)) { ?>
                <table class="table table-bordered">
                  <tbody><tr>
                    <th style="width: 10px">No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Subjek</th>
                    <th>Kategori</th>
                    <th>Lampiran</th>
                    <th>Action</th>
                  </tr>
                  <?php
                  $no=1;
                  if($koleksi != NULL){
                    foreach($koleksi as $data):
                  ?>
                  <tr>
                    <td><?=$no?></td>
                    <td><?=$data->judul?></td>
                    <td><?=$data->penulis?></td>
                    <td><?=$data->subjek?></td>
                    <td><?=$data->kategori?></td>
                    <td><?=$data->lampiran?></td>
                    <td>
                      <a href="<?=base_url();?>approve/approving/<?=$data->id ?>" class="btn btn-primary">Approve</a>
                    </td>
                  </tr>
                  <?php
                    $no++;
                    endforeach;
                  ?>
                  </tbody>
                  
                </table>
                  <?php }else{ ?>
                    <p>Tabel kosong.</p>
                  <?php }} ?>

            </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <?php if(isset($paging)){?>
                <?=$paging?>
              <?php } ?>
              
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