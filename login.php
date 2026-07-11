<?php
include("dbconnect.php");
include("header.php");
include("checkloginerror.php");
?>

<div class="container mt-5">
   
    <form action="" method="POST">
       <h3 class="mb-3">Login</h3>

        <input type="email" name="email" class="form-control-mb-3" placeholder="email" value="<?=$email?>">
        <input type="password" name="password" class="form-control-mb-3" placeholder="password" value="<?=$password?>">

        <button class="btn btn-primary w-10">Login</button>
    </form>
</div>
<?php
include("footer.php");
?>