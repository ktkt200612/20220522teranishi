<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>企業一覧</title>
  <style>
  th {
      background-color: #289ADC;
      color: white;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
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
      {{$item->getName()}}
    </td>
  </tr>
  @endforeach
</table> 
</body>
</html>
