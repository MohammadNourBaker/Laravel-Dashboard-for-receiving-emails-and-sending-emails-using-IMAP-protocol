# Laravel Dashboard for receiving emails and sending emails using IMAP protocol
Custom Laravel dashboard. Real World Laravel 9x Dashboard. sending emails and receiving emails using IMAP protocol.

## How to use
1. git clone `https://github.com/MohammadNourBaker/Laravel-Dashboard-for-receiving-emails-and-sending-emails-using-IMAP-protocol.git`
2. Copy `.env.example` file to `.env` file
3. Run `composer install`
4. Run `php artisan key:generate`
5. Open `.env` file and edit following code For send an Email using Outlook SMTP Server and receive an Email using Outlook IMAP Server
```
#smtp protocol
MAIL_MAILER=smtp
MAIL_HOST=smtp.office365.com
MAIL_PORT=587
MAIL_USERNAME=blabla@outlook.com     #Your Email
MAIL_PASSWORD=xxxxxxxxxxx           #Password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="blabla@outlook.com" #Your Email
MAIL_FROM_NAME="${APP_NAME}"

#imap protocol
IMAP_HOST=outlook.office365.com
IMAP_PORT=993
IMAP_ENCRYPTION=ssl
IMAP_VALIDATE_CERT=true
IMAP_USERNAME=blabla@outlook.com  #Your Email
IMAP_PASSWORD=xxxxxxxxxxx         #Password
IMAP_DEFAULT_ACCOUNT=default
IMAP_PROTOCOL=imap

```
6. Run `php artisan serve`
9. `http://localhost:8000/`

`Note`: Turn ON `Less secure app access` in Google accounts has been disabled !
        You can see this article `https://support.google.com/accounts/answer/6010255?authuser=1&hl=ar&authuser=1&visit_id=637906337071223822-2016862466&p=less-secure-apps&rd=1`  So you have to generate app passwords for gmail, you can read this article => `https://support.google.com/mail/answer/185833?hl=en-GB`
