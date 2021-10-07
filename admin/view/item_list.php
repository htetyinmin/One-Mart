<?php

    include_once "../../system/session.php";

    if(!checkSession('admin')) {
        header("Location: ../../index.php");
    }

    $currentPage = 'item';
    include_once "../template/header.php";

    $sql = "SELECT * FROM items";
    $items = getItems($sql);
    
?>

            <!--content Area Start-->
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php" class="text-success">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" class="text-success">Item List</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="mb-0">
                                    <i class="feather-box text-success"></i> Item List
                                </h4>
                                <div class="">
                                    <a href="#" class="btn btn-outline-secondary full-screen-btn">
                                        <i class="feather-maximize-2"></i>
                                    </a>
                                    <a href="item_add.php" class="btn btn-outline-success">
                                        <i class="feather-plus-circle"></i>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <table id="list" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Code No.</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i = 1;
                                        foreach($items as $item){ 
                                    ?>
                                    <tr>
                                        <td><?= $i++."." ?></td>
                                        <td><?= $item->codeno ?></td>
                                        <td><?= $item->name ?></td>
                                        <td>
                                            <img src="../uploads/<?= $item->photo ?>" width="80" height="auto" alt="Cover">
                                        </td>
                                        <td>
                                            <?php if ($item->discount == null) { ?>
                                                <span><?= $item->price ?> KS</span>
                                            <?php } else { ?>
                                            <span><?= $item->discount ?> KS</span><br>
                                            <span><del><?= $item->price ?></del></span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="item_edit.php?id=<?php echo $item->id ?>" class="btn btn-outline-success"><i class="feather-edit"></i></a>
                                            
                                            <form action="item_delete.php" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
                                                <input type="hidden" name="id" value="<?= $item->id ?>">
                                                <button class="btn btn-outline-danger" name="delete">
                                                    <i class="feather-trash-2"></i>
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Code No.</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--content Area Start-->
        </div>
    </div>
<?php
    include_once "../template/footer.php";
?>
