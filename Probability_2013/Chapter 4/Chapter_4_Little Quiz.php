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
	    if($_POST["item1"] == "11" && $_POST["item2"] == "24" && $_POST["item4"] == "43" && $_POST["item5"] == "51" ){
			   //echo "yes";
			   //header("Location: Download_Chapter_2.html");
			   //exit;
?>
<script language="JavaScript">location.href =
'Download_Chapter_4.html'; </script>
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
       Chapter 4 ---     Little Quiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  

<p>

<br>  

1. If two events are independent, which of the following statements is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item2" type="radio" value="21">
(a) They must be mutually exclusive.
<br> <input name="item2" type="radio" value="22">
(b) The sum of their probabilities must be equal to one.
<br> <input name="item2" type="radio" value="23">
(c) The probability of their intersection must be zero. 
<br> <input name="item2" type="radio" value="24">
(d) None of the above three statements is correct. 
<br>(Chapter 3)
<br>


<br>  
2. F is a cumulative distribution function. Which statement in the following four is incorrect?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item4" type="radio" value="41">
(a) F(a) is smaller than or equal to F(b) if a < b, i.e., F is a nondecreasing function.
<br> <input name="item4" type="radio" value="42">
(b) The limit of F(b) = 1 when b is sufficiently close to positive infinity.
<br> <input name="item4" type="radio" value="43">
(c) The limit of F(b) = -1 when b is sufficiently close to negative infinity.
<br> <input name="item4" type="radio" value="44">
(d)For any b and any decreasing sequence b<font size=1>1</font>, b<font size=1>2</font>, b<font size=1>3</font>, ... which converges to b, it is true that the limit F(b<font size=1>n</font>) equals F(b) (i.e., F is right continuous) when n is sufficiently close to positive infinity.

<br>


<br>  
3. Which statement in the following four is correct?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item5" type="radio" value="51">
(a) A random variable is a real-valued function of outcomes.
<br> <input name="item5" type="radio" value="52">
(b) The domain of a random variable is the set of real numbers.
<br> <input name="item5" type="radio" value="53">
(c) The range is the sample space. 
<br> <input name="item5" type="radio" value="54">
(d) In the world, none of the numerical values yielded by experimental outcomes are controlled by random probabilities.

<br>


<br>  


4. What is the meaning of “event” in this course?&nbsp;&nbsp;&nbsp;&nbsp;
<br> <input name="item1" type="radio" value="11">
(a) A set.
<br> <input name="item1" type="radio" value="12">
(b) A function.
<br> <input name="item1" type="radio" value="13">
(c) A word. 
<br> <input name="item1" type="radio" value="14">
(d)  None of the above.
<br>  


　</p>
    <input name="submit" type="submit" value="確定">
    <input name="reset" type="reset" value="重設">
</form>
</body>
</html>
