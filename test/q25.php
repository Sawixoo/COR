<table width="100%">
	<tr>
		<td align="left">
		<h4> Основной 3D меш-объект</h4>
		<form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
            <input  type='hidden' name='q' value='<?= ++$q?>'>
			<input  type='radio' name='answer' value='n1'> куб<br>
			<input  type='radio' name='answer' value='n2'> икосаэдр<br>
			<input  type='radio' name='answer' value='n3'> тор<br>
			<input  type='radio' name='answer' value='n4'> сфера<br>
			<input class="btn btn-primary " type="submit" value="Ответить"> 
		</form>
		</td>
	</tr>
</table>