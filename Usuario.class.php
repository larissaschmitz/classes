<?php
    class Usuario{
        var $nome;
        var $login;
        var $senha;
        var $idade;

        function falar(){
            return $this->nome;

        }

        function efetuarLogin($lg, $sn){
            echo "Login: ".$lg."<br>Senha: ".$sn;

        }

        function fazAniversario(){
            return $this->idade;

        }

    }

    $usuario1 = new Usuario();
    $usuario1->nome = 'Larissa Schmitz';
    $usuario1->login = 'larissaschmitz';
    $usuario1->senha = '123456789';
    $usuario1->idade = '17';
    
    
    $usuario2 = new Usuario();
    $usuario2->nome = 'Elizabeth Webber';
    $usuario2->login = 'lizwebber';
    $usuario2->senha = '000000000';
    $usuario2->idade = '23';


     //imprime tudo 
    //var_dump($usuario1);
    //apenas uma informação 
    //echo "<br><br>";
    //echo $usuario2->nome;
    //echo "<br><br>";


    // $livro1->abrirPagina(10);
    echo $usuario1->falar();
    echo "<br>";
    echo $usuario1->efetuarLogin($usuario1->login, $usuario1->senha);
    echo "<br>";
    echo $usuario1->fazAniversario();
    echo "<br><br>";


    echo $usuario2->falar();
    echo "<br>";
    echo $usuario2->efetuarLogin($usuario2->login, $usuario2->senha);
    echo "<br>";
    echo $usuario2->fazAniversario();



?>