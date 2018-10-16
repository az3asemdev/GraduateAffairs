<input type="button" name="delete" value="حذف" onclick="del(<?php echo $id ?>)">

<script type="text/javascript">
	function del(x) {
		if (confirm("هل تريد الحذف؟")){

			var c="<?php echo $class; ?>";
			window.location.href = 'delete_rslt.php?id=' + x + '&class=' + c;

		}
	}
</script>

