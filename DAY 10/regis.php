<?php
include("dbconnect.php");
include("header.php");
include("checkregerror.php");
?>

<div class="container mt-5">
   
    <form action="" method="POST">
       <h3 class="mb-3">Student Registration Form</h3>

        <input type="text" name="name" class="form-control-mb-3" placeholder="name" value="<?=$name?>">
        <input type="email" name="email" class="form-control-mb-3" placeholder="email" value="<?=$email?>">
        <input type="password" name="password" class="form-control-mb-3" placeholder="password" value="<?=$password?>">
        <input type="password" name="confirmpassword" class="form-control-mb-3" placeholder="confirmpassword" value="<?=$confirmpassword?>">

        <button class="btn btn-primary w-10">Register</button>
    </form>
</div>
<?php
include("footer.php");
?>