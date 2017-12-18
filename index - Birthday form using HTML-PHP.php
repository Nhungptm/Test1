<html>
<body>
<!-- dang don gian -->
<form action="registration.php" method="post">
<p><u>Select table</u></p>

<p>Select date:</p>
<select name="day">
<?php
for($i=1;$i<=31;$i++)
{
    echo '<option value='.$i.'>'.$i.'</option>';
}

?>

</select>

<select name="month">
<option value="January">January</option>
<option value="February">February</option>
<option value="Mars">Mars</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>

<select name="year">
<?php
for($i=2011;$i<=2015;$i++)
{
    echo '<option value='.$i.'>'.$i.'</option>';
}

?>
</select>
<br/><br/>
<input type="submit" value="Submit" />
</form>
</br><br/><br/>

<!-- dang pro -->
<form action="registration.php" method="post">
 <select id="birth-year" name="birth_year" class="">
                <?php
                for($i=1900;$i<=2020;$i++)
                {
                  echo '<option value='.$i; if(isset($get_data['birth_year']) && $get_data['birth_year'] == $i) {?> selected="selected" <?php };
                  echo '>';
                  echo $i;
                  echo '</option>';                 
                }
               ?>
              </select>
              <span>年</span>
              <select id="birth-month" name="birth_month" class="validate[required]">                
                <option value="1" <?php if(isset($get_data['birth_month']) && $get_data['birth_month'] == 1) {?> selected="selected" <?php } ?>>1</option>
                <option value="2" <?php if(isset($get_data['birth_month']) && $get_data['birth_month'] == 2) {?> selected="selected" <?php } ?>>2</option>
                <option value="3" <?php if(isset($get_data['birth_month']) && $get_data['birth_month'] == 3) {?> selected="selected" <?php } ?>>3</option>
                <option value="4" <?php if(isset($get_data['birth_month']) && $get_data['birth_month'] == 4) {?> selected="selected" <?php } ?>>4</option>
                <option value="5" <?php if(isset($get_data['birth_month']) && $get_data['birth_month'] == 5) {?> selected="selected" <?php } ?>>5</option>
                <option value="6" <?php if(isset($get_data['birth_month']) && $get_data['birth_month'] == 6) {?> selected="selected" <?php } ?>>6</option>
                <option value="7" <?php if(isset($get_data['birth_month']) && $get_data['birth_month'] == 7) {?> selected="selected" <?php } ?>>7</option>
                <option value="8" <?php if(isset($get_data['birth_month']) && $get_data['birth_month'] == 8) {?> selected="selected" <?php } ?>>8</option>
                <option value="9" <?php if(isset($get_data['birth_month']) && $get_data['birth_month'] == 9) {?> selected="selected" <?php } ?>>9</option>
                <option value="10" <?php if(isset($get_data['birth_month']) && $get_data['birth_month'] == 10) {?> selected="selected" <?php } ?>>10</option>
                <option value="11" <?php if(isset($get_data['birth_month']) && $get_data['birth_month'] == 11) {?> selected="selected" <?php } ?>>11</option>
                <option value="12" <?php if(isset($get_data['birth_month']) && $get_data['birth_month'] == 12) {?> selected="selected" <?php } ?>>12</option>
              </select>
              <span>月</span>
              <select id="birth-date" name="birth_date" class="validate[required]">
               <?php
                for($i=1;$i<=31;$i++)
                {
                  echo '<option value='.$i; if(isset($get_data['birth_date']) && $get_data['birth_date'] == $i) {?> selected="selected" <?php };
                  echo '>';
                  echo $i;
                  echo '</option>';                 
                }
               ?>
              </select>
              <span>日</span>
<br/><br/>
<input type="submit" value="Submit" />
</form>
</body>
</html>