<?
$num1 = rand(0,10);
$num2 = rand(0,10);
$_SESSION['total'] = ($num1 * $num2);
?>
<form action='send.php' method='post'>
   Subject : <input type='text' name='subj'><br>
   Name : <input type='text' name='name'><br>
   Email : <input type='text' name='email'><br>
   Tel : <input type='text' name='tel'><br>
   Message :   <textarea name="msg" rows="4" cols="30"></TEXTAREA><br>
   Verify Code : <?=$num1;?> * <?=$num2;?> = <input type='text' name='verifycode'>
   <input type='hidden' name='action' value='1'>
   <input type='submit' value='   ส่ง   '>
</form>