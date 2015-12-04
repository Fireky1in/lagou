 <?php
	header('Content-type:text/html;charset=utf-8');
	function jump($code,$url)
	{
		echo '<script type="text/javascript">
			alert("'.$code.'");window.location.href="'.$url.'";
		</script>';
	}