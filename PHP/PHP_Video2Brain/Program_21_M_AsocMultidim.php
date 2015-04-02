<?php
	$agenda[0]['nombre'] = "lol";
	$agenda[0]['telefono'] = 000;
	$agenda[0]['email'] = "aaa@ccc";

	$agenda[1]['nombre'] = "lol1";
	$agenda[1]['telefono'] = 111;
	$agenda[1]['email'] = "bbb@ccc";

	$agenda[2]['nombre'] = "lol2";
	$agenda[2]['telefono'] = 222;
	$agenda[2]['email'] = "ccc@ccc";

	echo $agenda[2]['nombre'];
	for ($i=0; $i <=2 ; $i++) { 
		echo '
		<table border=1 width=300px>

			<tr>
				<td>
					Nombre:
				</td>
				<td>'.$agenda[$i]['nombre'].' 
				</td>
			</tr>

			<tr>
				<td>
					Telefono:
				</td>
				<td>'.$agenda[$i]['telefono'].' 
				</td>
			</tr>

			<tr>
				<td>
					Email:
				</td>
				<td>'.$agenda[$i]['email'].' 
				</td>
			</tr>

		</table>
		';
	}
?>