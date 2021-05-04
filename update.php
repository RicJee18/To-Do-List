<!-- Modal -->
<div class="modal fade" id="update_modal<?php echo $row['id']?>" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <form action="update_query.php" method="post">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white" >
                            <h5 class="text-center">Update Task</h5>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="task" value="<?php echo $row['task']; ?>">
                                    </div>
                            </div>
                            <div class="modal-footer">
                               <button class="btn btn-success" type="submit" id="button-addon2" name="update">Update</button>
                            </div>
                    
                        </div>
                    </form>
                </div>
            </div>