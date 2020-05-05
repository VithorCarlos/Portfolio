<?php

namespace Source\Support;

class Recapcha
{
    private string $site_key = CAPTCHA['site_key'];
    private string $api_url = CAPTCHA['api_url'];
    const SESSION_ERROR = "ErrorCaptcha";

    /** Verify if reCaptcha is valid. Return true if is  */
    public function verifyCaptcha($token)
    {
        try {
            $data = [
                "secret" => $this->site_key,
                "response" => $token,
                "remoteip" => $_SERVER["REMOTE_ADDR"]
            ];

            if ($ch = curl_init($this->api_url)) {
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                $response = json_decode(curl_exec($ch), false);
                curl_close($ch);


                if ($response->success == true) 
                {
                    return true;
                } else 
                {
                    throw new \Exception("Informe que você não é um robo!");
                    die();
                }
            }
        } catch (\Exception $e) {
            $error = new Error();
            $error->setMessage($e->getMessage(), Recapcha::SESSION_ERROR);
        }
    }
}
