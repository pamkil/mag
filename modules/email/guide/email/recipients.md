# Email Recipients
This module includes the [Email_Recipient] interface. Objects which implement this interface can be passed to the [Email::to], [Email::cc()], and [Email::bcc()].

## Implementing Email_Recipient
Implementing the [Email_Recipient] interface requires declaring two methods in your class [Email_Recipient::email()] and [Email_Recipient::name()]. As you might imagine these methods should return a name and emailaddress.