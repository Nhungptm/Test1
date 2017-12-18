
<table id="table1">
	<tr>
		<td>Ho Ten</td>
		<td>Gioi Tinh</td>
		<td>Nam Sinh</td>
	</tr>
	<tr>
		<td><input type="text" name=""></td>
		<td><input type="text" name=""></td>
		<td><input type="text" name=""></td>
	</tr>
</table>
<input type="button" name="" value="Add Row" onclick="addCancelTable()">

<script type="text/javascript">
function addCancelTable(){
  var lastTr = $("#table1 tr:last");

  cloneTr = lastTr.clone(true);

  cloneTr.find('input[name^=period_start]').val("");
  cloneTr.find('input[name^=period_end]').val("");
  cloneTr.find('input[name^=rate]').val("");
  cloneTr.find('input[name^=ccfid]').val("999");

  lastTr.after(cloneTr);
}
</script>

<!-- ko chay la vi chua add thu vien Jquery -->