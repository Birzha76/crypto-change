<!DOCTYPE html>
<html>
<head>
    <title>Заявка на обмен</title>
</head>
<body>
<p>Валюта обмена: {{ $details['typeFrom'] }}</p>
<p>Сумма обмена: {{ $details['valueFrom'] }}</p>
<p>Валюта перевода: {{ $details['typeTo'] }}</p>
<p>Сумма перевода: {{ $details['valueTo'] }}</p>
<p>Кошелек для перевода: {{ $details['wallet'] }}</p>
<p>Имя: {{ $details['firstName'] }}</p>
<p>Телефон: {{ $details['phone'] }}</p>
<p>E-mail: {{ $details['email'] }}</p>
</body>
</html>
