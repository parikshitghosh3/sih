<?php
include("header.html");
?>
<!DOCTYPE html>
<html>
   <head>
      <title>FORM</title>
   </head>
<style>
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  padding-top: 70px;
  padding-left: 40px;

}

body
{

background-color:gray;
}
</style>

	
   <body>
   
      <p style="font-size:25px;text-align:center;">APPLICATION FORM FOR LOAN SCHEME</p>
      <div class="container">
      <form name="myform" action="insertdata.php" method="post"><ul>
         <li>Loan Scheme:&emsp; <input type = "text" name = "ls" /></li>
         <br><br>
         <li>Total Project Cost:&emsp;<input type = "number" name = "tpc" /></li>
         <br><br>
	 <li>Loan Amount Required:&emsp;<input type="number" name="lar"/></li>
	<br><br></ul>
         <p style="font-size:25px"><strong><u>
	 ORGANISATION DIRECTORY</p></strong></u><ol><br>
	<li>Applicant Name&emsp;	<input type="text" name="na"/></li>
	<br><br>
    <li>Name of the Organization&emsp;  <input type="text" name="no"/></li>
  <br><br>
        <li>Address&emsp;<input type="text" name="ad"/></li>
        <br><br>
        <li>State&emsp;<input type="text" name="sr"/></li>
        <br><br>
        <li>District&emsp;<input type="text" name="dt"/></li>
        <br><br>
        <li>Block&emsp;<input type="text" name="bk"/></li>
        <br><br>
        <li>Phone No.&emsp;<input type="number" name="pn"/></li>
        <br><br>
	<li>Fax No.(if any)&emsp;<input type="number" name="fn"/></li>
        <br><br>
	<li>Nearest Railway Station&emsp;<input type="text" name="nrs"/></li>
	<br><br>
	<li>Registration No. of Organisation&emsp;<input type="number" name="rto"/></li>
        <br><br>
        <li>Date of Registration&emsp;<input type="date" name="dorn"/></li>
        <br><br>
	<li>Date of Renewal&emsp;<input type="date" name="dor"/></li>
        <br><br>
        <li>Unique ID generated at NGO Darpan portal&emsp;<input type="number" name="uig"/></li>
        <br><br>
        <li>Unique code generated at PFMS portal&emsp;<input type="number" name="ucg"/></li>
        <br><br>
        <li>Area of Operation&emsp;<input type="text" name="ao"/></li>
        <br><br>
         <li>Name of the Bank of Organisation&emsp;<input type="text" name="nbo"/></li>
        <br><br>
	<li>Account No.&emsp;<input type="number" name="ano"/></li>
        <br>
        <center><input type="submit" name="submit"></center>
        <br><br><br>
      </form></div></ol>
   </body>	
</html>
<?php
include("footer.html");
?>