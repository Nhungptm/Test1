<!-- 入力フォーム -->

<div>
<p>何が好き？</p>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
  <input type="checkbox" name="foods[]" value="ごはん">ごはん
  <input type="checkbox" name="foods[]" value="ラーメン">ラーメン
  <input type="checkbox" name="foods[]" value="うどん">うどん<br />
  <input type="checkbox" name="foods[]" value="そば">そば
  <input type="checkbox" name="foods[]" value="パン">パン
  <input type="checkbox" name="foods[]" value="小麦粉">小麦粉<br /><br />
  <input type="submit" value="送信" name="btn">
</form>
</div>

<div>
<?php
//入力内容を表示する

echo "<p>あなたの好きなもの</p>\n";
echo "<p>";
for ($i = 0; $i < count(@$_POST["foods"]); $i++){
  echo @$_POST["foods"][$i]."　";
}
echo "</p>\n";
?>
</div>