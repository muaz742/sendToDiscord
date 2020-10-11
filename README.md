# sendToDiscord

Message sending to channel of discord from PHP and Javascript object.

*PHP ve Javascript objesinden Discord kanalına mesaj gönderimi.*

## Installation

You must add this file in your project.

For PHP;

`sendToDiscord.php`

For Javascript; 

`sendToDiscord.js`

## Usage

For PHP;

```php
/** sample usage */
$gonderDiscord = new sendToDiscord();                   // değişkene sınıf tanımlanır
$gonderDiscord->hookurl = "";                           // webhook url tanımlanır
$gonderDiscord->message = "Merhaba Dünya";              // mesaj tanımlanır
$gonderDiscord->username = "sendToDiscod.php".time();   // mesajda görünecek kullanıcı adı tanımlanır
$gonderDiscord->run();                                  // fonksiyon çalıştırılır
```

For Javascript;
```javascript
/** sample usage */
sendToDiscord.webhookUrl = "";              // webhook url tanımlanır
sendToDiscord.username = "Merhaba Dünya";   // mesajda görünecek kullanıcı adı tanımlanır
sendToDiscord.avatarUrl = "";               // kullanıcı profil resminin URL adresi tanımlanır
sendToDiscord.message = "sendToDiscod.js";  // mesaj tanımlanır
sendToDiscord.run();                        // fonksiyon çalıştırılır
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)