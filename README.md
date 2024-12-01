<h1>Laravel.Parcing</h1>
<pre>
<a href="https://www.youtube.com/watch?v=qVFpK_gV1Ns&list=PLNvHH49JXUUAWpfK13CReWjlHH0bIUGS4&index=4">Parcing site on Laravel framework</a>
<b>Stack</b>: Laravel, DiDOM
</pre>
<h3>Steps:</h3>
<ol>
  <li>Creating a Laravel project | Создание проекта Laravle</li>
  <li>Connecting the DiDOM library | Подключение библиотеки DiDOM</li>
  <li>Connecting the Guzzle library | Подключение библиотеки Guzzle/li>
  <li>Specify URL for parsing | Указываем URL читаемой страницы</li>
  <li>Create an object of the Client class to send http requests | Создаем объект класса Клиент для отправки http запросов</li>
  <li>Send GET request to URL | Отправляем GET запрос к URL</li>
  <li>Save the received response to the $html variable | Сохраняем полученный ответ в переменную $html
  <ul>
    <li>$response->getBody() возвращает тело ответа, то есть HTML-код страницы.</li>
    <li>Метод getContents() преобразует тело ответа в строку.</li>
  </ul>
  </li>
  
  <li>Parcing | Парсинг
  <ul>
    <li>Создается объект Document из DiDom.</li>
    <li>Метод loadHtml($html) загружает HTML-контент в объект Document для дальнейшей обработки.</li>
  </ul>
  </li>
  <li></li>
  <li></li>
  <li></li>
</ol>
