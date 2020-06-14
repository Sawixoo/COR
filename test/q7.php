<table width="100%">
	<tr>
		<td align="left">
		<h4> Клавиша 7 (NumPad) служит для</h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='j1'> рендеринга<br>
			<input  type='radio' name='answer' value='j2'> вида сверху<br>
			<input  type='radio' name='answer' value='j3'> поворота сцены<br>
			<input  type='radio' name='answer' value='j4'> изменения масштаба<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>