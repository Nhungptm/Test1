<html>
 <head>
  <title>テーブル クリックしたセルの行位置,列位置,内容の取得</title>
<style type="text/css">
<!--
#TBL{
  border-collapse: collapse;
 }
#TBL th,td{
  width : 170px;
  cursor: hand;
  padding:5px;
 }
#Div{
  border: 1px ridge fuchsia;
  width : 380px;
  padding : 10px;
}
-->
</style>
<script language="javascript">
function getCELL() {
 var myTbl = document.getElementById('TBL');
    // trをループ。rowsコレクションで,行位置取得。
　for (var i=0; i<myTbl.rows.length; i++) {
     // tr内のtdをループ。cellsコレクションで行内セル位置取得。
   for (var j=0; j<myTbl.rows[i].cells.length; j++) {
var Cells=myTbl.rows[i].cells[j]; //i番行のj番列のセル "td"
　       // onclickで 'Mclk'を実行。thisはクリックしたセル"td"のオブジェクトを返す。
　　 Cells.onclick =function(){Mclk(this);}
　  }
　 }
　}
function Mclk(Cell) { 
 var rowINX = '行位置：'+Cell.parentNode.rowIndex;//Cellの親ノード'tr'の行位置
 var cellINX = 'セル位置：'+Cell.cellIndex;
 var cellVal = 'セルの内容：'+Cell.innerHTML;
　　　　　　　　//取得した値の書き出し
     res=rowINX + '<br/> '+ cellINX + '<br/>' + cellVal;
      document.getElementById('Mbox0').innerHTML=res;
       var Ms1=document.getElementById('Mbox1')
        Ms1.innerText=Cell.innerHTML;
        Ms1.textContent=Cell.innerHTML;
    }
      // try ～ catch 例外処理、エラー処理
      // イベントリスナーaddEventListener,attachEventメソッド
try{
 window.addEventListener("load",getCELL,false);
     }catch(e){
   window.attachEvent("onload",getCELL);
  }
</script>
</head>
<body>
<table border="1" id="TBL">
 <tr>
   <th><a href="javascript:void(0)" style="background-color:pink;">入力フォーム</a></th>
   <th><span style="color : red;">画像</span></th>
   <th>文字列</th>
 </tr>
 <tr>
   <td><input type="checkbox">：チェックボックス</td>
   <td><strong style="color : teal;">ドラッグして移動</strong></td>
   <td><a href="javascript:void(0)">流れる文字</a></td>
</tr>
<tr>
  <td><input type="button" value="ボタン" style="background-color:#eeffff;"></td>
  <td><code>&lt;img src=&quot;**.gif&quot;&gt;</code></td>
  <td><cite>文字数取得</cite></td>
</tr>
</table>
  <br>
<div id="Div"><p id="Mbox0">セルをクリックしたらここに書き出します。</p>
 <p id="Mbox1">インデックス値は '0'から始まります。</p>
</div>
<br>
</body>
</html>