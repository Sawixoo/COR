<table width="100%">
	<tr>
		<td align="left">
		<h4> Для изменения размеров объекта на сцене используется </h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='i1'> клавиша G<br>
			<input  type='radio' name='answer' value='i2'> клавиша S<br>
			<input  type='radio' name='answer' value='i3'> клавиша R<br>
			<input  type='radio' name='answer' value='i4'> клавиша E<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>