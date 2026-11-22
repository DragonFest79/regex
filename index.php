<?php
$str1 = <<<HTML
Я 'працюю' на комп'ютері в "РНР"
HTML;
echo $str1 . "<br>";

$str2 = "Я 'працюю' на комп'ютері в \"РНР\"";
echo $str2 . "<br>";

$str3 = 'Я \'працюю\' на комп\'ютері в "РНР"';
echo $str3 . "<br>";

$str4 = <<<WEB
Я 'працюю' на комп'ютері
в "JS"
WEB;
echo nl2br($str4) . "<br>";

$text = "Починаючи з версії 8.0 в РНР була добавлена конструкція match, вона дозволяє оптимізувати конструкцію switch.";
echo $text . "<br>";

echo "Довжина рядка: " . mb_strlen($text, 'UTF-8') . "<br>";

echo "Кількість англійських слів: " . str_word_count($text) . "<br>";

$sentence = "I don't want to study PHP";
echo $sentence . "<br>";

echo "Довжина рядка: " . strlen($sentence) . "<br>";

echo "Кількість слів: " . str_word_count($sentence) . "<br>";

$pos = strpos($sentence, "PHP");
echo "Позиція слова PHP: " . $pos . "<br>";

echo "Після заміни: " . str_replace("PHP", "JS", $sentence) . "<br>";

$slovo = "PHP";
$regex1 = "/^[a-zA-Z]{1,3}$/";
if (preg_match($regex1, $slovo)) {
    echo "Перевірка пройдена успішно!<br>";
} else {
    echo "Перевірка не пройдена!<br>";
}

$email = "dragonfestds@gmail.com";
$regex2 = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
if (preg_match($regex2, $email)) {
    echo "Перевірка пройдена успішно!<br>";
} else {
    echo "Перевірка не пройдена!<br>";
}

$phone = "(066)9656221";
$regex3 = "/^\([0-9]{3}\) [0-9]{7}$/";
if (preg_match($regex3, $phone)) {
    echo "Перевірка пройдена успішно!<br>";
} else {
    echo "Перевірка не пройдена!<br>";
}
?>
