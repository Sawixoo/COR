<table width="100%">
	<tr>
		<td align="left">
		<h4> Лампа является </h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='g1'> графическим редактором<br>
			<input  type='radio' name='answer' value='g2'> графическим отображением 3D сцены или объекта<br>
			<input  type='radio' name='answer' value='g3'> источником света<br>
			<input  type='radio' name='answer' value='g4'> отображением осей координат<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>