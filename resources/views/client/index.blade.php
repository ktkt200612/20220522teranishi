<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  </style>
</head>
<body>
<table>
  <tr>
    <th>Clients</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->getTitle()}}
    </td>
  </tr>
  @endforeach
</table>

  
</body>
</html>
