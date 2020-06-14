<table width="100%">
	<tr>
		<td align="left">
		<h4>Окно blender состоит из трёх дочерних окон: </h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='s1'> меню, окно 3D вида, панель кнопок <br>
			<input  type='radio' name='answer' value='s2'> строка заголовка, панель инструментов, рабочая область<br>
			<input  type='radio' name='answer' value='s3'> меню, панель инструментов, рабочая область<br>
			<input  type='radio' name='answer' value='s4'> окно запуска программы, строка состояния, окно задач<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>