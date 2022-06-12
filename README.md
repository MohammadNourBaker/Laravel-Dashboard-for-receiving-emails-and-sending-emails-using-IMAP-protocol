# Laravel-Dashboard-for-receiving-emails-and-sending-emails-using-IMAP-protocol
Custom Laravel dashboard. Real World Laravel 9x Dashboard. receiving emails and sending emails using IMAP protocol.

## How to use
1. git clone `https://github.com/MohammadNourBaker/Laravel-Dashboard-for-receiving-emails-and-sending-emails-using-IMAP-protocol.git`
2. Copy `.env.example file to .env`
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

`Note`: Turn ON `Less secure app access` in Google accounts has been disabled ! So you may not be able to add a Google account.
