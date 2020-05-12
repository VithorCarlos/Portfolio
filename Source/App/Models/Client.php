<?php

namespace Source\App\Models;

use Source\Support\Error;

class Client extends Sql
{
    const ERROR_REGISTER = "register_client";
    const SAVE_DATA = "client_data";

    public function save(): Client
    {
        try {

            $sql = new Sql();

            $result = $sql->fetch(
                "CALL sp_save_client_error (:Fk_Employee, :company_name, :fantasy_name, :client_name, :cnpj, :type_error, :solution, :system_used)",
                [
                    ':Fk_Employee' => $this->getId_employee(),
                    ':company_name' => $this->getCompany_name(),
                    ':fantasy_name' => $this->getFantasy_name(),
                    ':client_name' => $this->getClient_name(),
                    ':cnpj' => $this->getCnpj(),
                    ':type_error' => $this->getType_error(),
                    ':solution' => $this->getSolution(),
                    ':system_used' => $this->getSystem_used()
                ]
            );

            if (count($result) < 1) {
                throw new \Exception("Houve um erro inesperado, por favor tente novamente!");
                die();
            } else {
                return $this;
            }

        } catch (\Exception $e) {
            $error = new Error();
            $error->setMessage($e->getMessage(), Client::ERROR_REGISTER);
            Error::setSession(Client::SAVE_DATA, $this->getValues());
            header("Location: /site/register-error");
            exit;
        }
    }

    public function getList(): array
    {
        $sql = new Sql();
        $result = $sql->fetch("CALL sp_list_all");

        if (count($result) < 1) {
            return [];
        } else {
            return $result;
        }
    }

    public function listById($iderror): array
    {
        $sql = new Sql();
        $result = $sql->fetch("CALL sp_list_by_id (:iderror)", [":iderror" => $iderror]);

        if (count($result) < 1) {
            return [];
        } else {
            return $result;
        }
    }

    public function delete($iderror): Client
    {
        $sql = new Sql();
        $sql->query("CALL sp_delete_list (:iderror)", [":iderror" => $iderror]);
        return $this;
    }
}
