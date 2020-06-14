<table width="100%">
	<tr>
		<td align="left">
		<h4> прокрутка колеса мыши </h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='e1'> меняет масштаб<br>
			<input  type='radio' name='answer' value='e2'> поворачивает сцену<br>
			<input  type='radio' name='answer' value='e3'> передвигает сцену<br>
			<input  type='radio' name='answer' value='e4'> показывает перспективу<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>