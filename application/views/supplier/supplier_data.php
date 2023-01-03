<section class="content-header">
  <h1>Supplier
    <small>Pemasok Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Suppliers</i>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Suppliers</h3>
                <div class="pull-right">
                    <a href="<?=site_url('supplier/add')?>" class="btn btn-primary btn-flat">
                       <i  class="fa fa-user"></i> Create +
                    </a>
                </div>
        </div>

            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($row->result() as $key => $data) { ?>
                        <tr>
                            <td><?=$no++?>.</td>
                            <td><?=$data->name?></td>
                            <td><?=$data->phone?></td>
                            <td><?=$data->address?></td>
                            <td><?=$data->description?></td>
                            <td class="text-center" width="160px">
                                <a href="<?=site_url('supplier/del/'.$data->supplier_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
                                    <i  class="fa fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
        </div>
</div>

    </section>