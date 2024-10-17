<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-header">Before & After List</h5>
                <a href="<?= base_url() . 'before_after_create' ?>" class="btn btn-primary d-block m-3">
                    <i class='bx bx-list-ul'></i> Add</a></a>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table id="myTable" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr class="table-dark">
                                <th class="text-white">S.No</th>
                                <th class="text-white">Name</th>
                                <th class="text-white">Text</th>
                                <th class="text-white">Alt Name</th>
                                <th class="text-white">Before Image</th>
                                <th class="text-white">After Image</th>
                                <th class="text-white">Before & After Image</th>
                                <th class="text-white">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($before_after as $row): ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td class="package-content"><?php echo $row->name; ?></td>
                                    <td class="package-content"><?php echo $row->text; ?></td>
                                    <td class="package-content"><?php echo $row->alt_name; ?></td>
                                    <td><?php if ($row->before_image != ''): ?>
                                        <img src="<?php echo base_url('uploads/before_after/' . $row->before_image); ?>" alt="before_image" style="width:100%; height:100px;">
                                    <?php endif; ?></td>
                                    <td><?php if ($row->after_image != ''): ?>
                                        <img src="<?php echo base_url('uploads/before_after/' . $row->after_image); ?>" alt="after_image" style="width:100%; height:100px;">
                                    <?php endif; ?></td>
                                    <td><?php if ($row->image != ''): ?>
                                        <img src="<?php echo base_url('uploads/before_after/' . $row->image); ?>" alt="before_after" style="width:100%; height:100px;">
                                    <?php endif; ?></td>
                                    <td>
                                        <a href="<?php echo base_url() . 'Before_after/before_after_edit/' . $row->id ?>" class="btn btn-icon btn-outline-primary"><span class="tf-icons bx bx-edit-alt"></span></a> |
                                        <a href="<?php echo base_url() . 'Before_after/before_after_delete/' . $row->id ?>" class="btn btn-icon btn-outline-danger"><span class="tf-icons bx bx-trash"></span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="//cdn.datatables.net/2.1.7/css/dataTables.dataTables.min.css">
<script src="//cdn.datatables.net/2.1.7/js/dataTables.min.js"></script>
<script>
    let table = new DataTable('#myTable');
</script>