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
	    if($_POST["item1"] == "14" && $_POST["item2"] == "21" && $_POST["item4"] == "44" && $_POST["item5"] == "52" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_2.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_6(a).html'; </script>
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

1. Which of the following four statements is incorrect? &nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) An n-Erlang random variable with parameter lambda reduces to an exponential distribution with parameter when lambda = 1.
<br> <input name="item2" type="radio" value="22">
(b) The n-Erlang distribution may be used to specify the amount of time one has to wait until a total of n Poisson events with rate lambda has occurred.
<br> <input name="item2" type="radio" value="23">
(c) The exponential distribution may be used to specify the amount X of time one has to wait from now until a Poisson event has occurred. 
<br> <input name="item2" type="radio" value="24">
(d) The Poisson distribution may be used to specify the number N of Poisson events occurring in a fixed time interval of length t.

<br>



<br>  
2. Which of the following four statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) If the two events Ea = {X belongs to A} and Eb = {X belongs to B} are independent for all A and B, the two random variables X and Y are independent.
<br> <input name="item5" type="radio" value="52">
(b) If two random variables X and Y are independent, the probability of their intersection must be zero.
<br> <input name="item5" type="radio" value="53">
(c) Discrete random variables X and Y are independent if and only if the pmf p(x, y) = p<font size=1>X</font>(x) x p<font size=1>Y</font>(y) is true for all a and b.
<br> <input name="item5" type="radio" value="54">
(d) Continuous random variables X and Y are independent if and only if the pdf f(x, y) = f<font size=1>X</font>(x) x f<font size=1>Y</font>(y) is true for all a and b.

<br>


<br>  

3. Which of the following four statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) The joint cdf of n random variables X<font size=1>1</font>, X<font size=1>2</font>, …, X<font size=1>n</font> is defined as F(a<font size=1>1</font>, a<font size=1>2</font>, …, a<font size=1>n</font>) = P{X<font size=1>1</font> smaller than or equal to a<font size=1>1</font>, X<font size=1>2</font> smaller than or equal to a<font size=1>2</font>, …, X<font size=1>n</font> smaller than or equal to a<font size=1>n</font>}. 
<br> <input name="item1" type="radio" value="12">
(b) The joint cdf of two random variables X and Y is defined as F(a, b) = P{X smaller than or equal to a, Y smaller than or equal to b}, for all a bigger than infinitive, b smaller than infinitive.
<br> <input name="item1" type="radio" value="13">
(c) The joint pmf of two discrete random variables X and Y is defined as p(x, y) = P{X = x, Y = y}.
<br> <input name="item1" type="radio" value="14">
(d) The marginal pmfs of X and Y are defined respectively as p<font size=1>X</font>(x) = P{X = x} = summation of all p(x, y) smaller than 0.

<br>


<br>  

4. Which of the following four statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) The exponential distribution is just a special case of the gamma distribution.
<br> <input name="item4" type="radio" value="42">
(b) The Erlang distribution plays a key role in the queueing theory.
<br> <input name="item4" type="radio" value="43">
(c) A gamma distribution with parameter t being an integer n is called an n-Erlang distribution.
<br> <input name="item4" type="radio" value="44">
(d) The value of a gamma function with parameter n is n!.


<br>  


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
