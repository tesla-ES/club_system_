<?php
$page_name=basename(__FILE__);
include_once '../page_validation.php';
?>
<HTML dir=rtl>
<META content="text/html; charset=windows-1256" http-equiv=Content-Type>
	<meta http-equiv="Content-Language" content="it">
<head>
    <link rel="stylesheet" href="../css/table_css.css">
</head>
<?php
r_header($page_name,$con);
include_once '../menu.php';write_menu('Holder');
?>

<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" bgcolor="#F2F2F2">

<FORM NAME="FORM1"  action="Holder_incom_report.php?start=0" method="post">

<BR>
    
<table>
<tbody>

<TR  align="middle">
<TH><FONT size='4'  >��� : </TH><TH align="right"> <INPUT TYPE="TEXT" NAME="h_month" style="font-size: 10pt;height:25px;width:200px" value="">
</TH>
</TR>



<TR  align="middle">
<TH><FONT size='4'  >����� :</TH><TH align="right"><INPUT TYPE="TEXT" NAME="h_year" style="font-size: 10pt;height:25px;width:200px" value=""></TH>
</TR>

</tbody>

</table>
<br><br>

<INPUT type="image" name="b1"  src="../img/search.png">

</FORM>


</BODY>

</HTML>
