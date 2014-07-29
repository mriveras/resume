<%
variable = request.querystring("variable")

if variable = "1" then
	Set Mail = CreateObject("CDO.Message")

	Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2
	Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpserver") ="smtp.gmail.com"
	Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 465

	Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpusessl") = 1

	Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpconnectiontimeout") = 60

	Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpauthenticate") = 1
	Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/sendusername") ="mriveras@gmail.com"
	Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/sendpassword") ="61646mrs"

	Mail.Configuration.Fields.Update

	Mail.Subject="Email subject"
	Mail.From="c20024070@hotmail.com"
	Mail.To="mriveras@gmail.com"
	Mail.TextBody="This is an email message."

	Mail.Send
	Set Mail = Nothing

	variable = "2"
end if
%>
hello <%if variable <> "2" then%>no <%end if%>se envio.