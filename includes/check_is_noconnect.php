<?php
require "config.php";
if (!isset($_SESSION['id'])) {
?>
<SCRIPT LANGUAGE="JavaScript"> 
	document.location.href="/index.php"
</SCRIPT>
<?php
}
?>