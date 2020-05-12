<?php

namespace Source\App\Models;

use Source\Support\Error;
use Source\Support\Mailer;

class User extends Sql
{
    const ERROR_REGISTER = "error_register";
    const ERROR_LOGIN = "error_login";
    const SAVE_DATA = "data_register";
    const SAVE_LOGIN = "data_login";
    const ERROR_FORGOT = "error_forgot";
    const ERROR_PASSWORD = "error_password";
    const SESSION_USER = "session_user";

    /** Function to insert into database if have not errors by user */
    public function save(): User
    {
        try {
            /** Confirm if cpf is valid */
            if (User::isCpf($this->getCpf()) !== true) {
                throw new \Exception("Cpf inválido! Verifique e tente novamente.");
                die();
                /** Confirm if user exists */
            } elseif ($this->verifyUser() !== true) {
                die();
                /** Confirm that passwords match */
            } elseif (User::passwordMatch($this->getPasswd(), $this->getPasswd2()) !== true) {
                throw new \Exception("As senhas não coincidem");
                die();
                /** If have not errors, so insert into database all values */
            } else {
                $sql = new Sql();
                $result = $sql->fetch(
                    "CALL sp_insert_employee(:first_name, :last_name, :login, :email, :cpf, :passwd)",
                    [
                        ':first_name' => utf8_decode($this->getFirst_name()),
                        ':last_name' => utf8_decode($this->getLast_name()),
                        ':login' => $this->getLogin(),
                        ':email' => $this->getEmail(),
                        ':cpf' => preg_replace('/[^0-9]/', '', $this->getCpf()),
                        ':passwd' => password_hash($this->getPasswd(), PASSWORD_DEFAULT, ['cost' => 12])
                    ]
                );

                if (count($result) < 1) {
                    throw new \Exception("Houve algum erro desconhecido durante sua solicitação. Por favor, tente novamente!");
                    die();
                }

                return $this;
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

    /** To verify that the passwords match */
    public static function passwordMatch($passwd1, $passwd2): bool
    {
        if ($passwd1 !== $passwd2) {
            return false;
        } else {
            return true;
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
    public function verifyUser(): bool
    {
        $sql = new Sql();

        $result = $sql->fetch("SELECT *FROM tb_employee");

        foreach ($result as $value) {
            if ($value['login'] === $this->getLogin()) {
                throw new \Exception("Usuário já cadastrado!");
                return false;
                die();
            } elseif ($value['email'] === $this->getEmail()) {
                throw new \Exception("Email já cadastrado!");
                return false;
                die();
            } elseif ($value['cpf'] === preg_replace('/[^0-9]/', '', $this->getCpf())) {
                throw new \Exception("Cpf já cadastrado!");
                return false;
                die();
            } else {
                return true;
            }
        }
    }

    /** Validade login */
    public function login(string $login, string $password): User
    {
        try {
            $sql = new Sql();
            $result = $sql->fetch("SELECT *FROM tb_employee WHERE login = :login OR email = :email", [":login" => $login, ":email" => $login]);

            if (!count($result) > 0) {
                throw new \Exception("Login ou senha inválidos");
                die();
            }

            $data = $result[0];

            if (password_verify($password, $data['passwd'])) {
                $this->setValues($result[0]);
                $_SESSION[User::SESSION_USER] = $this->getValues();
                return $this;
            } else {
                throw new \Exception("Login ou senha inválidos");
                die();
            }
        } catch (\Exception $e) {
            $error = new Error;
            $error->setMessage($e->getMessage(), User::ERROR_LOGIN);
            Error::setSession(User::SAVE_LOGIN, ['Login' => $login, 'Passwd' => $password]);
            header("Location: /");
            exit;
        }
    }

    /** Only access the routes if already logged */
    public static function verifyLogin(): void
    {
        if (!isset($_SESSION[User::SESSION_USER])) {
            header("Location: /");
            exit;
        }
    }

    /** For send email with link code encrypted to recover password */
    public function resetPassword(): User
    {
        try {
            $sql = new Sql();
            $result = $sql->fetch("SELECT *FROM tb_employee WHERE email = :email", [':email' => $this->getEmail()]);

            if (count($result) < 1) {
                throw new \Exception("Email incorreto ou não cadastrado. Por favor, verifique seu Email.");
                die();
            } else {

                $this->setValues($result[0]);

                $result_passwd = $sql->fetch(
                    "CALL sp_employee_recover_passwd(:id_employee, :ip_user)",
                    [
                        ':id_employee' => $this->getId_employee(),
                        ':ip_user' => $_SERVER['REMOTE_ADDR']
                    ]
                );

                if (count($result_passwd) < 1) {
                    throw new \Exception("Ocorreu um erro inesperado, por favor tente novamente!");
                    die();
                } else {
                    $data = $result_passwd[0];

                    $iv = FORGOT['secret_iv'];
                    $key = FORGOT['secret_key'];
                    $cripher =  FORGOT['cripher'];

                    $code = openssl_encrypt($data['id_recovery'], $cripher, pack("a16", $key), 0, $iv);
                    $code = base64_encode($code);

                    if (is_string($code)) {
                        $mail = new Mailer();
                        $mail->attach("Public/Views/images/img-01.png", "Image");
                        $mail->add($this->getEmail(), $this->getFirst_name(), FORGOT['subjet'], FORGOT['fogort_reset'] . "?code=" . $code);
                        $mail->send();
                    }

                    return $this;
                }
            }
        } catch (\Exception $e) {
            $error = new Error;
            $error->setMessage($e->getMessage(), User::ERROR_FORGOT);
            header("Location: /forgot");
            exit;
        }
    }

    /** For decrypt code sent to email and recover the password */
    public function decryptForgot(string $code, string $password)
    {
        try {
            $sql = new Sql();

            $iv = FORGOT['secret_iv'];
            $key = FORGOT['secret_key'];
            $cripher =  FORGOT['cripher'];
            $decode = base64_decode($code);

            $value = openssl_decrypt($decode, $cripher, pack("a16", $key), 0, $iv);

            $result = $sql->fetch("CALL sp_select_recover(:id_recovery)", [":id_recovery" => (int) $value]);

            if (count($result) < 1) {
                throw new \Exception("Não foi possível recuperar a senha. Por favor tente novamente!");
                die();
            } else {

                $this->setValues($result[0]);

                $result_passwd = $sql->fetch(
                    "CALL sp_update_password(:id_recovery, :passwd)",
                    [
                        ":id_recovery" => $this->getId_recovery(),
                        ":passwd" => password_hash($password, PASSWORD_DEFAULT, ['cost' => 12])
                    ]
                );

                if (count($result_passwd) < 1) {
                    throw new \Exception("Não foi possível recuperar a senha. Por favor tente novamente!");
                    die();
                }
            }
        } catch (\Exception $e) {
            $error = new Error;
            $error->setMessage($e->getMessage(), User::ERROR_FORGOT);
            header("Location: /forgot");
            exit;
        }
    }


    /**  */

    public function updateUser(): array
    {
        try {
            $sql = new Sql();
            $result = $sql->fetch(
                "CALL sp_update_employee(:id_employee, :first_name, :last_name, :login, :email, :cpf)",
                [
                    ':id_employee' => $this->getId_employee(),
                    ':first_name' => $this->getFirst_name(),
                    ':last_name' => $this->getLast_name(),
                    ':login' => $this->getLogin(),
                    ':email' => $this->getEmail(),
                    ':cpf' => preg_replace('/[^0-9]/', '', $this->getCpf())
                ]
            );

            /** If have another error unexpected*/
            if (count($result) < 1) {
                throw new \Exception("Ocorreu um erro inesperado. Por favor, tente novamente!");
                die();
            } else {
                return  $result;
            }
        } catch (\Exception $e) {
            $error = new Error;
            $error->setMessage($e->getMessage(), User::ERROR_REGISTER);
            header("Location: /site/my-profile");
            exit;
        }
    }
}
