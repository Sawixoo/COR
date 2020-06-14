<table width="100%">
	<tr>
		<td align="left">
		<h4> Чтобы выделить несколько объектов: </h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='y1'> щёлкать по ним по очереди правой кнопкой мыши при зажатой клавише Shift<br>
			<input  type='radio' name='answer' value='y2'> щёлкать по ним по очереди левой кнопкой мыши при зажатой клавише Shift<br>
			<input  type='radio' name='answer' value='y3'> щёлкать по ним по очереди левой кнопкой мыши при зажатой клавише Alt<br>
			<input  type='radio' name='answer' value='y4'> обвести вокруг объектов мышью <br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>