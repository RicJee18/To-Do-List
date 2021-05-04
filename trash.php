
<?php include_once('inc/db.php');?>
<?php include_once('inc/header.php');?>

<div class="container mt-5 px-5">
      <div class="row justify-content-center">
          <div class="col-md-9">
             <div class="card shadow-lg p-3 mb-5 bg-white rounded">    
            <div class="card-header bg-dark text-white">
                <h5 class="text-center">Recycle Bin</h5>
            </div>

            <div class="card-body">

                <a href="index.php" class="pull-left btn btn-primary shadow-lg">Back</a>
                <br>
                <table class="table table-hover mt-4">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Task</th>
                            <th>Created At</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
                        </tr>
                    </thead>
                    <tbody>
                           <?php 
                              $query = mysqli_query($conn, "SELECT * FROM `trash`") or die(mysqli_error());
                              $num = 1;
                              while($fetch = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                               <td><?php echo $num ?></td>
					           <td><?php echo $fetch['task']?></td>
                               <td><?php echo $fetch['created_at']?></td>
					           <td>
                                <a class="btn btn-info" href="restore.php?del_id=<?php echo $fetch['trash_id']?>"> Restore</a>
                                <a class="btn btn-danger" href="restore.php?delperma_id=<?php echo $fetch['trash_id']?>"> Delete</a>
                               </td>
                               
                            </tr>
                            <?php $num++; } ?>

                    </tbody>
                </table>
           

          </div>
      </div>
</div>


<?php include_once('inc/footer.php');?>