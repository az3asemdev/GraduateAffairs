<input type="button" name="delete" value="حذف" class="btn btn-outline-primary" onclick="del(<?php echo $id ?>)">

<script type="text/javascript">
	function del(x) {
		if (confirm("هل تريد الحذف؟")){
			window.location.href = 'delete_std.php?id=' + x;

		}
	}
</script>

