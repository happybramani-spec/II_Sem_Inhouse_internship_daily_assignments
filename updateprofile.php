<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	include_once __DIR__ . '/checkupdatename.php';
}
include("dashheader.php");
include("dashvertical.php");

if (isset($_SESSION['error'])) {
	echo '<div class="container mt-3"><div class="alert alert-danger">' . htmlspecialchars($_SESSION['error']) . '</div></div>';
	unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
	echo '<div class="container mt-3"><div class="alert alert-success">' . htmlspecialchars($_SESSION['success']) . '</div></div>';
	unset($_SESSION['success']);
}
?>

<form action="" method="POST" class="container mt-4">
	<h3 class="mb-3">Update Name</h3>
	<div class="mb-3">
		<input type="text" name="name" class="form-control" placeholder="Enter new name" value="<?php echo isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : ''; ?>">
	</div>
	<button class="btn btn-primary">Update Name</button>
</form>

<?php
include("dashfooter.php");
include("footer.php");
?>
