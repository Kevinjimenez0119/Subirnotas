
<?php
session_start();
	require 'Classes/PHPExcel/IOFactory.php'; //Agregamos la librería
	require 'basededatos.php'; //Agregamos la conexión

	//Variable con el nombre del archivo

	$nombreArchivo = 'prueba.xlsx';
	// Cargo la hoja de cálculo
	$objPHPExcel = PHPExcel_IOFactory::load($nombreArchivo);

	//Asigno la hoja de calculo activa
	$objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();



	for ($i = 2; $i <= $numRows; $i++) {

		$codigo = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
		$nombre = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		$correo = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
    $trabajos = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
    $quiz = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
    $asistencia = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
    $definitiva = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		$asignatura = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();


		$sql = "INSERT INTO notas (codigo, nombres, email, trabajos, quiz, asistencia, terceranota, asignatura) VALUES('$codigo','$nombre','$correo','$trabajos','$quiz','$asistencia','$definitiva','$asignatura')";
		$resultado=mysqli_query($conn,$sql);
	}
header('Location: /Terceranota/inicio.php');

?>
