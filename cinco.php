<?php 
$nota = 12;
switch ($nota) {
	case ($nota < 10):
		echo 'REPROVADO';
		break;
	case ($nota >= 10 && $nota <= 20):
		echo 'APROVADO';
		break;
	case ($nota < 10):
		echo 'REPROVADO';
		break;
	case ($nota <= 0 && $nota >20):
		echo 'ERRO';
		break;
}
?>