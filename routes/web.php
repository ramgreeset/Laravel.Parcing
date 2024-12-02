<?php

use DiDom\Document;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

//Указываем URL страницы для парсинга
$url = 'https://kudago.com/msk/best-plays/';
//Создаем объект класса для отправки http запросов
$client = new Client();
//Делаем GET запрос с сохранением в переменную $response (Ответ)
$response = $client->get($url);
//Сохраняем полученый ответ в переменную $html где getBody - это html страницы
$html = $response->getBody()->getContents();

//echo $html;

$document = new Document();
$document->loadHtml($html);

$events = $document->find('article.post');


foreach ($events as $item) {
    var_dump($item->attr('data-ping-item-id'));
    echo "<br>";
}



