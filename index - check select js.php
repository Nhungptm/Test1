<script language='JavaScript' type='text/javascript'>
    function validateThisFrom(thisForm) {
        if (thisForm.FIELDNAME.value == "") {
            alert("Please make a selection 1");
            thisForm.FIELDNAME.focus();
            return false;
        }
        if (thisForm.FIELDNAME2.value == "") {
            alert("Please make a selection 2");
            thisForm.FIELDNAME2.focus();
            return false;
        }
    }
</script>
<form onSubmit="return validateThisFrom (this);">
<input type="text" name="" class="validate[required]">
    <select name="FIELDNAME" class="form-control">
        <option value="">- select -</option>
        <option value="value 1">Visible info of Value 1</option>
        <option value="value 2">Visible info of Value 2</option>
    </select>
    <select name="FIELDNAME2" class="form-control">
        <option value="">- select -</option>
        <option value="value 1">Visible info of Value 1</option>
        <option value="value 2">Visible info of Value 2</option>
    </select>
    <input type="submit" name="" value="Click">
</form>
<form class="" >
  <input type="text" name="" class="validate[required]">
</form>
