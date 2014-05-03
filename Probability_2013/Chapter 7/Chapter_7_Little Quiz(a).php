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
	    if($_POST["item1"] == "12" && $_POST["item2"] == "21" && $_POST["item4"] == "43" && $_POST["item5"] == "54" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_2.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_7(a).html'; </script>
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
       Chapter 7 ---     Little Quiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

<p>

<br>  

1. Which statement in the following four is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) The set of the observed data is called a sampling.
<br> <input name="item4" type="radio" value="42">
(b) The set of the observed data is called a random value.
<br> <input name="item4" type="radio" value="43">
(c) Each observed data item is called a sample value.
<br> <input name="item4" type="radio" value="44">
(d) Each observed data item is called a random sample.

<br>



<br>  
2. Which statement in the following four is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) The process of obtaining a set of observed data of a random sample is called randomization. 
<br> <input name="item1" type="radio" value="12">
(b) The process of obtaining a set of observed data of a random sample is called random sampling.
<br> <input name="item1" type="radio" value="13">
(c) If Cov(X, Y) = 0, X and Y must be independent random variables.
<br> <input name="item1" type="radio" value="14">
(d) If X and Y are two independent random variables, Cov(X, Y) is not equal to 0.

<br>


<br>  

3. The covariance is denoted by Cov(X, Y) between two random variables X and Y. Which statement in the following four is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) Cov(X, Y) = E[(X – mean of Y)(Y – mean of Y)].
<br> <input name="item5" type="radio" value="52">
(b) Cov(X, Y) = E[(X – variance of X)(Y – variance of Y)].
<br> <input name="item5" type="radio" value="53">
(c) Cov(X, Y) = E[(X – mean of X)(Y – variance of Y)].
<br> <input name="item5" type="radio" value="54">
(d) Cov(X, Y) = E[(X – mean of X)(Y – mean of Y)].


<br>


<br>  
4. If X and Y are two independent random variables, then for any functions h and g, which statement in the following four is correct? &nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) E[g(X)h(Y)] = E[g(X)]E[h(Y)].
<br> <input name="item2" type="radio" value="22">
(b) E[g(X)h(Y)] = E[g(X)] + E[h(Y)].
<br> <input name="item2" type="radio" value="23">
(c) E[g(X)+h(Y)] = E[g(X)]E[h(Y)]. 
<br> <input name="item2" type="radio" value="24">
(d) E[g(X)h(Y)] = square of (E[g(X)]E[h(Y)]).



<br>  


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
