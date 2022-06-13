<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ステータス設定</title>
</head>
<body>
  <div>
    <div>ステータス設定</div>
    <form action="/status/create" method="POST">
    @csrf
      <input type="text" name="name">
      <input type="submit" value="追加">
    </form>
    <table>
      <tr>
        <th>ステータス1</th>
        <th>ステータス2</th>
        <th>ステータス3</th>
        <th>ステータス4</th>
      </tr>
        @foreach ($items as $item)
        <form action="/status/update" method="POST">
          @csrf
      <tr>
          <td><input type="text" name="name" value="  {{$item->name}}" ></td>
          <td>
            <button name="id" value="{{$item->id}}">更新</button>
          </td>
        </form>
        @endforeach
      </tr>
    </table>
  </div>
</body>
</html>
