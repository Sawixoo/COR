<table width="100%">
	<tr>
		<td align="left">
		<h4> Клавиша 'R' служит для выполнения</h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='x1'> вращения выделенных объектов или вершин<br>
			<input  type='radio' name='answer' value='x2'> масштабирования выделенных объектов или вершин<br>
			<input  type='radio' name='answer' value='x3'> перемещения выделенных объектов или вершин<br>
			<input  type='radio' name='answer' value='x4'> экструдирования (вытягивания) выделенных вершин<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>