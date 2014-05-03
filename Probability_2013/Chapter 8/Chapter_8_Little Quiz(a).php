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
	    if($_POST["item1"] == "11" && $_POST["item2"] == "21" && $_POST["item4"] == "44" && $_POST["item5"] == "51" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_2.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_8(a).html'; </script>
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
       Chapter 8 ---     Little Quiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

<p>

<br>  

1. Which of the following statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) The sample median and any sample trimmed mean of a random sample arising from a population random variable X with mean m are biased estimators of mean m.
<br> <input name="item5" type="radio" value="52">
(b) The reasonable principle for choosing parameter estimators is: choosing an unbiased estimator first, an unbiased estimator with the minimum variances next, and a consistent unbiased estimator with the minimum variance finally.
<br> <input name="item5" type="radio" value="53">
(c) The binomial random variable for n trials is the sum of n Bernoulli random variables.
<br> <input name="item5" type="radio" value="54">
(d) The sample variance is a consistent estimator of the variance of a normal population.

<br>



<br>  
2. Which of the following is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) A mean estimator theta means that, though the estimate values are not always equal to the exact value of theta, they fall around theta with theta as the center. 
<br> <input name="item4" type="radio" value="42">
(b) A mean distribution theta means that, though the estimate values are not always equal to the exact value of theta, they fall around theta with theta as the center.
<br> <input name="item4" type="radio" value="43">
(c) A population mean theta means that, though the estimate values are not always equal to the exact value of theta, they fall around theta with theta as the center.
<br> <input name="item4" type="radio" value="44">
(d) An unbiased estimator of theta means that, though the estimate values are not always equal to the exact value of theta, they fall around theta with theta as the center.

<br>


<br>  

3. Which of the following statements is incorrect? &nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) The sample mean is the best estimator of the mean of a population distribution. 
<br> <input name="item2" type="radio" value="22">
(b) The sample mean is a consistent estimator of the population mean.
<br> <input name="item2" type="radio" value="23">
(c) The sample variance is a consistent estimator of the variance of a normal population.
<br> <input name="item2" type="radio" value="24">
(d) The sample mean is the best linear unbiased estimator of the population mean.

<br>


<br>  
4. Which of the following statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) A linear estimator a1X1 + a2X2 + … + anXn of the population mean with a1 + a2 + … + an = 0 is called a linear unbiased estimator.
<br> <input name="item1" type="radio" value="12">
(b) The sample mean is the best estimator of the mean of a normal population distribution.
<br> <input name="item1" type="radio" value="13">
(c) The sample mean is the best linear unbiased estimator of the population mean.
<br> <input name="item1" type="radio" value="14">
(d) The sample mean is a consistent estimator of the population mean.

<br>  


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
