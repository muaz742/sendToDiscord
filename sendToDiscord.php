<?php

/** sınıfı tanımla */
class sendToDiscord
{
    public $hookurl;
    public $username;
    public $message;
    public $hookObject;
    public $ch;
    function run(){
        /** webhook url tanımla*/
        if (isset($this->hookurl)){
            $hookurl = $this->hookurl;
        }else{
            $hookurl = "https://discordapp.com/api/webhooks/671048333120241705/6LJ039bbTgbOcQjBVNATw7HDJa9HKDOU0O73gJwZjK1KDZ53EDQfPf-EI6eAqP3fyVMv";
        }

        /** kullanıcı adı tanımla */
        if (isset($this->username)){
            $message['username'] = $this->username;
        }else{
            $message['username'] = "kullanıcı adı - ".time(); //time() fonksiyonu ile işşlemin çalışma saati kontrol edilebilir
        }

        /** içerik tanımla */
        if (isset($this->message)){
            $message['content'] = $this->message;
        }else{
            $message['content'] = "
Gönderilmek istenen mesaj buraya yazılır.
Burada satır başı yapıldığında aynı etki mesaj görünümüne de yansır.
Yazı biçimlendirmeleri;
    *italik yazı*,
    **kalın yazı**,
    __altı çizgili__ şeklindedir.
Satır başına bırakılan 
 boşluk
    ve girintiye
karşı duyarlıdır.
Dilenirse yazı üzerine [bağlantı](http://google.com) verilebilir.";

        }

        /** mesajı json formatına dönüştür */
        $hookObject = json_encode($message);

        /** cURL tanımla */
        $ch = curl_init();

        /** cURL ayarla */
        curl_setopt_array($ch, [
            CURLOPT_URL => $hookurl,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $hookObject,
            CURLOPT_HTTPHEADER => [
                "Content-Type: application/json"
            ]
        ]);

        /** cURL çalıştır */
        $response = curl_exec($ch);

        /** cURL kapat */
        curl_close($ch);

        /** yanıtı döndür */
        return $response;
    }
}

/** örnek kullanım */

$gonderDiscord = new sendToDiscord();   // değişkene sınıf tanımlanır
$gonderDiscord->hookurl = "";           // webhook url tanımlanır
$gonderDiscord->message = "";           // mesaj tanımlanır
$gonderDiscord->username = "";          // mesajda görünecek kullanıcı adı tanımlanır
$gonderDiscord->run();                  // fonksiyon çalıştırılır