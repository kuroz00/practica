<?php
function ucm_query_starter($sede) {
    while (true) {  // Loop infinito con sleep para no saturar el ancho de banda con obtencion de datos
    	sleep(60);  // Cada un minuto se actualiza la base de datos de cada sede
        switch ($sede) {  
            case "PUQ":
                $server = "http://";
                $user = "usuario_registrado_en_api";
                $password = "contrasena_usuario";

                $paquete_challenge = json_encode(array(
                    "request" => array(
                        "action" => "challenge",
                        "user" => $user,
                        "version" => "1.0"
                    )
                ));
                break;

            case "PNT":									//Está al pendiente configurar la direccion de la UCM para cada sede
                $server = "http://";
                $user = "usuario_registrado_en_api";
                $password = "contrasena_usuario";

                $paquete_challenge = json_encode(array(
                    "request" => array(
                        "action" => "challenge",
                        "user" => $user,
                        "version" => "1.0"
                    )
                ));
                break;
        }

        $ch = curl_init($server);   					//Inicio del server curl para iniciar la transacción
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $paquete_challenge);

        $response = curl_exec($ch);
        curl_close($ch);

        $paquete_response = json_decode($response, true);
        $challenge = $response_data['response']['challenge'];

        $token = md5($challenge . $password);

        $login_data = json_encode(array(
            "request" => array(
                "action" => "login",
                "token" => $token,
                "user" => $user
            )
        ));

        $ch = curl_init($server);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $login_data);

        $response = curl_exec($ch);
        curl_close($ch);

        $response_data = json_decode($response, true);
        $cookie = $response_data['response']['cookie'];

        $envContent = "UCM_SESSION=$cookie";

        $envFile = 'ucm_session.env';

        if (file_put_contents($envFile, $envContent) !== false) {
            echo "Sesión guardada para el servidor.";
        } else {
            echo "Error al escribir en variable de entorno UCM_SESSION";
        }
    }
}
?>
