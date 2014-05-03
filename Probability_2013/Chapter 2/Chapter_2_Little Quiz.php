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
	    if($_POST["item1"] == "12" && $_POST["item2"] == "24" && $_POST["item4"] == "43" && $_POST["item5"] == "52" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_2.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_2.html'; </script>
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
       Chapter 2 ---     Little Quiz&nbsp;&nbsp;(part a)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

<p>

<br>  

1. Which in the following four statements about sets is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) (EUF)∩G = (E∩G)U(F∩G) is a DeMorgan’s law.
<br> <input name="item4" type="radio" value="42">
(b) (EUF)UG = EU(FUG) is a distributive law.
<br> <input name="item4" type="radio" value="43">
(c) E∩F = F∩E is a commutative law.
<br> <input name="item4" type="radio" value="44">
(d) complement of (EUF) = (complement of E)∩(complement of F) is an associative law.<br>  


<br>  

<br>
2. Which statement in the following four is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) The sample space of an experiment is the set S of all possible outcomes of an experiment.
<br> <input name="item5" type="radio" value="52">
(b) An event is an outcome of a certain meaning.
<br> <input name="item5" type="radio" value="53">
(c) An experiment is any human activity, like tossing a die.
<br> <input name="item5" type="radio" value="54">
(d) An outcome is a result of an experiment, like the appearance of 5 points on a side of a die.


<br>  


<br>
3. Which statement in the following four is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) P(complement of E) = 1 - P(E).
<br> <input name="item1" type="radio" value="12">
(b) E - F = {x | x belongs to E and x belongs to F}.
<br> <input name="item1" type="radio" value="13">
(c) P(EUF) = P(E) + P(F) - P(E∩F).
<br> <input name="item1" type="radio" value="14">
(d) If E is contained in F, then P(E) is smaller than or equal to P(F).<br>  

<br>  
4. Which statement in the following four is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) Two sets are said to be mutually exclusive if their intersection is an empty set�n.
<br> <input name="item2" type="radio" value="22">
(b) For each event E of a sample space S, it is assumed in probability theory that a number P(E) is defined, called the probability of E.
<br> <input name="item2" type="radio" value="23">
(c) The probability function P(‧) may be regarded as a set function.
<br> <input name="item2" type="radio" value="24">
(d) A “composite” probability is defined by intuition or by frequency counting.


<br>  


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
