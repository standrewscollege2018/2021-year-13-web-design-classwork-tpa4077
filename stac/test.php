<script>
$(document).ready(function(){
/* The $nameID is used so that by selecting the all checkbox in level for example, it only unchecks the specific filters in level and not all specific filters because the it is all in the same loop */
/* If filter is set (If a specific box is checked) */
  <?php if (isset($_SESSION['levelID'])) { ?>
/* Uncheck the all checkbox */
    $('input[id="all<?php echo "$nameID"; ?>"]').prop("checked", false);
  <?php }
/* If no filters are set (If all specifics are unchecked or all is checked) */
  else { ?>
/* Uncheck any specifics and check all */
    $('input[id="specific<?php echo "$nameID"; ?>"]').prop("checked", false);
    $('input[id="all<?php echo "$nameID"; ?>"]').prop("checked", true);
  <?php } ?>
});
</script>



<script>
$(document).ready(function(){
/* The $nameID is used so that by selecting the all checkbox in level for example, it only unchecks the specific filters in level and not all specific filters because the it is all in the same loop */
  $('input[id="all<?php echo "$nameID"; ?>"]').click(function(){
    if($(this).prop("checked") == true){
      $('input[id="specific<?php echo "$nameID"; ?>"]').prop("checked", false);
    }
  });
  $('input[id="specific<?php echo "$nameID"; ?>"]').click(function(){
    if($(this).prop("checked") == true){
      $('input[id="all<?php echo "$nameID"; ?>"]').prop("checked", false);

    }
  });

    if($('input[id="specific<?php echo "$nameID"; ?>"]').prop("checked") == false){
      $('input[id="all<?php echo "$nameID"; ?>"]').prop("checked", true);
    }

  $('input[id="specific<?php echo "$nameID"; ?>"]').click(function(){
    if($(this).prop("checked") == false){
      $('input[id="all<?php echo "$nameID"; ?>"]').click(function(){
        if($(this).prop("checked") == false){
      $('input[id="all<?php echo "$nameID"; ?>"]').prop("checked", true);
        }
      });
    }
  });
});
</script>



<script>
$(document).ready(function(){
/* The $nameID is used so that by selecting the all checkbox in level for example, it only unchecks the specific filters in level and not all specific filters because the it is all in the same loop */
  $('input[id="all<?php echo "$nameID"; ?>"]').click(function(){
    if($(this).prop("checked") == true){
      $('input[id="specific<?php echo "$nameID"; ?>"]').prop("checked", false);
    }
  });
  $('input[id="specific<?php echo "$nameID"; ?>"]').click(function(){
    if($(this).prop("checked") == true){
      $('input[id="all<?php echo "$nameID"; ?>"]').prop("checked", false);
    }
  });
  $('input[id="specific<?php echo "$nameID"; ?>"]').click(function(){
    if($(this).prop("checked") == false){
      var checked = $("#test input[type=checkbox]:checked").length;
      alert(checked);
      $('input[id="all<?php echo "$nameID"; ?>"]').prop("checked", true);
    }
  });
  $('input[id="specific<?php echo "$nameID"; ?>"]').click(function(){
    if($(this).prop("checked") == false){
      $('input[id="all<?php echo "$nameID"; ?>"]').click(function(){
        if($(this).prop("checked") == false){
      $('input[id="all<?php echo "$nameID"; ?>"]').prop("checked", true);
        }
      });
    }
  });
});
</script>
