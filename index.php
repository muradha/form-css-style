<?php 

	$lebar = isset ($_POST["lebar"]) ? $_POST["lebar"]:"500";
	$warna_background = isset ($_POST["warna_background"]) ? $_POST["warna_background"]:"red";
	$tinggi = isset ($_POST["tinggi"]) ? $_POST["tinggi"]:"100";
	$tinggi_unit = isset ($_POST["tinggi_unit"]) ? $_POST["tinggi_unit"]:"px";
	$tinggi = isset ($_POST["tinggi"]) ? $_POST["tinggi"]:"100";
	$lebar_unit = isset ($_POST["lebar_unit"]) ? $_POST["lebar_unit"]:"px";
	$box_sizing = isset ($_POST["box_sizing"]) ? $_POST["box_sizing"]:"border-box";

	$border_radius = isset ($_POST["border_radius"]) ? $_POST["border_radius"]:"1";
	$border_unit = isset ($_POST["border_unit"]) ? $_POST["border_unit"]:"px";

	$resize = isset ($_POST["resize"]) ? $_POST["resize"]:"none";

	$font_style = isset ($_POST["font_style"]) ? $_POST["font_style"]:"normal";

	$padding1 = isset ($_POST["padding1"]) ? $_POST["padding1"]:"0";
	$padding_unit1 = isset ($_POST["padding_unit1"]) ? $_POST["padding_unit1"]:"px";

	$padding2 = isset ($_POST["padding2"]) ? $_POST["padding2"]:"0";
	$padding_unit2 = isset ($_POST["padding_unit2"]) ? $_POST["padding_unit2"]:"px";

	$border_color = isset ($_POST["border_color"]) ? $_POST["border_color"]:"black";
	$border_width = isset ($_POST["border_width"]) ? $_POST["border_width"]:"5";
	$bw_unit = isset ($_POST["bw_unit"]) ? $_POST["bw_unit"]:"px";
	$border_style = isset ($_POST["border_style"]) ? $_POST["border_style"]:"none";
	$ukuran_font = isset ($_POST["ukuran_font"]) ? $_POST["ukuran_font"]:"20";
	$font_unit = isset ($_POST["font_unit"]) ? $_POST["font_unit"]:"px";
	$color = isset ($_POST["color"]) ? $_POST["color"]:"black";
?>

<html>
<style type="text/css">
	.my-textarea {
  width: <?= $lebar ?><?= $lebar_unit ?>;
  height: <?= $tinggi ?><?= $tinggi_unit ?>;
  padding: <?= $padding1 ?><?= $padding_unit1 ?> <?= $padding2 ?><?= $padding_unit2 ?>;
  box-sizing: <?= $box_sizing ?>;
  border-color:<?= $border_color ?>;
  border-width:<?= $border_width ?>;
  border-style:<?= $border_style ?>;
  border-radius: <?= $border_radius ?><?= $border_unit ?>;
  background-color: <?= $warna_background ?>;
  font-size: <?= $ukuran_font ?><?= $font_unit ?>;
  resize: <?= $resize ?>;
  color: <?= $color ?>;
  font-style: <?= $font_style ?>;
}
	textarea{
		resize: none;
		width: 50%;
		height: 50%;
	}
</style>
<body>
<h2>Membuat TextArea</h2>
<form action="index.php" method="post">
	<table border="0">
      <tr>
         <td>Width:  </td>
         <td><input type="text" name="lebar"></td>
         <td>
         	<select name="lebar_unit" id="lebar_unit">
			  <option value="px">px</option>
			  <option value="pt">pt</option>
			  <option value="rem">rem</option>
			  <option value="%">%</option>
			</select>
         </td>
      </tr>
      <tr>
          <td>Height: </td>
          <td><input type="text" name="tinggi"></td>
          <td>
         	<select name="tinggi_unit" id="tinggi_unit">
			  <option value="px">px</option>
			  <option value="pt">pt</option>
			  <option value="rem">rem</option>
			  <option value="%">%</option>
			</select>
         </td>
       <tr/>
       <tr>
          <td>Padding: </td>
          <td><input type="text" name="padding1"></td>
          <td>
         	<select name="padding_unit1" id="padding_unit1">
			  <option value="px">px</option>
			  <option value="pt">pt</option>
			  <option value="rem">rem</option>
			  <option value="%">%</option>
			</select>
         </td>
         <td><input type="text" name="padding2"></td>
          <td>
         	<select name="padding_unit2" id="padding_unit2">
			  <option value="px">px</option>
			  <option value="pt">pt</option>
			  <option value="rem">rem</option>
			  <option value="%">%</option>
			</select>
         </td>
       <tr/>
      <tr>
          <td>box-sizing: </td>
          <td>
         	<select name="box_sizing" id="box_sizing">
			  <option value="content-box">content-box</option>
			  <option value="border-box">border-box</option>
			  <option value="intial">intial</option>
			  <option value="inherit">inherit</option>
			</select>
         </td>
       <tr/>
       <tr>
          <td>border width: </td>
          <td><input type="text" name="border_width"></td>
          <td>
         	<select name="bw_unit" id="bw_unit">
			  <option value="px">px</option>
			  <option value="pt">pt</option>
			  <option value="rem">rem</option>
			  <option value="%">%</option>
			</select>
         </td>
       <tr/>
       <tr>
          <td>border style: </td>
          <td>
         	<select name="border_style" id="border_style">
			  <option value="none">none</option>
			  <option value="hidden">hidden</option>
			  <option value="dotted">dotted</option>
			  <option value="dashed">dashed</option>
			  <option value="solid">solid</option>
			  <option value="double">double</option>
			</select>
         </td>
       <tr/>
       <tr>
          <td>border color: #</td>
          <td><input type="text" name="border_color"></td>
       <tr/>
       <tr>
          <td>border radius: </td>
          <td><input type="text" name="radius_border"></td>
          <td>
         	<select name="border_unit" id="border_unit">
			  <option value="px">px</option>
			  <option value="pt">pt</option>
			  <option value="rem">rem</option>
			  <option value="%">%</option>
			</select>
         </td>
       <tr/>
       <tr>
          <td>background-color:#</td>
          <td><input type="text" name="warna_background"></td>
       <tr/>
        <tr>
          <td>resize:</td>
          <td>
         	<select name="resize" id="resize">
			  <option value="none">none</option>
			  <option value="both">both</option>
			  <option value="horizontal">horizontal</option>
			  <option value="vertical">vertical</option>
			</select>
         </td>
       <tr/>
       <tr>
          <td>font-size:</td>
          <td><input type="text" name="ukuran_font"></td>
          <td>
         	<select name="font_unit" id="font_unit">
			  <option value="px">px</option>
			  <option value="pt">pt</option>
			  <option value="rem">rem</option>
			  <option value="%">%</option>
			</select>
         </td>
       <tr/>
       <tr>
          <td>color:</td>
          <td><input type="text" name="warna"></td>
       <tr/>
       <tr>
           <td><input type="submit"></td>
       </tr>
</table>
</form>



<p>Css:</p>
<textarea disabled>
	.my-textarea {
  width: <?= $lebar ?><?= $lebar_unit ?>;
  height: <?= $tinggi ?><?= $tinggi_unit ?>;
  padding: <?= $padding1 ?><?= $padding_unit1 ?> <?= $padding2 ?><?= $padding_unit2 ?>;
  box-sizing: <?= $box_sizing ?>;
  border-color:<?= $border_color ?>;
  border-width:<?= $border_width ?>;
  border-style:<?= $border_style ?>;
  border-radius: <?= $border_radius ?><?= $border_unit ?>;
  background-color: <?= $warna_background ?>;
  font-size: <?= $ukuran_font ?><?= $font_unit ?>;
  resize: <?= $resize ?>;
  color: <?= $color ?>;
  font-style: <?= $font_style ?>;
}
</textarea>
<form>
	<p>Contoh textarea</p>
  <textarea class="my-textarea">Some text...</textarea>
</form>

</body>
</html>