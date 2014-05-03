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
	    if($_POST["item1"] == "14" && $_POST["item2"] == "22" && $_POST["item4"] == "43" && $_POST["item5"] == "54" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_2.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_8(b).html'; </script>
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
1. Which of the following statements is incorrect? &nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) The methods of moments and the maximum likelihood estimation can be used to design point estimators. 
<br> <input name="item2" type="radio" value="22">
(b) Student’s t distribution formula is T = Z/W, where Z and W are independent.
<br> <input name="item2" type="radio" value="23">
(c) The likelihood function tells us how likely the observed sample values fit the function with the parameters to be estimated.
<br> <input name="item2" type="radio" value="24">
(d) If we want to choose a parameter estimator, we have to choose an unbiased estimator first.

<br>



<br>  
2. Which of the following statements is incorrect for a random sample X1, X2, …, Xn of size n arising from X?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) The sample median is the middle of the sample values after they are reordered by magnitude.
<br> <input name="item4" type="radio" value="42">
(b) The sample midrange is the average of the maximum of X1, X2, ..., Xn and the minimum of them.
<br> <input name="item4" type="radio" value="43">
(c) The sample r% trim mean is the mean obtained from discarding the largest r% of the sample variables.
<br> <input name="item4" type="radio" value="44">
(d) The linear estimator of the population mean is a weighted sum of all the sample variables.

<br>


<br>  

3. Which of the following statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) The sample variance is a consistent estimator of the variance of any population distribution.
<br> <input name="item5" type="radio" value="52">
(b) The sample variance is an unbiased estimator of the variance of the population distribution.
<br> <input name="item5" type="radio" value="53">
(c) A random variable T possessing a t distribution with n degrees of freedom has the mean E[T] = 0.
<br> <input name="item5" type="radio" value="54">
(d) A random variable T possessing a t distribution with n degrees of freedom has the variance Var[T] = n/(n + 2).


<br>


<br>  
4. Which of the following is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) If n is the maximum likelihood estimator of the parameter theta, and g is a one-to-one function of theta , then g(n) is the maximum likelihood estimator of g(theta).
<br> <input name="item1" type="radio" value="12">
(b) The sample mean is a consistent estimator of the population mean.
<br> <input name="item1" type="radio" value="13">
(c) A unbiased estimator for a parameter theta with the minimum variance is the best estimator for theta.
<br> <input name="item1" type="radio" value="14">
(d) Given a random sample X1, X2, ..., Xn of size n from a population random variable X, the kth sample moment is defined as the sum of (X1+X2+…+Xk)/n.

<br>   


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
