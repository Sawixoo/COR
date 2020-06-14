<table width="100%">
	<tr>
		<td align="left">
		<h4> Трехмерный курсор (3D-курсор) используется </h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='p1'> для определения места, где будут добавляться другие объекты<br>
			<input  type='radio' name='answer' value='p2'> для масштабирования объекта<br>
			<input  type='radio' name='answer' value='p3'> для определения вида и размера объекта<br>
			<input  type='radio' name='answer' value='p4'> для текстурирования объекта<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>