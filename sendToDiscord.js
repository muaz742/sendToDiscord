var sendToDiscord = {
    "webhookUrl": "https://discordapp.com/api/webhooks/671048333120241705/6LJ039bbTgbOcQjBVNATw7HDJa9HKDOU0O73gJwZjK1KDZ53EDQfPf-EI6eAqP3fyVMv",
    "username": "kullanıcı adı - " + new Date().getTime(),
    "avatarUrl": "https://i.hizliresim.com/XRZuaQ.jpg",
    "message": "\n" +
        "Gönderilmek istenen mesaj buraya yazılır.\n" +
        "Satır başı oluşturmak için \"\\n\" özek karakteri kullanılır.\n" +
        "Yazı biçimlendirmeleri;\n" +
        "    *italik yazı*,\n" +
        "    **kalın yazı**,\n" +
        "    __altı çizgili__ şeklindedir.\n" +
        "Satır başına bırakılan \n" +
        " boşluk\n" +
        "    ve girintiye\n" +
        "karşı duyarlıdır.\n" +
        "Dilenirse yazı üzerine [bağlantı](http://google.com) verilebilir.",
    "run": function () {
        var request = new XMLHttpRequest();
        request.open('POST', this.webhookUrl);

        request.setRequestHeader('Content-type', 'application/json');

        var params = {
            username: this.username,
            avatar_url: this.avatarUrl,
            content: this.message
        }

        request.send(JSON.stringify(params));
    }
}

/** örnek kullanım */
//sendToDiscord.webhookUrl = "";            // webhook url tanımlanır
sendToDiscord.username = "Merhaba Dünya";   // mesajda görünecek kullanıcı adı tanımlanır
//sendToDiscord.avatarUrl = "";             // kullanıcı profil resminin URL adresi tanımlanır
sendToDiscord.message = "sendToDiscod.js";  // mesaj tanımlanır
sendToDiscord.run();                        // fonksiyon çalıştırılır