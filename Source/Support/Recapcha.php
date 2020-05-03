<?php

namespace Source\Support;

use Exception;

class Recapcha
{
    private string $site_key = CAPTCHA['site_key'];
    private string $api_url = CAPTCHA['api_url'];
    const SESSION_ERROR = "ErrorCaptcha";

    public function verifyCaptcha($token)
    {
        $data = [
            "secret" => $this->site_key,
            "response" => $token,
            "remoteip" => $_SERVER["REMOTE_ADDR"]
        ];

        if ($ch = curl_init($this->api_url))
        {
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            $response = json_decode(curl_exec($ch), false);
            curl_close($ch);

            try 
            {
                if ($response->success == true) 
                {
                    return true;
                } else {
                    throw new Exception("Houve algum problema em sua validação. Por favor, verifique!");
                    return false;
                }
            } catch (Exception $e) 
            {
                $this->setMessage($e->getMessage());
                return false;
            }
            return true;
        }
    }

    public static function getMessage()
    {
        if (isset($_SESSION[Recapcha::SESSION_ERROR]) || $_SESSION[Recapcha::SESSION_ERROR]) {
            $msg = $_SESSION[Recapcha::SESSION_ERROR];
            Recapcha::clearMessage();
            return $msg;
        }
    }

    private function setMessage(string $msg)
    {
        if (!isset($_SESSION[Recapcha::SESSION_ERROR]) || !$_SESSION[Recapcha::SESSION_ERROR]) {
            $_SESSION[Recapcha::SESSION_ERROR] = $msg;
        }
    }

    public static function clearMessage()
    {
        if (isset($_SESSION[Recapcha::SESSION_ERROR])) {
            $_SESSION[Recapcha::SESSION_ERROR] = NULL;
        }
    }
}
