<input type="button" name="update" value="تعديل" onclick="update(<?php echo $id ?>)">


<script type="text/javascript">
	function update(x) {
			var c="<?php echo $class; ?>";
			if (c == "1st") 
				window.location.href = 'update_1st.php?id=' + x;
			if (c == "2nd") 
				window.location.href = 'update_2nd.php?id=' + x;
			if (c == "3rd_cs") 
				window.location.href = 'update_3rd_cs.php?id=' + x;
			if (c == "3rd_is") 
				window.location.href = 'update_3rd_is.php?id=' + x;
			if (c == "4th_cs") 
				window.location.href = 'update_4th_cs.php?id=' + x;
			if (c == "4th_is") 
				window.location.href = 'update_4th_is.php?id=' + x;
	}
</script>