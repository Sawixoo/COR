<table width="100%">
	<tr>
		<td align="left">
		<h4> Трехмерный курсор (3D-курсор) перемещается</h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='z1'> щелчком левой кнопки мыши по 3D-окну<br>
			<input  type='radio' name='answer' value='z2'> щелчком правой кнопки мыши по 3D-окну<br>
			<input  type='radio' name='answer' value='z3'> щелчком правой кнопки мыши по 3D-окну при зажатой клавише Alt<br>
			<input  type='radio' name='answer' value='z4'> нажатием клавиши F12<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>