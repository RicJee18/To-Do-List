<?php
include_once('inc/db.php');
?>
<?php include_once('inc/header.php');?>



<div class="container mt-5 px-5">
      <div class="row">
          <div class="col">
            <div class="card text-center">
            <div class="card-header bg-dark text-white">
                <h5>To Do Task List</h5>
            </div>
              <div class="row">
                  <div class="col px-5">
                     <form action="config.php" method="post" class="form mt-4">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Add New Task ... " name="task">
                           <div class="input-group-append">
                               <button class="btn btn-success" type="submit" id="button-addon2" name="submit">Add</button>
                           </div>
                        </div>
                     </form>
                  </div>
              </div>
                
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col">Task</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        // select all tasks if page is visited or refreshed
                        $tasks = mysqli_query($conn, "SELECT * FROM task_list");

                        // $i = "<input type='checkbox'>"; 
                        $i = 1;
                        while ($row = mysqli_fetch_array($tasks)) { ?>
                            <tr>
                                <td> <?php echo $i; ?> </td>
                                <td class="task"><?php echo $row['task']; ?> </td>
                                <td> 
                                    <a href="config.php?del_task=<?php echo $row['id']?>">Remove</a> 
                                    <a href="index.php?edit_task=<?php echo $row['id'] ?>">Edit</a> 
                               
                                </td>
                                
                            </tr>
                        <?php $i++; } ?>	
                    </tbody>
                </table>
            </div>
          
          </div>
      </div>
</div>




<?php include_once('inc/footer.php');?>