<?php
// Start the session
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="refresh" content="<?php echo $_SESSION['refresh-time']?>;URL='<?php echo $_SERVER['PHP_SELF']?>'">

	<title><?= $data['title']; ?></title>
	<link href="<?php echo base_url(); ?>style/style.css" rel="stylesheet" type="text/css" />
</head>
