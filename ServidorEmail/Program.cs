using System.Net.Mail;

namespace ServidorEmails
{
    public class ServidorEmailsExample
    {
        public static string emailOrigem = "CriptografiaFake_2TPII_SpamsFake202122@hotmail.com";
        public static string linkPhishing = "http://localhost/Tp2/FakeLoginNAO_ABRIR.php";
        public static string linkAVirus = "https://www.avast.com/ativirus_FAKE";
        
        static void Main(string[] args)
        {

            Console.WriteLine("\nUtilize o comando 'EXIT' para sair!");
            while (true)
            {
                Console.WriteLine("\n\nEmail de Destino da Mensagem: ");
                string comando = Console.ReadLine();
                if (comando != "EXIT" )
                {
                    //get o username do email
                    //string user = comando.Substring(0,comando.IndexOf("@"));   
                    EnviarEmail(comando);

                }
                else if(comando == "EXIT")
                {
                    Console.WriteLine("\n\n\nA Sair....BYE!");
                    Environment.Exit(0);
                }
               
               
            }
           
        }

        static void EnviarEmail(string emailTo)
        {
            SmtpClient client = new SmtpClient();

            client.UseDefaultCredentials = false;
            client.EnableSsl = true;
            client.Credentials = new System.Net.NetworkCredential(emailOrigem, "Criptografia");
            client.Port = 587; 
            client.Host = "smtp.office365.com";
            //client.Host = "smtp.live.com";
            //client.Host = "relay-hosting.secureserver.net";
            client.DeliveryMethod = SmtpDeliveryMethod.Network;
            try
            {
                client.Send(EstruraEmail(emailTo));
                Console.WriteLine("\nA Mensagem foi enviada com Sucesso!");
            }
            catch (Exception ex)
            {
                //lblText.Text = ex.ToString();
                Console.WriteLine("\nERRO!!! Mensagem Não Enviada: " + ex.ToString());
                

            }
        }

        static MailMessage EstruraEmail(string emailTo)
        {
            MailMessage mensagem = new MailMessage();

            //email de destino da mensagem
            mensagem.To.Add(new MailAddress(emailTo));
            //email de origem da mensagem
            mensagem.From = new MailAddress(emailOrigem, "<Serviços de Informática e de Comunicações UTAD>");
            //assunto da mensagem
            mensagem.Subject = "Reativação de Conta";
            //corpo da mensagem
            mensagem.Body = "Alunos e Docentes da UTAD, " +
                            "<br/>" +
                            "<br/> Este email é enviado dos Serviços de Informática e de Comunicação da UTAD." +
                            "<br/> Relembramos a Academia, que nas próximas 24 horas o SIDE estará em manuntenção. Durante esta manuntenção, é necessário que faça a reativação da sua conta do SIDE através do link: " + linkPhishing +  
                                   " .Caso contrário poderá perder o acesso ao SIDE!" +
                            "<br/> Se tiver alguma dúvida contacte os Serviços de Informática e Comunicações da UTAD via email: apoio.tecnicoUTAD_FAKE@utad.pt" +
                            "<br/> " +
                            "<br/> " +
                            "<br/> Com o melhores cumprimentos," +
                            "<br/> Serviços de Informática e de Comunicações UTAD " +
                            "<br/> " +
                            "<br/> " +
                            "<hr/>" + "Este email foi verificado para vírus pelo Avast antivirus software: " + linkAVirus +
                            "<br/>" + "Isto é um email de respostas automáticas. Por favor não responda a este email!" +
                            "<br/>" +
                            "<br/>" +
                            "<h5 style=\"background-color:red\">" + "Este email (PHISHING) serve apenas para fins Académicos - Trabalho Prático 2 de Criptografia e Segurança de Sistemas Informáticos. Por favor, se recebeu este email, foi ENGANO...APAGUE-O OU IGNORE-O! OS links são FAKE!" + "</h5>" +
                            "</hr>";

            mensagem.IsBodyHtml = true;

            return mensagem;
        }

       
    }
}

