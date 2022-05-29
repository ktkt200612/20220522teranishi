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
    td {
      padding: 25px 40px;
      background-color: #EEEEEE;
      text-align: center;
    }
    button {
      padding: 10px 20px;
      background-color: #289ADC;
      border: none;
      color: white;
    }
  </style>
</head>
<body>
  <form action="/status/add" method="post">
  @csrf
    <table>
      <tr>
        <th>ステータス：</th>
        <td><input type="text" name="name"></td>
      </tr>
    </table>
    <button>送信</button>
  </form> 
</body>
</html>