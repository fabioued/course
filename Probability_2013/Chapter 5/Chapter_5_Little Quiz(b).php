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
	    if($_POST["item1"] == "12" && $_POST["item2"] == "23" && $_POST["item4"] == "43" && $_POST["item5"] == "52" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_2.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_5(b).html'; </script>
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

1.Which of the following four statements is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) The exponential distribution is the distribution of a discrete random variable.
<br> <input name="item4" type="radio" value="42">
(b) The exponential distribution is the distribution of a continuous random variable. 
<br> <input name="item4" type="radio" value="43">
(c) The amount of time until a new war breaks out may be described by an exponential distribution.
<br> <input name="item4" type="radio" value="44">
(d) The life of the people of a big city may be described by an exponential distribution.

<br>



<br>  

2. Which of the following four statements is incorrect?  &nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) The distribution (i.e., the cdf) of the amount of time from now till the occurrence of a Poisson event may be described by the exponential distribution. 
<br> <input name="item2" type="radio" value="22">
(b) The distribution of the amount of time until an earthquake occurs is an example of the exponential distribution.
<br> <input name="item2" type="radio" value="23">
(c) The distribution of the number of earthquakes occurring during some fixed time span is an example of the exponential distribution.
<br> <input name="item2" type="radio" value="24">
(d) When computing the distribution of g(X) given the distribution of X, we have to express the event of g(X) < y in terms of the corresponding values of X collected as a set. 


<br>


<br>  

3. Let n be the number of trials, and p be the probability of success. Which of the following four statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) The variance of the binomial distribution is n x p x (1 - p). 
<br> <input name="item1" type="radio" value="12">
(b) The mean of the binomial distribution is n x (1 - p).
<br> <input name="item1" type="radio" value="13">
(c) The mean of the binomial distribution is n - (n x (1 - p)).
<br> <input name="item1" type="radio" value="14">
(d) The variance of the binomial distribution is m - m x p, where m is the mean of the distribution.


<br>


<br>  

4. Which of the following four statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) If X represents the number of successes in n independent trials with p as the probability of success in a trial, then X is called a binomial random variable with parameters (n, p).
<br> <input name="item5" type="radio" value="52">
(b) The Poisson approximation to the binomial distribution is used when n is small and np moderate.
<br> <input name="item5" type="radio" value="53">
(c) The normal approximation to the binomial distribution is used when np(1 - p) is large.
<br> <input name="item5" type="radio" value="54">
(d) The DeMoivre-Laplace Limit Theorem is a special case of the central limit theorem.

<br>  


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
