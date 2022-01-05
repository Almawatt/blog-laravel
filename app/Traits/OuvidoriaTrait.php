<?php
namespace App\Traits;

trait OuvidoriaTrait
{
    public function getData($key, $action, $interactionString = false)
    {
		$interaction = '';
        if (!empty($interactionString) && $interactionString != false) {
			$interactionString = urlencode($interactionString);
            $interaction = '&interacao='.$interactionString;
		}

		$ch = curl_init('http://ouvidoria.reitoria.br/Ouvidoria_v2/ouvidoria_c/ws/wsO2Ouvidoria.php?chave='.$key.'&acao='.$action.$interaction);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
		curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$resposta = curl_exec($ch);
		$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		if($status == 200){
			return json_decode($resposta);
			curl_close($ch);
		} else {
			return $status;
			curl_close($ch);
		}
    }
}
