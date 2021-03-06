@extends('layouts.hello')
<style>
   th {
      background-color: black;
      color: white;
      padding: 5px 30px;
    }
    td {
      border: 1px solid black;
      padding: 5px 30px;
      text-align: center;
    }
</style>
@section('title', 'person.index.blade.php')


@section('content')
<table>
  <tr>
    <th>Person</th>
    <th>Board</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->getData()}}
    </td>
    <td>
      @if ($item->board != null)
      {{ $item->board->getData() }}
      @endif
    </td>
  </tr>
  @endforeach
</table>
@endsection