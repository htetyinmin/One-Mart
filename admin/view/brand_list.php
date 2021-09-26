<?php

    $currentPage = 'brand';
    include_once "../template/header.php";

    $sql = "SELECT * FROM brand";
    $brandAll = getItems($sql);
      
?>

            <!--content Area Start-->
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-white mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php" class="text-success">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page" class="text-success">Brand List</li>
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
                                    <i class="feather-image text-success"></i> Brand List
                                </h4>
                                <div class="">
                                    <a href="#" class="btn btn-outline-secondary full-screen-btn">
                                        <i class="feather-maximize-2"></i>
                                    </a>
                                    <a href="brand_add.php" class="btn btn-outline-success">
                                        <i class="feather-plus-circle"></i>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <table id="list" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i = 1;
                                        foreach($brandAll as $brand){
                                    ?>
                                        <tr>
                                            <td><?= $i++."." ?></td>
                                            <td><?= $brand->name ?></td>
                                            <td>
                                                <img src="../uploads/<?= $brand->photo ?>" width="80" height="auto" alt="Cover">
                                            </td>
                                            <td>
                                                <a href="brand_edit.php?id=<?php echo $brand->id ?>" class="btn btn-outline-success"><i class="feather-edit"></i></a>

                                                <?php

                                                    $tmp = "SELECT * FROM items where brand_id=$brand->id";
                                                    $item = getItems($tmp);

                                                    if ($item) {
                                                        
                                                ?>

                                                <button id="no_delete" class="btn btn-outline-danger"><i class="feather-trash-2"></i></button>

                                                <?php } else { ?>

                                                <form action="brand_delete.php" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
                                                    <input type="hidden" name="id" value="<?= $brand->id ?>">
                                                    <button class="btn btn-outline-danger" name="delete">
                                                        <i class="feather-trash-2"></i>
                                                    </button>
                                                </form>

                                                <?php } ?>

                                            </td>
                                        </tr>
                                        
                                    <?php }?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Photo</th>
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

<script>
    
    document.querySelector("#no_delete").addEventListener('click', function(){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'You can\'t delete this brand. Go delete item related to this brand first to perform this action!',
            confirmButtonText: 'OK. Got it!',
            confirmButtonColor: '#28a745'
        })
    });

</script>