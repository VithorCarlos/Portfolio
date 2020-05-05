<?php

namespace Source\App\Models;

use Source\Support\Error;

class User extends Sql
{
    const ERROR_REGISTER = "error_register";
    const SAVE_DATA = "data_register";

    /** Function to insert into database if have not errors by user */
    public function save(): void
    {
        try {
            /** Confirm if cpf is valid */
            if (User::isCpf($this->getCpf()) !== true) {
                throw new \Exception("Cpf inválido! Verifique e tente novamente.");
                die();

            /** Confirm that passwords match */
            } else if ($this->getPasswd() !== $this->getPasswd2()) {
                throw new \Exception("As senhas não conferem!");
                die();
            
            /** If have not errors, so insert into database all values */
            } else {
                $sql = new Sql();
                $sql->query("INSERT INTO tb_employee (first_name, last_name, login, email, cpf, passwd) 
                 VALUES (:first_name, :last_name, :login, :email, :cpf, :passwd)", [
                    ':first_name' => utf8_decode($this->getFirst_name()),
                    ':last_name' => utf8_decode($this->getLast_name()),
                    ':login' => $this->getLogin(),
                    ':email' => $this->getEmail(),
                    ':cpf' => preg_replace('/[^0-9]/', '', $this->getCpf()),
                    ':passwd' => password_hash($this->getPasswd(), PASSWORD_DEFAULT, ['cost' => 12])
                ]);
            }
        /** Capture all messages and set it in one session, and set all values users in one session, if have any erros */
        } catch (\Exception $e) {
            $error = new Error();
            $error->setMessage($e->getMessage(), User::ERROR_REGISTER);
            Error::setSession(User::SAVE_DATA, $this->getValues());
            header("Location: /site/register");
            exit;
        }
    }

    /** Verify if is a CPF valid */
    public static function isCpf($cpf): bool
    {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        $firstDigit = 0;
        $secondDigit = 0;

        if (strlen($cpf) != 11) {
            return false;
        }

        if (
            $cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999'
        ) {
            return false;
        }

        for ($i = 0, $value = 10; $i <= 8; $i++, $value--) {
            $firstDigit += $cpf[$i] * $value;
        }
        for ($i = 0, $value = 11; $i <= 9; $i++, $value--) {
            if (str_repeat($i, 11 == $cpf)) {
                return false;
            }
            $secondDigit += $cpf[$i] * $value;
        }

        $calculationOne = (($firstDigit % 11) < 2) ? 0 : 11 - ($firstDigit % 11);
        $calculationTwo = (($secondDigit % 11) < 2) ? 0 : 11 - ($secondDigit % 11);

        if ($calculationOne <> $cpf[9] || $calculationTwo <> $cpf[10]) {
            return false;
        }
        return true;
    }

    /** Verify if Cpf, email and cpf exists in the database */
    public function verifyUser()
    {
        $sql = new Sql();
        try {
            $result = $sql->fetch("SELECT *FROM tb_employee");

            foreach ($result as $value) {
                if ($value['login'] == $this->getLogin()) {
                    throw new \Exception("Usuário já cadastrado!");
                    die();
                } else if ($value['email'] == $this->getEmail()) {
                    throw new \Exception("Email já cadastrado!");
                    die();
                } else if ($value['cpf'] == preg_replace('/[^0-9]/', '', $this->getCpf())) {
                    throw new \Exception("Cpf já cadastrado!");
                    die();
                }
            }
            /** Capture all erros and set in one session */
        } catch (\Exception $e) {
            $error = new Error;
            $error->setMessage($e->getMessage(), User::ERROR_REGISTER);
            Error::setSession(User::SAVE_DATA, $this->getValues());
            header("Location: /site/register");
            exit;
        }
    }
}
