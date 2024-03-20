<?php
Curso ADS/ Sistemas de Informação Turno NOITE Semestre 2024.1 Data
Disciplina Desenvolvimento Web Back-end Professor(a) Jhonatta Pietro de Oliveira
$num1 = intval(readline());
$num2 = intval(readline());
$menor = min($num1, $num2);
$maior = max($num1, $num2);
echo "=============== \n";
for ($i = $menor + 1; $i < $maior; $i++) {
if ($i % 5 == 2 || $i % 5 == 3) {
echo $i . "\n";
}
}
?>