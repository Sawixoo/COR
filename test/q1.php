<table width="100%">
	<tr>
		<td align="left">
		<h4>Blender – это </h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='a1'> пакет для создания трёхмерной компьютерной графики, анимации и интерактивных приложений<br>
			<input  type='radio' name='answer' value='a2'> графический редактор<br>
			<input  type='radio' name='answer' value='a3'> текстовый редактор<br>
			<input  type='radio' name='answer' value='a4'> программная среда для объектно-ориентированного программирования<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>