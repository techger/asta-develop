@extends('index')

@section('sidebarmenu')
    @include('menu.menuplayer')
@endsection

@section('content')
  <div class="table-aii">
    <div class="table-header">
            High Roller
    </div>
     <table id="dt-material-checkbox" class="table table-striped" style="margin-left:1px;" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th></th>
            <th class="th-sm">Bank Account</th>
            <th class="th-sm">Players</th>
            <th class="th-sm">Country</th>
            <th class="th-sm">Gold</th>
          </tr>
        </thead>
        <tbody>
            @foreach($player as $plyr)
            <tr>
                <td></td>
                <td>{{ number_format($plyr->chip, 2,',', '.') }}</td>
                <td>{{ $plyr->username }}</td>
                <td>{{ $plyr->name }}</td>
                <td>{{ $plyr->gold}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
     
  </div>    

    
@endsection