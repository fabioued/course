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
	    if($_POST["item1"] == "14" && $_POST["item2"] == "24" && $_POST["item4"] == "44" && $_POST["item5"] == "51" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_2.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_6(b).html'; </script>
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
       Chapter 6 ---     Little Quiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

<p>

<br>  

1. Which of the following four statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) The sum of two independent gamma random variables is a gamma random variable.
<br> <input name="item4" type="radio" value="42">
(b) The sum of two independent normal random variables is a normal random variable.
<br> <input name="item4" type="radio" value="43">
(c) The sum of two independent Poisson random variables is a Poisson random variable.
<br> <input name="item4" type="radio" value="44">
(d) All of the above are incorrect.

<br>



<br>  
2. If X and Y are two independent Poisson random variables with respective parameters lamda1 and lamda2, which statement in the following four is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) X + Y is also a Poisson random variable with parameter lamda1 + lamda2.
<br> <input name="item5" type="radio" value="52">
(b) X + Y is also a Poisson random variable with parameter lamda1 * lamda2.
<br> <input name="item5" type="radio" value="53">
(c) X + Y is also a Poisson random variable with parameter square of (lamda1 + lamda2).
<br> <input name="item5" type="radio" value="54">
(d) X + Y is also a Poisson random variable with parameter square root of (lamda1 * lamda2).

<br>


<br>  

3. If X and Y are two independent binomial random variables with respective parameters (s, p) and (t, p), which statement in the following four is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) X + Y is a normal random variable with parameters (s + t, p).
<br> <input name="item1" type="radio" value="12">
(b) X + Y is a gamma random variable with parameters (s + t, p).
<br> <input name="item1" type="radio" value="13">
(c) X + Y is a Poisson random variable with parameters (s + t, p).
<br> <input name="item1" type="radio" value="14">
(d) X + Y is a binomial random variable with parameters (s + t, p).

<br>


<br>  

4. Which of the following four statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) If X1, X2, …, Xn are n independent exponential random variables with identical parameter lamda, then the sum Y = X1 + X2 + ... + Xn is a gamma random variable with parameters (n, lamda).
<br> <input name="item2" type="radio" value="22">
(b) The conditional probability of event E given event F is defined as P(E|F) = P(EF)/P(F).
<br> <input name="item2" type="radio" value="23">
(c) There exists a conditional distribution with the random variables neither jointly continuous nor jointly discrete. 
<br> <input name="item2" type="radio" value="24">
(d) The joint cdf of n random variables X1, X2, …, Xn is defined as F(a1, a2, …, an) = P{X1<a1, X2<a2, …, Xn<an}.


<br>  


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
