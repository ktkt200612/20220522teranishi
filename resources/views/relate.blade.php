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
      @for($i = 0; $i < 1; $i++)
        <th> @if($is[$i]->id == 1){{$is[$i]->getName()}}@endif</th> 
      @endfor
      @for($i = 1; $i < 2; $i++)
        <th> @if($is[$i]->id == 2){{$is[$i]->getName()}}@endif</th> 
      @endfor
      @for($i = 2; $i < 3; $i++)
        <th> @if($is[$i]->id == 3){{$is[$i]->getName()}}@endif</th> 
      @endfor
      @for($i = 3; $i < 4; $i++)
        <th> @if($is[$i]->id == 4){{$is[$i]->getName()}}@endif</th> 
      @endfor
      @for($i = 4; $i < 5; $i++)
        <th> @if($is[$i]->id == 5){{$is[$i]->getName()}}@endif</th> 
      @endfor
    </tr>
    
    <tr>
      @for($item = 0; $item < 1; $item++)
        <td> @if ($items[$item]->status_id == 1){{$items[$item]->getName()}}@endif</td>
      @endfor
      @for($item = 1; $item < 2; $item++)
        <td> @if ($items[$item]->status_id == 2){{$items[$item]->getName()}}@endif</td>
      @endfor
      @for($item = 2; $item < 3; $item++)
        <td> @if ($items[$item]->status_id == 3){{$items[$item]->getName()}}@endif</td>
      @endfor
      @for($item = 3; $item < 4; $item++)
        <td> @if ($items[$item]->status_id == 4){{$items[$item]->getName()}}@endif</td>
      @endfor
      @for($item = 4; $item < 5; $item++)
        <td> @if ($items[$item]->status_id == 5){{$items[$item]->getName()}}@endif</td>
      @endfor
    </tr>
  </table>
</body>
</html>
