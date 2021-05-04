<?php include_once('inc/db.php');?>
<?php include_once('inc/header.php');?>



<div class="container mt-5 px-5">
      <div class="row justify-content-center">
          <div class="col-md-9 ">
            <div class="card text-center shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-header bg-dark text-white">
                <h5>TO DO LIST</h5>
            </div>

            <div class="card-body">
            <div class="row justify-content-center">
                  <div class="col-sm-12">
                     <form action="config.php" method="post" class="form ">
                        <div class="input-group ">
                           <input type="text" class="form-control shadow-lg" placeholder="Add task here ....." name="task">
                           <div class="input-group-append" >
                               <button class="btn btn-success shadow-lg" type="submit" id="button-addon2" name="submit">Add Task</button>
                               <a href="trash.php" class="btn btn-primary shadow-lg ml-5"><i class="fa fa-archive"></i> Trash Bin</a>
                           </div>
                           <br>
                        </div>
                     </form>
                  </div>
              </div>
                <table class="table table-hover mt-3">
                    <thead class="bg-dark text-white">
                        <tr>
                         <th></th>
                        <th >Task</th>
                        <th >Added</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                    <?php 
            
                        $tasks = mysqli_query($conn, "SELECT * FROM task_list");

                        $i = "<input type='checkbox' id='check'>"; 
                        
                        while ($row = mysqli_fetch_array($tasks)) { ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td class="task"><?php echo $row['task']; ?> </td>
                                <td class="task"><?php echo $row['created_at']; ?> </td>
                                <td> 
                                    <a href="remove.php?del_id=<?php echo $row['id']?>" class="
                                    btn btn-danger">Delete</a> 
                                    <button class="btn btn-info" type="button" data-toggle="modal"data-target="#update_modal<?php echo $row['id']?>">Update</button>                     
                                </td>
                            </tr>

                                <?php include 'update.php';?>
                                <?php $i++; } ?>

                    </tbody>
                </table>
            </div>

           
          
          </div>
      </div>
</div>




<?php include_once('inc/footer.php');?>