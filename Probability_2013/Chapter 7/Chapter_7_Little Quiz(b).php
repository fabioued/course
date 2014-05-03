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
	    if($_POST["item1"] == "12" && $_POST["item2"] == "22" && $_POST["item4"] == "43" && $_POST["item5"] == "52" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_2.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_7(b).html'; </script>
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

1. If X1, X2, …, Xn constitutes a random sample arising from a normal population random variable X with mean and variance, then the sample mean and the sample variance of the random sample, which of the following four statements is not true?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) The sample mean and the sample variance of the random sample are independent.
<br> <input name="item5" type="radio" value="52">
(b) The sample mean is a normal random variable.
<br> <input name="item5" type="radio" value="53">
(c) The sample variance is a normal random variable.
<br> <input name="item5" type="radio" value="54">
(d) The mean of the sample mean is the mean of a normal population random variable.

<br>



<br>  
2. Which of the following statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) The mean of the sample mean is the population mean.
<br> <input name="item1" type="radio" value="12">
(b) The variance of the sample mean is the population variance.
<br> <input name="item1" type="radio" value="13">
(c) The variance of the sample mean is the population variance divided by n.
<br> <input name="item1" type="radio" value="14">
(d) Binomial is the sample total of Bernoulli.

<br>


<br>  

3. Which of the following statement is the correlation of two random variables X and Y? &nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) Cov(X,Y)/Var(X)Var(Y).
<br> <input name="item2" type="radio" value="22">
(b) Cov(X,Y)/(Var(X)Var(Y))^(1/2).
<br> <input name="item2" type="radio" value="23">
(c) Cov(X,Y)/(Var(X)Var(Y))^2. 
<br> <input name="item2" type="radio" value="24">
(d) Cov(X,Y)^2/sqrt(Var(X)Var(Y)).


<br>


<br>  

4.  If the correlation of two random variables X and Y = 0, which statement in the following four is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) The random variables X and Y are said to be correlated.
<br> <input name="item4" type="radio" value="42">
(b) The random variables X and Y are said to be independent.
<br> <input name="item4" type="radio" value="43">
(c) The random variables X and Y are said to be uncorrelated.
<br> <input name="item4" type="radio" value="44">
(d) The random variables X and Y are said to be dependent.



<br>  


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
