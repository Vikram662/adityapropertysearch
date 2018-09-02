 <!-- Datatable style -->
<link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.css">  

 <section class="content">
   <div class="box">
    <div class="box-header">
      <h3 class="box-title">Shop List </h3><a href="<?= base_url('admin/shop/add'); ?>" class="btn btn-primary pull-right">Add Shop</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="example1" class="table table-bordered table-striped ">
        <thead>
        <tr>
          <th>Shop Name</th>
          <th>Mobile</th>
          <th>Locality</th>
          <th>Status</th>
          <th style="width: 150px;" class="text-right">Option</th>
        </tr>
        </thead>
        <tbody>
          <?php foreach($all_shop as $row): ?>
          <tr>
            <td><?= $row['shop_name'] ?></td>
            <td><?= $row['phone']; ?></td>
            <td><?= $row['locality']." / ".$row['city']; ?></td>
             <?php
              if($row['status']=='active')
              {
                $data=$row['status'];
                $cls='primary';
                $status="block";
              }
              if($row['status']=='block')
              {
                $data=$row['status'];
                $cls='danger';
                $status="active";
              }
            ?>
            <td><a href="<?= base_url('admin/shop/status/'.$status."/".$row['shop_id']); ?>" class="btn btn-<?=$cls?> btn-flat"><?=$data?></a></td>
            <td class="text-right"><a href="<?= base_url('admin/shop/order/'.$row['shop_id']); ?>" class="btn btn-info btn-flat"><i class="fa fa-shopping-cart" title="View all Order"></i></a><a title="View Shop Detail" href="<?= base_url('admin/shop/view/'.$row['shop_id']); ?>" class="btn btn-warning btn-flat"><i class="fa fa-eye"></i></a><a href="<?= base_url('admin/shop/edit/'.$row['shop_id']); ?>" title="Edit shop" class="btn btn-success btn-flat"><i class="fa fa-edit"></i></a><a href="<?= base_url('admin/shop/del/'.$row['shop_id']); ?>" title="Delete Shop" class="btn btn-danger btn-flat "><i class="fa fa-trash"></i></a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
       
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>  

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
     $('#example1').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
  });
  

</script> 

<script>
$("#view_users").addClass('active');
</script>        
