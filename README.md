<h1 align="center">Камеры наблюдения и события</h1>

<p>Создал сервис по получению из БД и добавлению в БД данных о событиях с камер наблюдения. 
Все маршруты закрыты статичным Bearer токеном</p>

<h2>Функционал:</h2>
<ul>
  <li>создание камеры</li>
  <li>создание события</li>
  <li>отображение списка событий с камеры за данный период</li>
  <li>отображение деталей события: полное описание и данные по событию</li>
</ul>

<h2>API:</h2>
<ul>
  <li>POST /api/cameras – создание камеры</li>
  <li>POST /api/events – создание события</li>
  <li>GET /api/events – получение событий</li>
  <li>GET /api/events/{id} – получение события</li>
</ul>

<p>Стэк технологий: PHP, Laravel, MySQL</p>
