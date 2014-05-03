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
	    if($_POST["item1"] == "14" && $_POST["item2"] == "23" && $_POST["item4"] == "42" && $_POST["item5"] == "51" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_2.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_7(c).html'; </script>
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

1. Which of the following statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) Cov(X, Y) = E[X]E[Y] + E[XY].
<br> <input name="item5" type="radio" value="52">
(b) Cov(X, Y) = E[X]E[Y] – E[XY].
<br> <input name="item5" type="radio" value="53">
(c) Cov(aX, bY) = abCov(X, Y). 
<br> <input name="item5" type="radio" value="54">
(d) Cov(aX, Y) = Cov(X, aY) = aCov(X, Y).

<br>



<br>  
2. Which of the following statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) Parametric estimation has three types which are point estimation, interval estimation, and hypothesis testing.
<br> <input name="item4" type="radio" value="42">
(b) The weak law of large numbers may be used to estimate the probability of success of a Bernoulli random variable.
<br> <input name="item4" type="radio" value="43">
(c) Statistical inference is the process of using observed data of a random phenomenon to draw conclusions about the distributions of the random variables which model the phenomenon.
<br> <input name="item4" type="radio" value="44">
(d) Parametric estimation is a type of statistical inference to determine or make decisions about the parameters which characterize the distributions of the random variables modeling a concerned random phenomenon.


<br>


<br>  

3. Which of the following statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) The strong law of large numbers is probably the best-known result in probability theory.
<br> <input name="item2" type="radio" value="22">
(b) The central limit theorem was regarded as an important contribution to science.
<br> <input name="item2" type="radio" value="23">
(c) By a thumb of rule, taking the number of sample variables n to be smaller than 30 is good enough for the probability approximation using the central limit theorem.
<br> <input name="item2" type="radio" value="24">
(d) The central limit theorem was first proved by the French mathematician Pierre-Simon, marquis de Laplace.


<br>


<br>  
4. Which of the following statements is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) The central limit theorem is valid for discrete random variables.
<br> <input name="item1" type="radio" value="12">
(b) The central limit theorem is valid for continuous random variables.
<br> <input name="item1" type="radio" value="13">
(c) The DeMoivre-Laplace Limit Theorem is a special case of the central limit theorem.
<br> <input name="item1" type="radio" value="14">
(d) None of the above.


<br>  


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
