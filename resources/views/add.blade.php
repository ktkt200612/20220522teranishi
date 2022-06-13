<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>企業追加</title>
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
  <form action="/add" method="post">
  @csrf
    <table>
      <tr>
        <th>会社名：</th>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <th>代表者名：</th>
        <td><input type="delagate" name="delagate"></td>
      </tr>
      <tr>
        <th>電話番号：</th>
        <td><input type="tel" name="tel"></td>
      </tr>
      <tr>
        <th>メールアドレス：</th>
        <td><input type="email" name="email"></td>
      </tr>
      <tr>
        <th>ステータス：</th>
        <td><input type="number" name="status_id"></td>
      </tr>
      <tr>
        <th>ユーザー：</th>
        <td><input type="number" name="user_id"></td>
      {{-- </tr>//今のところこれがないとユーザーidに関連つけて追加できない --}}
    </table>
    <button>送信</button>
  </form> 
</body>
</html>
