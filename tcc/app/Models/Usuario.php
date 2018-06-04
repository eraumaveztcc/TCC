<?php

class Usuario
{
    private $us_id;
    private $us_nome;
    private $us_email;
    private $us_senha;
    private $us_datanascimento;
    private $us_sexo;

    public function __construct($us_nome=null,$us_email=null,$us_senha=null,$us_datanascimento=null,$us_sexo=null,$us_id=null){
        $this->us_nome = $us_nome;
        $this->us_email = $us_email;
        $this->us_senha = $us_senha;
        $this->us_datanascimento = $us_datanascimento;
        $this->us_sexo = $us_sexo;
        $this->us_id = $us_id;

    }

    public function getId()
    {
        return $this->us_id;
    }

    public function setId($id)
    {
        $this->us_id = $id;
    }

    public function getNome()
    {
        return $this->us_nome;
    }

    public function setNome($nome)
    {
        $this->us_nome = $nome;
    }

    public function getSenha()
    {
        return $this->us_senha;
    }

    public function setSenha($senha)
    {
        $this->us_senha = $senha;
    }

    public function getEmail()
    {
        return $this->us_email;
    }

    public function setEmail($email)
    {
        $this->us_email = $email;
    }

    public function getDatanascimento()
    {
        return $this->us_datanascimento;
    }
    public function setDatanascimento($datanascimento)
    {
        $this->telefone = $datanascimento;
    }

    public function getSexo()
    {
        return $this->us_sexo;
    }

    public function setSexo($sexo)
    {
        $this->cpf = $sexo;
    }


}
