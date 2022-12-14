using System.Net.Mail;

namespace ServidorEmails
{
    public class ServidorEmailsExample
    {
        public static string phishingEmail = "youremail@domain.com";
        public static string phishingPage = "linkPhishingPage";
        public static string passwordPhishingEmail = "yourPassword";
        
        static void Main(string[] args)
        {

            Console.WriteLine("\n Write 'EXIT' to exit the console!");
            while (true)
            {
                Console.WriteLine("\n\nWrite the Email you want to sent de message: ");
                string command = Console.ReadLine();
                if (command != "EXIT" )
                {
                    //get username of the email
                    //string user = command.Substring(0,command.IndexOf("@"));   
                    SendEmail(command);

                }
                else if(command == "EXIT")
                {
                    Console.WriteLine("\n\n\nEXIT....BYE!");
                    Environment.Exit(0);
                }
               
               
            }
           
        }

        static void SendEmail(string emailTo)
        {
            SmtpClient client = new SmtpClient();

            client.UseDefaultCredentials = false;
            client.EnableSsl = true;
            client.Credentials = new System.Net.NetworkCredential(phishingEmail, passwordPhishingEmail);
            client.Port = 587; 
            client.Host = "smtp.office365.com";
            //client.Host = "smtp.live.com";
            //client.Host = "relay-hosting.secureserver.net";
            client.DeliveryMethod = SmtpDeliveryMethod.Network;
            try
            {
                client.Send(EmailStructure(emailTo));
                Console.WriteLine("\n The Email was sent with SUCCESS!");
            }
            catch (Exception ex)
            {
                //lblText.Text = ex.ToString();
                Console.WriteLine("\nERROR: The email was not sent, beacuase " + ex.ToString());
                

            }
        }

        static MailMessage EmailStructure(string emailTo)
        {
            MailMessage mensagem = new MailMessage();

            //add the email you want to send the message
            mensagem.To.Add(new MailAddress(emailTo));
            //add the phishing email 
            //add the name of the organization/person (optional)
            mensagem.From = new MailAddress(phishingEmail, "name of the organization/person");
            //subject of the email
            mensagem.Subject = "yourSubject";
            //body's message
            mensagem.Body = "Email's body message" + 
                             "<br/>" +
                            phishingPage;

            mensagem.IsBodyHtml = true;

            return mensagem;
        }

       
    }
}

