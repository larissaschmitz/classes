<?php
//padrao da class é usar a inicial maiuscula
    class Livro{
        // atributos, propriedades, o que a classe sabe, informações que o objeto vai controlar
        var $autor;
        var $anoPublicacao;
        var $titulo;
        
        //metodos, ações ou comportamentos do objeto, o que o objeto sabe fazer
        function abrirPagina($nr){
            //void --> significa nada, nao retorna NADA

            // TODO fazer alguma coisa
            echo "Página: ".$nr;
            // o nr só funciona dentro do contexto da função
        }

        function mostrarTitulo(){
            return $this->titulo;
        }
    }


    $livro1 = new Livro();
    $livro1->titulo = 'Batman';
    $livro1->autor = 'Frank Miller';
    $livro1->anoPublicacao = '1988';

    
    $livro2 = new Livro();
    $livro2->titulo = '20 Mil Léguas Submarinas';
    $livro2->autor = 'Júlio Verne';
    $livro2->anoPublicacao = '1800';

    //imprime tudo var_dump($livro1);
    //apenas uma informação echo $livro1->titulo;

    // $livro1->abrirPagina(10);
     echo $livro1->mostrarTitulo();
     echo "<br>";
     echo $livro2->mostrarTitulo();


?>