<?php 

function makeTable($dados){

$cpf        = filter_input(INPUT_GET, 'cpf');
$ordenation = filter_input(INPUT_GET, 'ordenation');

$desc = ($ordenation == "DESC") ? 'selected' : '';  
$asc  = ($ordenation == "ASC") ? 'selected' : '';


$layout =<<<EOF
		<table class="table table-striped table-bordered" style="width:600px; margin:10px auto;">
		<thead>
			<tr>
				<th>
					<form action="index.php" method="GET">
						<select name="ordenation">
							<option {$asc}>ASC</option>
							<option {$desc}>DESC</option>
						</select>
						<button type="submit">OK</button>
					</form>
					Clientes
				</th>
				<th>
					Tipo de Cliente 
				</th>
				<th>
					Classificação
				</th>
			</tr>
		</thead>
		<tbody>
EOF;
	
	if($ordenation){
		switch ($ordenation){
			case 'DESC':
                krsort($dados);
                break;
            default:
                ksort($dados);
		}
	}
			foreach($dados as $d){

				$layout .= "<tr>";

				if($d['tipo'] == 'Pessoa Física'){
					$layout .=	"<td> <a href='index.php?cpf={$d['cpf']}&ordenation={$ordenation}'>{$d['nome']}</a></td>";
					$layout .=	"<td> {$d['tipo']}</td>";
					$layout .=	"<td> {$d['importancia']}</td>";
				}else{
					$layout .=	"<td> <a href='index.php?cpf={$d['cnpj']}&ordenation={$ordenation}'>{$d['nome']}</a></td>";
					$layout .=	"<td> {$d['tipo']}</td>";
					$layout .=	"<td> {$d['importancia']}</td>";
				}
				$layout .= "</tr>";
			}
			

$layout .=<<<EOF
		</tbody>
	</table>
EOF;

echo $layout;

if($cpf){

	$layout_details =<<<EOF
		<table class="table table-striped table-bordered" style="width:600px; margin:10px auto;">
		<thead>
			<tr>
				<th>
					Detalhes
				</th>
			</tr>
		</thead>
		<tbody>
EOF;

	foreach($dados as $d){
		if( (isset($d['cpf']) && $d['cpf'] == $cpf) || (isset($d['cnpj']) && $d['cnpj'] == $cpf)) {
			$layout_details .= "<tr> <td><strong>Nome:</strong></td></tr>";
			$layout_details .= "<tr> <td>{$d['nome']}</td></tr>";
			
			if(isset($d['cpf'])){
				$layout_details .= "<tr> <td><strong>CPF:</strong></td></tr>";
				$layout_details .= "<tr> <td>{$d['cpf']}</td></tr>";
			}else{
				$layout_details .= "<tr> <td><strong>CNPJ:</strong></td></tr>";
				$layout_details .= "<tr> <td>{$d['cnpj']}</td></tr>";
			}
				$layout_details .= "<tr> <td><strong>Endereço:</strong></td></tr>";
				$layout_details .= "<tr> <td>{$d['endereco']}</td></tr>";
			if(isset($d['enderecoCobranca']) AND !empty($d['enderecoCobranca'])){
				$layout_details .= "<tr> <td><strong>Endereço Cobranca:</strong></td></tr>";
				$layout_details .= "<tr> <td>{$d['enderecoCobranca']}</td></tr>";
			}

		}
	}

	$layout_details .=<<<EOF
		</tbody>
	</table>
EOF;

	echo $layout_details;

}






}


 ?>