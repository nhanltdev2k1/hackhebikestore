<?php
	$result=mysqli_query($link,"SELECT * FROM ma_sanpham WHERE id = '$_GET[id]' ");
   $row_dulieu_sua		=	mysqli_fetch_array($result);
    $hinhanh	=	$row_dulieu_sua['hinhanh'];
	$taptin="../Hinh CTSP/$hinhanh";
	unlink($taptin);
	
    
	
	$chuoi="DELETE FROM ma_sanpham WHERE id = '$_GET[id]' ";
	mysqli_query($link,$chuoi);
		 echo "<form name='frm_dangnhap'>
			        <input type'hidden' name='chuyentrang' value='quan_tri.php?p=danhsach_masanpham'>
					</form>";
?>
<script type="text/javascript">
if(document.frm_dangnhap)
 {
   var trangcanchuyen = document.frm_dangnhap.chuyentrang.value;
   window.location = trangcanchuyen;
 }
</script>