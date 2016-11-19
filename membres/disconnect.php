<?php require('../includes/config.php'); ?>
<?php require('../includes/check_is_noconnect.php'); ?>
<?php
session_destroy();
?>
<SCRIPT LANGUAGE="JavaScript"> 
	document.location.href="../index.php"
</SCRIPT>