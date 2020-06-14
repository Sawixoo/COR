<table width="100%">
	<tr>
		<td align="left">
		<h4> Клавиша 'Z' служит для </h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='b1'> вращения выделенных объектов или вершин<br>
			<input  type='radio' name='answer' value='b2'> масштабирования выделенных объектов или вершин<br>
			<input  type='radio' name='answer' value='b3'> перемещения выделенных объектов или вершин<br>
			<input  type='radio' name='answer' value='b4'> ограничения изменения объекта только по одной оси<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>