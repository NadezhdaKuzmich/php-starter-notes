<?php

/*
Сімейства відповідей сервера:
1ХХ - Інформаційний запит спілкування клієнта із сервером 
100 - сервер приймає заголовки ("продовжуй")
101 ("перемикання протоколів") 
102 ("триває обробка")

2ХХ - вдалий запит (можливо з контекстом.) 
200 OK ("добре")
201 ("створено")
202 ("прийнято")
203 ("інформація не авторитетна") 
204 ("немає вмісту")
205 ("скинути вміст")
206 ("частковий вміст")
207 ("багатостатусний")
208 ("уже повідомлялося")
226 ("використано IM")

3ХХ - перенаправлення/редиректи
300 ("безліч виборів")
301 ("переміщено назавжди")
302 ("переміщено тимчасово")
303 ("дивитися інше")
304 ("не змінювалося")
305 ("використовувати проксі")
307 ("тимчасове перенаправлення") 
308 ("постійне перенаправлення")

4ХХ - помилка клієнта
400 ("поганий, невірний запит")
401 ("не авторизований (не представився)") 
402 ("необхідна оплата")
403 ("заборонено (не уповноважений)")
404 ("не знайдено")
405 ("метод не підтримується")
406 ("неприйнятно")
407 ("необхідна аутентифікація проксі") 
408 ("закінчився час очікування")
409 ("конфлікт");
410 ("видалено");
411 ("необхідна довжина");
412 ("умова хибна");

5ХХ - внутрішня помилка сервера
500 ("внутрішня помилка сервера")
501 ("не реалізовано")
502 ("поганий, помилковий шлюз")
503 ("сервіс недоступний")
504 ("шлюз не відповідає")
505 ("версія HTTP не підтримується")
506 ("варіант теж проводить узгодження")
507 ("переповнення сховища")
508 ("виявлено нескінченне перенаправлення") 
509 ("вичерпано пропускну ширину каналу")
510 ("не розширено");
511 ("потрібна мережева аутентифікація")
520 ("невідома помилка")
521 ("веб-сервер не працює")

Відповіді, що часто зустрічаються:
200 OK ("добре")
301 Moved Permanently ("переміщено назавжди")
302 Moved Temporarily ("переміщено тимчасово")
400 Bad Request ("поганий, невірний запит")
401 Unauthorized ("не авторизований (не представився)") 
402 Payment Required ("необхідна оплата")
403 Forbidden ("заборонено (не уповноважений)")
404 Not Found ("не знайдено")
500 Internal Server Error ("внутрішня помилка сервера") 
501 Not Implemented ("не реалізовано")
502 Bad Gateway ("поганий, помилковий шлюз")
503 Service Unavailable ("сервіс недоступний")
504 Gateway Timeout ("шлюз не відповідає")
*/

$url = "https://www.geeksforgeeks.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);

echo $result;