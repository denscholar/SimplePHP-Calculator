<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" attribute="post" action="disp_form.php">
<p>First Value:<br/>
<input type="text" id="first" name="first"></p>
<p>Second Value:<br/>
<input type="text" id="second" name="second"></p>
<input type="radio" name="group1" id="add" value="add" checked="true"><p>+</p><br/>
<input type="radio" name="group1" id="subtract" value="subtract"><p>-</p><br/>
<input type="radio" name="group1" id="times" value="times"><p>x</p><br/>
<input type="radio" name="group1" id="divide" value="divide"><p>/</p><br/>
<p></p>
<button type="submit" name="answer" id="answer" value="answer">Calculate</button>
</form>

<p>The answer is: 
<?php
if($_POST['group1'] == add) {
    echo "$first + $second";
}
else if($_POST['group1'] == subtract) {
    echo "$first - $second";
}
else if($_POST['group1'] == times) {
    echo "$first * $second";
}
else($_POST['group1'] == divide) {
    echo "$first / $second";
}

?>
</p> 




    
</body>
</html>