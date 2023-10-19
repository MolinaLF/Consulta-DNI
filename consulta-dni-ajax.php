<?php
header("Content-Type: application/json");

$dni = isset($_POST["dni"]) ? $_POST["dni"] : null;
$response = [];

if ($dni === null || strlen($dni) !== 8) {
    $response["error"] = "El DNI debe tener exactamente 8 dígitos";
} else {
    // Realiza la consulta a la API solo si el DNI tiene 8 dígitos
    $url = 'https://api.apis.net.pe/v1/dni?numero=' . $dni;
    
    // Intenta realizar la solicitud a la API
    $data = @file_get_contents($url);
    
    if ($data !== false) {
        // Intenta decodificar la respuesta JSON
        $decodedData = json_decode($data, true);
        
        if ($decodedData !== null) {
            $response = $decodedData;
        } else {
            $response["error"] = "Error al decodificar la respuesta JSON.";
        }
    } else {
        $response["error"] = "No se pudo obtener información del DNI.";
    }
}

echo json_encode($response);
?>
