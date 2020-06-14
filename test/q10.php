<table width="100%">
	<tr>
		<td align="left">
		<h4> Клавиши 2, 4, 6, 8 (NumPad) служат для</h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='q1'> рендеринга<br>
			<input  type='radio' name='answer' value='q2'> вида сверху<br>
			<input  type='radio' name='answer' value='q3'> поворота сцены<br>
			<input  type='radio' name='answer' value='q4'> изменения масштаба<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>