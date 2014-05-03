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
	    if($_POST["item1"] == "11" && $_POST["item2"] == "24" && $_POST["item4"] == "43" && $_POST["item5"] == "54" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_2.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_3.html'; </script>
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
       Chapter 3 ---     Little Quiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

<p>

<br>  

1. Which of the following formulas is correct where the complement of a set A is denoted as A’?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) P(D|E)=[P(D|E)P(D)]/[P(E|DP(D)+P(E|D’)P(D’)].
<br> <input name="item2" type="radio" value="22">
(b) P(D|E)=[P(D|E)P(E)]/[P(E|D)P(D)+P(E|D’)P(D’)].
<br> <input name="item2" type="radio" value="23">
(c) P(D|E)=[P(E|D)P(D)]/[P(D|E)P(D)+P(E|D’)P(D’)]. 
<br> <input name="item2" type="radio" value="24">
(d) P(D|E)=[P(E|D)P(D)]/[P(E|D)P(D)+P(E|D’)P(D’)].


<br>  

<br>
2. Which statement in the following four is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) P(E) = P(E|F)xP(F) + P(E|complement of F)xP(complement of F) .
<br> <input name="item5" type="radio" value="52">
(b) P(EF) = P(F)xP(E|F) is useful for computing the probabilities of intersections of events.
<br> <input name="item5" type="radio" value="53">
(c) Bayers’ formula is important and serves as a basic principle in pattern recognition, decision making, statistics, and many other fields.
<br> <input name="item5" type="radio" value="54">
(d) Bayers’ formula satisfies the commutative law, so P(D|E) = P(E|D).

<br>  

<br>
3. Which statement in the following four is incorrect for the Bayes decision theory?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) If P(A|X) is smaller than or equal to P(B|X), then decide X belongs to A.
<br> <input name="item1" type="radio" value="12">
(b) The values P(A|X) and P(B|X) are called a posteriori probabilities in pattern recognition theory, where A and B denote two classes and X denotes a feature (vector).
<br> <input name="item1" type="radio" value="13">
(c) The values P(A) and P(B) are called a priori probabilities, where A and B denote two classes.
<br> <input name="item1" type="radio" value="14">
(d) Generalized Bayes’ Formula can be used for N conditional events where N is larger than one.<br>  

<br>  

4. Which statement in the following four is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) The conditional probability can be used as a tool for computing other probability values.
<br> <input name="item4" type="radio" value="42">
(b) The conditional probability is useful for computing probabilities when partial information is available.
<br> <input name="item4" type="radio" value="43">
(c) If P(F) > 0, then P(F|E) = P(EF)/P(F).
<br> <input name="item4" type="radio" value="44">
(d) P(E|F) is the conditional probability that E occurs given that F has occurred.<br>  

<br>  


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
