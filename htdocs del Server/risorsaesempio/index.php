<?php
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    // Il metodo HTTP utilizzato è GET
    // Array di esempio di forma
	$forme = array(
		array(
			"data produzione" => "18/03/2023",
			"progressivo mese" => 452,
			"tipologia" => "prima scelta",
			"peso standard in kg" => 30,
			"venduta il" => "20/03/2023",
			"prezzo di vendita in €" => 300,
			"caseificio" => array(
				"nome" => "bella mozzarella",
				"href" => "./caseificio/bella mozzarella"
			),
			"venduta al cliente" => array(
				"nome" => "Francesco Adriani",
				"email" => "francesco.adriani@franchettisalviani.net",
				"href" => "./clienti/francesco.adriani@franchettisalviani.net"
			),
			"attività giornaliere" => array(
				array(
					"data" => "17/03/2023",
					"latte prodotto in l" => 60,
					"latte consumato in l" => 60
				)
			)
		)
	);

	// Imposta l'intestazione della risposta come JSON
	header('Content-Type: application/json');

	// Restituisci l'array di forme come JSON
	echo json_encode(array("forme" => $forme));
	
} elseif ($method === 'POST') {
  // Il metodo HTTP utilizzato è POST
} elseif ($method === 'PUT') {
  // Il metodo HTTP utilizzato è PUT
} elseif ($method === 'DELETE') {
  // Il metodo HTTP utilizzato è DELETE
} else {
  // Metodo HTTP non riconosciuto
  // Get the current response code and set a new one
	var_dump(http_response_code(501));
}




?>


