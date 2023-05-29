// Contact form

<?

$name = $_POST['name'];
$name = $_POST['phone'];
$name = $_POST['email'];

function parser($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exe($curl);
    if ($result == false) {
        echo "Помилка відправки форми:" . curl_error($curl);
        return false;
    } else {
        return true;
    }
}

function orderSendTelegram($message){
    $token = "5911786181:AAE984SENTiTQjsluD3mY5vxjJsbaFjakyM";
    $chat_id = "-929035516";
    parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$massage}");
}

$textMessage .="Нове повідомлення з форми\n";
$textMessage .="Ім'я: ".$name"\n";
$textMessage .="Телефон: ".$phone"\n";
$textMessage .="Email: ".$email"\n";
$textMessage = urlencode($textMessage);


orderSendTelegram($textMessage)





?>