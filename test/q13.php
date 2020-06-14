<table width="100%">
	<tr>
		<td align="left">
		<h4> Движение мыши в 3D-окне при нажатом колесе </h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='r1'> поворачивает сцену<br>
			<input  type='radio' name='answer' value='r2'> передвигает сцену<br>
			<input  type='radio' name='answer' value='r3'> показывает перспективу<br>
			<input  type='radio' name='answer' value='r4'> меняет размер объекта<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>