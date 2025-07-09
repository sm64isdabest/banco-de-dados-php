<?php

namespace Model;

use PDO;
use PDOException;

class User
{
    private $db;

    /**
     * MÉTODO QUE IRÁ SER EXECUTADO TODA VEZ QUE
     * FOR CRIADO UM OBJETO DA CLASSE -> USER
     */

    public function __construct()
    {
        $this->db = Connection::getInstance();
    }

    // FUNÇÃO DE CRIAR USUÁRIO
    public function registerUser($user_fullname, $email, $password)
    {
        try {
            // INSERÇÃO DE DADOS NA LINGUAGEM SQL
            $sql = 'INSERT INTO user (user_fullname, email, password, created_at) VALUES (:user_fullname, :email, :password, NOW())';

            // PREPARAR O BANCO DE DADOS PARA RECEBER O COMANDO ACIMA
            $conn = $this->db->prepare($sql);

            // REFERENCIAR OS DADOS PASSADOS PELO COMANDO SQL COM OS PARÂMETROS DA FUNÇÃO
            $conn->bindParam(":user_fullname", $user_fullname, PDO::PARAM_STR);
            // EXECUTAR TUDO

        } catch (PDOException $error) {

        }
    }
}
?>