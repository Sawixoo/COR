<table width="100%">
	<tr>
		<td align="left">
		<h4> Клавиша F12 служит для</h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='h1'> рендеринга<br>
			<input  type='radio' name='answer' value='h2'> вида сверху<br>
			<input  type='radio' name='answer' value='h3'> поворота сцены<br>
			<input  type='radio' name='answer' value='h4'> изменения масштаба<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>