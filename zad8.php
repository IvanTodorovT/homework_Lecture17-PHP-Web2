<form name="testForm" method="post">

<?php $count = isset($_POST["count"]) ? $_POST["count"] : 0; ?>
<?php

  if(isset($_POST['send'])){
    if($count > -1){
      echo "<!-- ".$count.' --> ';
      $count++;
     
      echo $count ;
      echo "<br>";
    }
  }
?>
<input type="hidden" name="count" value="<?php echo $count;?>" />
<input type="submit" name="send" id="next" value="Send"/>
</form>