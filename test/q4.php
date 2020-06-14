<table width="100%">
	<tr>
		<td align="left">
		<h4> Рендер является </h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='f1'> графическим редактором<br>
			<input  type='radio' name='answer' value='f2'> графическим отображением 3D сцены или объекта<br>
			<input  type='radio' name='answer' value='f3'> источником света<br>
			<input  type='radio' name='answer' value='f4'> отображением осей координат<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>