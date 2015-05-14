<?php 

function makeTable($dados){
require_once'classes/Clientes.class.php';

if(isset($_GET['ordenation'])){
	$ordenation = $_GET['ordenation'];
}
if(isset($_GET['cpf'])){
	$cpf = $_GET['cpf'];
}


$layout =<<<EOF
		<table class="table table-striped table-bordered" style="width:600px; margin:10px auto;">
		<thead>
			<tr>
				<th>
					<form action="index.php" method="GET">
						<select name="ordenation">
							<option>ASC</option>
							<option>DESC</option>
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
	
	if(isset($ordenation)){
		switch ($ordenation){
			case 'DESC':
				krsort($dados);
			break;
			case 'ASC':
				ksort($dados);
			break;
		}
	}
			foreach($dados as $d){

				$layout .= "<tr>";

				if($d->getTipo() == 'Pessoa Física'){
					$layout .=	"<td> <a href='index.php?cpf={$d->getCpf()}'>{$d->getNome()}</a></td>";
					$layout .=	"<td> {$d->getTipo()}</td>";
					$layout .=	"<td> {$d->getImportancia()}</td>";
				}else{
					$layout .=	"<td> <a href='index.php?cpf={$d->getCnpj()}'>{$d->getNome()}</a></td>";
					$layout .=	"<td> {$d->getTipo()}</td>";
					$layout .=	"<td> {$d->getImportancia()}</td>";
				}
				$layout .= "</tr>";
			}
			

$layout .=<<<EOF
		</tbody>
	</table>
EOF;

echo $layout;

if(isset($cpf)){

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
		if( (method_exists($d, 'getCpf') && $d->getCpf() == $cpf) || (method_exists($d, 'getCnpj') && $d->getCnpj() == $cpf)) {
			$layout_details .= "<tr> <td><strong>Nome:</strong></td></tr>";
			$layout_details .= "<tr> <td>{$d->getNome()}</td></tr>";
			
			if(method_exists($d, 'getCpf') ){
				$layout_details .= "<tr> <td><strong>CPF:</strong></td></tr>";
				$layout_details .= "<tr> <td>{$d->getCpf()}</td></tr>";
			}else{
				$layout_details .= "<tr> <td><strong>CNPJ:</strong></td></tr>";
				$layout_details .= "<tr> <td>{$d->getCnpj()}</td></tr>";
			}
				$layout_details .= "<tr> <td><strong>Endereço:</strong></td></tr>";
				$layout_details .= "<tr> <td>{$d->getEndereco()}</td></tr>";
			if(method_exists($d, 'getEnderecoCobranca') AND !empty($d->getEnderecoCobranca())){
				$layout_details .= "<tr> <td><strong>Endereço Cobranca:</strong></td></tr>";
				$layout_details .= "<tr> <td>{$d->getEnderecoCobranca()}</td></tr>";
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