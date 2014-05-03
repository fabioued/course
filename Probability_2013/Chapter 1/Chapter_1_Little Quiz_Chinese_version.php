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
	    if($_POST["item1"] == "14" && $_POST["item2"] == "23" && $_POST["item3"] == "32" && $_POST["item4"] == "43"){
			   //echo "yes";
			   //header("Location:Download_Chapter_1.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_1.html'; </script>
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
       Chapter 1 ---     Little Quiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

<p>

<br>1. Which statement in the following four is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br><input name="item2" type="radio" value="21">
The number of ways to take r balls out of n distinguished ones is C(n, r).
<br><input name="item2" type="radio" value="22">
The number of different permutations of r objects selected from n different objects is P(n, r).
<br><input name="item2" type="radio" value="23">
C(n, r) = C(r, n). 
<br><input name="item2" type="radio" value="24">
The number of dividing a set of n distinct objects into r distinct groups of respective sizes n1, n2, ..., nr is C(n; n1, n2, …, nr).


<br>  

<br>2. Which statement in the following four is incorrect? &nbsp;&nbsp;&nbsp;&nbsp;
<br><input name="item1" type="radio" value="11">
Probability is important to many academic fields.
<br><input name="item1" type="radio" value="12">
Experiment and outcome are defined terms.
<br><input name="item1" type="radio" value="13">
Lemmas and corollaries are theorems.
<br><input name="item1" type="radio" value="14">
Axioms are theorems.  
<br>

<br>3. Which one in the following four is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br><input name="item4" type="radio" value="41">
C(n, r) = C(n, n - r).
<br><input name="item4" type="radio" value="42">
C(n, r) = C(n - 1, r - 1) + C(n - 1, r).
<br><input name="item4" type="radio" value="43">
P(n, r) = n!/r!. 
<br><input name="item4" type="radio" value="44">
C(n, r) = n!/[(n - r)!r!].
<br>  

<br>4. Which statement in the following four is correct? &nbsp;&nbsp;&nbsp;&nbsp;
<br><input name="item3" type="radio" value="31">
There are indeed predictable winning numbers for lotto games.
<br><input name="item3" type="radio" value="32">
The probability to win in a lotto game in Taiwan is very small.
<br><input name="item3" type="radio" value="33">
To conduct opinion polling, you need no knowledge of probability and statistics.
<br><input name="item3" type="radio" value="34">
You can win in a slot machine game in a casino in the long run.
<br>   
<br>  

　</p>

    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
