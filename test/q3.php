<table width="100%">
	<tr>
		<td align="left">
		<h4> Объекты сцены: </h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='d1'> квадрат, лупа, курсор  <br>
			<input  type='radio' name='answer' value='d2'> куб, лампа, камера<br>
			<input  type='radio' name='answer' value='d3'> куб, шар, цилиндр<br>
			<input  type='radio' name='answer' value='d4'> окно, лампа, камера<br>
			<input class="btn btn-primary " type="submit" value="Ответить">
		</form>
		</td>
	</tr>
</table>