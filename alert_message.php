<?php $successes = getFlashData("success_message");
      if(is_array($successes) && !empty($successes)){
        foreach($successes as $success){
           ?> 
             <div class="row">
                  <div class="alert alert-success">
                    <button data-dismiss="alert" class="close" type="button">×</button>
                    <strong>Well done!</strong> <?php echo $success;?>.
                  </div>
              </div>

           <?php
        }
      }
?>

<?php $errors = getFlashData("error_message");
      if(is_array($errors) && !empty($errors)){
        foreach($errors as $error){
           ?> 
             <div class="row">
                  <div class="alert alert-warning">
                    <button data-dismiss="alert" class="close" type="button">×</button>
                    <strong>Sorry!</strong> <?php echo $error;?>.
                  </div>
              </div>

           <?php
        }
      }
?>