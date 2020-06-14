<table width="100%">
	<tr>
		<td align="left">
		<h4> Клавиша 5 (NumPad) служит для</h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='k1'> рендеринга<br>
			<input  type='radio' name='answer' value='k2'> перспективы<br>
			<input  type='radio' name='answer' value='k3'> текстурирования<br>
			<input  type='radio' name='answer' value='k4'> масштабирования<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>