<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
    <th>ステータス</th>
    <th>企業名</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->getName()}}
    </td>
    <td>
      @if ($item->clients != null) {{-- //複数なので複数形(clients) ・$item->clientsで1つ以上のリレーションを確認できたら--}}
        <table>
          @foreach ($item->clients as $items) {{-- //複数なので複数形(clients) --}}
            <tr>
              <td>{{ $items->getName() }}</td>
            </tr>
          @endforeach
        </table>
      @endif
    </td>
  </tr>
  @endforeach
</table>
</body>
</html>
