<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Add New Menu</a>
            <?= form_error('menu', '<div class="alert alert-danger text-center" role="alert">', '</div>') ?>
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $m['menu'] ?></td>
                            <td>
                                <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?= $m['id']; ?>">edit</a>
                                <a href="<?= base_url('index.php/menu/deletemenu/') . $m['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete menu \'<?= $m['menu']; ?>\' ?');">delete</a>
                            </td>
                        </tr>
                        <!-- Modal edit-->
                        <div class="modal fade" id="editModal<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModaLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Menu</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('index.php/menu/editmenu/') . $m['id'] ?>" method="POST">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name" value="<?= $m['menu'] ?>">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('index.php/menu') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>