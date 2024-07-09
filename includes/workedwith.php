<?php

$tool_List = getAllTool($user_profile); 

?>
<div class="working-with-area">
                    <h2 class="main-common-title">Works With more than <?php echo count($tool_List) ?> different Tools ✨ Excellently 
                    </h2>
                    <div class="working-with-main">

                      <?php
                          foreach ($tool_List as $tools => $value){
                      ?>
                      <div class="items">
                        <img src="./includes/uploads/<?php echo $tool_List[$tools][4]; ?>" alt="notion">
                      </div>
<?php
                          }
?>
                    </div>
                  </div>