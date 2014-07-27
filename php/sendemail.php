<?
// Create the email object first, then add the properties.
SendGrid myMessage = SendGrid.GetInstance();
myMessage.AddTo("mriveras@gmail.com");
myMessage.From = new MailAddress("c20024070@hotmail.com", "Sora Jara");
myMessage.Subject = "Testing the SendGrid Library";
myMessage.Text = "Hello World!";

// Create credentials, specifying your user name and password.
var credentials = new NetworkCredential("azure_f3f37998d2f5a64574cdaeb953fc8c5f@azure.com", "13iBnTLjSIQ3X1F");

// Create an SMTP transport for sending email.
var transportSMTP = SMTP.GetInstance(credentials);

// Send the email.
transportSMTP.Deliver(myMessage);
?>