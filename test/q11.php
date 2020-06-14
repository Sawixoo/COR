<table width="100%">
	<tr>
		<td align="left">
		<h4> Клавиша 0 (NumPad) служит для</h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='w1'> вида из камеры<br>
			<input  type='radio' name='answer' value='w2'> вида сверху<br>
			<input  type='radio' name='answer' value='w3'> вида справа<br>
			<input  type='radio' name='answer' value='w4'> поворота сцены<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>