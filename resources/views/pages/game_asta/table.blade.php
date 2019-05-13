@extends('index')

@section('sidebarmenu')
@include('menu.menugame')
@endsection


@section('content')
<div class="menugame">
  @include('menu.nama_game')
</div>
    <div class="table-aii">
        <div class="table-header">
                Table
        </div>
         <table id="dt-material-checkbox" class="table table-striped" style="margin-left:1px;" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th></th>
                <th class="th-sm">Nama Table</th>
                <th class="th-sm">Type Table</th>
                <th class="th-sm">Group</th>
                <th class="th-sm">Level</th>
                <th class="th-sm">Seats</th>
                <th class="th-sm">Speed</th>
                <th class="th-sm">Small Blind</th>
                <th class="th-sm">Max Blind</th>
                <th class="th-sm">Min Buy</th>
                <th class="th-sm">Max Buy</th>
                <th class="th-sm">Jackpot Low</th>
                <th class="th-sm">Jackpot Med</th>
                <th class="th-sm">Jackpot High</th>
                <th class="th-sm">In Find Room</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($tables as $tb)
                <tr>
                    <td></td>
                    <td><a href="#" class="usertext" data-title="Table Name" data-name="tablename" data-pk="{{ $tb->gameID }}" data-type="text" data-url="{{ route('Table-update')}}">{{ $tb->tablename }}</a></td>
                    <td><a href="#" class="tabletype" data-title="Type Table" data-name="tabletype" data-pk="{{ $tb->gameID }}" data-type="select" data-url="{{ route('Table-update') }}">{{ $tb->strTableType() }}</a></td>
                    <td></td>
                    <td><a href="#" class="usertext" data-title="Level" data-name="levellimit" data-pk="{{ $tb->gameID }}" data-type="number" data-url="{{ route('Table-update') }}">{{ $tb->levelLimit }}</a></td>
                    <td><a href="#" class="seat" data-title="Seat" data-name="seats" data-pk="{{ $tb->gameID }}" data-type="select" data-url="{{ route('Table-update') }}">{{ $tb->seats }}</a></td>
                    <td><a href="#" class="speed" data-name="speed" data-type="select" data-value="{{ $tb->speed }}" data-pk="{{ $tb->gameID }}" data-url="{{ route('Table-update') }}" data-title="Select speed">{{ $tb->strTableSpeed() }}</a></td>
                    @if($tb->tabletype == 's')
                    <td><a href="#" class="usertext" data-title="Small Blind" data-name="sb" data-pk="{{ $tb->gameID }}" data-type="number" data-url="{{ route('Table-update') }}">{{ $tb->sb }}</a></td>
                    <td><a href="#" class="usertext" data-title="Big Blind" data-name="bb" data-pk="{{ $tb->gameID }}" data-type="number" data-url="{{ route('Table-update') }}">{{ $tb->bb }}</a></td>
                    @else
                    <td><a href="#" class="usertext" data-title="Small Blind" data-name="baseSB" data-pk="{{ $tb->gameID }}" data-type="number" data-url="{{ route('Table-update') }}">{{ $tb->baseSB }}</a></td>
                    <td><a href="#" class="usertext" data-title="Big Blind" data-name="baseBB" data-pk="{{ $tb->gameID }}" data-type="number" data-url="{{ route('Table-update') }}">{{ $tb->baseBB }}</a></td>

                    @endif
                    <td><a href="#" class="usertext" data-title="Min Buy" data-name="tablelow" data-pk="{{ $tb->gameID }}" data-type="number" data-url="{{ route('Table-update') }}">{{ $tb->tablelow }}</a></td>
                    <td><a href="#" class="usertext" data-title="Max Buy" data-name="tablelimit" data-pk="{{ $tb->gameID }}" data-type="number" data-url="{{ route('Table-update') }}">{{ $tb->tablelimit }}</a></td>
                    <td><a href="#" class="usertext" data-title="Jackpot Low" data-name="jackpotLow" data-pk="{{ $tb->gameID }}" data-type="number" data-url="{{ route('Table-update') }}">{{ $tb->jackpotLow }}</a></td>
                    <td><a href="#" class="usertext" data-title="Jackpot Medium" data-name="jackpotMed" data-pk="{{ $tb->gameID }}" data-type="number" data-url="{{ route('Table-update') }}">{{ $tb->jackpotMed }}</a></td>
                    <td><a href="#" class="usertext" data-title="Jackpot High" data-name="jackpotHi" data-pk="{{ $tb->gameID }}" data-type="number" data-url="{{ route('Table-update') }}">{{ $tb->jackpotHi }}</a></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
          </table>
         
    </div>   
    <script type="text/javascript">
      $(document).ready(function() {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
  
         
          $('.usertext').editable({
              mode :'popup'
          });

          $('.tabletype').editable({
  				value: 's',
  				source: [
  					  {value: 's', text: 'Cash Game'},
  					  {value: 't', text: 'Sit & Go'}
  				   ]
  			  });

          $('.seat').editable({
  				value: 9,
  				source: [
  					  {value: 5, text: '5'},
  					  {value: 9, text: '9'}
  				   ]
  			  }); 

          $('.speed').editable({
  				value: 15,
  				source: [
  					  {value: 10, text: 'Normal'},
  					  {value: 15, text: 'Fast'}
  				   ]
  			  }); 
  
      });
  </script>
@endsection