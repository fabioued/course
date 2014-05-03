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
	    if($_POST["item1"] == "13" && $_POST["item2"] == "21" && $_POST["item4"] == "42" && $_POST["item5"] == "54" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_4(b).html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_4(b).html'; </script>
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
       Chapter 4 ---     Little Quiz(b)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

<p>

<br>  


1. Which statement in the following four is incorrect? &nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) The median m of a data is the value such that the number of data values larger than m is equal to the number of those smaller than m.
<br> <input name="item4" type="radio" value="42">
(b) The mean always is a good representation of the trend of data. 
<br> <input name="item4" type="radio" value="43">
(c) The variance is the degree of scatter of the random variable values. 
<br> <input name="item4" type="radio" value="44">
(d) Given a discrete random variable X with cdf F, the median of X is defined as the value m such that F(m) = 1/2

<br>


<br>  

2. Which statement in the following four is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) The mean is always equal to the median.
<br> <input name="item2" type="radio" value="22">
(b) The mean of a fair die is 3.5.
<br> <input name="item2" type="radio" value="23">
(c) The game which is fair means that the mean of game is 0.
<br> <input name="item2" type="radio" value="24">
(d) SD(X) x SD(X) = Var(X). 

<br>


<br>  

3. Which statement of binomial probability experiment in the following four is correct ? &nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) There must be fixed number of trials..
<br> <input name="item1" type="radio" value="12">
(b) Each trial can have only two outcomes, or outcomes that can be reduced to two outcomes. 
<br> <input name="item1" type="radio" value="13">
(c) The outcomes of each trial must be independent of each other. 
<br> <input name="item1" type="radio" value="14">
(d) The probability of an outcome must remain the same for each trial.

<br>


<br>  

4. X is a binomial random variable with parameter(n, p), which statement in the following four is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) E[X] = np; Var(X) = n(1 - p).
<br> <input name="item5" type="radio" value="52">
(b) E[X] = np; Var(X) = np(2 - p).
<br> <input name="item5" type="radio" value="53">
(c) E[X] = p; Var(X) = np(1 - p).
<br> <input name="item5" type="radio" value="54">
(d) E[X] = np; Var(X) = np(1 - p).

<br>  


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
