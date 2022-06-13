<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ステータス別企業</title>
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
    td table tbody tr td {
      background-color:#EEEEEE !important;
    }
  </style>
</head>


<body>
  <table>
    <tr>
      <th>ステータス1</th>
      <th>ステータス2</th>
      <th>ステータス3</th>
      <th>ステータス4</th>
      <th>ステータス5</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>
      @if ($item->status_id == 1)
        {{$item->getName()}}
      @endif
      </td>
      <td>
      @if ($item->status_id == 2)
        {{$item->getName()}}
      @endif
      </td>
      <td>
      @if ($item->status_id == 3)
        {{$item->getName()}}
      @endif
      </td>
      <td>
      @if ($item->status_id == 4)
        {{$item->getName()}}
      @endif
      </td>
      <td>
      @if ($item->status_id == 5)
        {{$item->getName()}}
      @endif
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>
