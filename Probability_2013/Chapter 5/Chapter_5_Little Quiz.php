<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>無標題文件</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>
<body>
<?php 
error_reporting(0);
if($_POST["submit"]=="確定"){
       //echo $_POST["item23"];
	   /*if($_POST["item23"] == "23"){
	   echo "fuck";*/
	    if($_POST["item1"] == "12" && $_POST["item2"] == "23" && $_POST["item4"] == "42" && $_POST["item5"] == "54" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_2.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_5.html'; </script>
<?php			               
   		   }
		   else{
                       ?> 
		       
                       <font color="red">Your answers are not all correct!  Please try again.</font>
                       
		
			   
			   <?php
			   //header("Location: b.html");
		   }    		   
}		     
?>
<form action="" method="post" name="form1" class="style1">
       Chapter 5 ---     Little Quiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

<p>

<br>  

1. Which statement in the following four is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) If X is normally distributed with parameters u and o^2, then Z = (X - u)/o is normally distributed with parameters 0 and 1, i.e., Z~N(0, 1).. 
<br> <input name="item1" type="radio" value="12">
(b) The cdf of a standard normal random variable is just the area under the curve of the pdf f(x) and to the right of x.
<br> <input name="item1" type="radio" value="13">
(c) For a standard random variable Z, we have P{Z is smaller than or equal to -x} = P{Z is bigger than -x}, for all x is bigger than negative infinite and smaller than infinite.
<br> <input name="item1" type="radio" value="14">
(d) The random variable Z~N(0, 1) is said to be standard or unit normal.

<br>



<br>  
2. Which statement in the following four is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) If A=(a, b), then a, b belongs to A.
<br> <input name="item5" type="radio" value="52">
(b) If B=[a, b), then a, b belongs to B.
<br> <input name="item5" type="radio" value="53">
(c) If C=(a, b], then a, b belongs to C.
<br> <input name="item5" type="radio" value="54">
(d) If D=[a, b], then a, b belongs to D.

<br>


<br>  

3. Which statement in the following four is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) The graph of the pmf depicts the probability of each possible continuous sample value.
<br> <input name="item4" type="radio" value="42">
(b) If i and j are constants, then E[iX + j] = iE[X] + j.
<br> <input name="item4" type="radio" value="43">
(c) The graph of the pdf depicts the probability of each discrete sample value.
<br> <input name="item4" type="radio" value="44">
(d) If e and f are constants, then Var(eX+f) = eVar(X).

<br>


<br>  
4. Which statement in the following four is incorrect? &nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) Gaussian distribution is normal distribution.
<br> <input name="item2" type="radio" value="22">
(b) The height of a man is a kind of normal random variable.
<br> <input name="item2" type="radio" value="23">
(c) The pdf is the integration result of the cdf. 
<br> <input name="item2" type="radio" value="24">
(d) The curve of the pdf of the normal random variable is of a bell shape which is symmetric about mean. 

<br>  


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
