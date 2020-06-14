<table width="100%">
	<tr>
		<td align="left">
		<h4> Клавиша 'E' служит для выполнения</h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='v1'> вращения выделенных объектов или вершин<br>
			<input  type='radio' name='answer' value='v2'> масштабирования выделенных объектов или вершин<br>
			<input  type='radio' name='answer' value='v3'> перемещения выделенных объектов или вершин<br>
			<input  type='radio' name='answer' value='v4'> экструдирования (вытягивания) выделенных вершин в режиме редактирования<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>