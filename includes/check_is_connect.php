<?php
require "config.php";
if (isset($_SESSION['id'])) {
?>
<SCRIPT LANGUAGE="JavaScript"> 
	document.location.href="/membres/index.php"
</SCRIPT>
<?php
}
?>