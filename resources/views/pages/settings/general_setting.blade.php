@extends('index')

@section('sidebarmenu')
@include('menu.menusetting')    
@endsection


@section('content')

{{-- <div class="cards">
  <div class="card">
    <div class="title-card">
      System Settings
    </div>
    <div class="body-card">
      data table
    </div>
  </div>
  <div class="card">
    <div class="title-card">
      Bank Settings
    </div>
    <div class="body-card">
      data table
    </div>
  </div>
  <div class="card">
    <div class="title-card">
      Info Settings
    </div>
    <div class="body-card">
      data table
    </div>
  </div>
  <div class="card">
    <div class="title-card">
      CS & Legal Settings
    </div>
    <div class="body-card">
      data table
    </div>
  </div>
</div> --}}

<div class="row">
  <div class="col">
      <div class="table-aii">
          <div class="table-header">
                  System Settings
          </div>
           <table id="dt-material-checkbox" class="table table-striped" style="margin-left:1px;" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th class="th-sm"></th>
                  <th class="th-sm">Maintenance</th>
                  <th class="th-sm">Point Expired</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                      <td></td>
                      <td>{{ $getMnt[0]->value }}</td>
                      <td>{{ $getPointExp[0]->value }} (hari)</td>
                      <td></td>
                  </tr>
              </tbody>
            </table>
           
      </div>
  </div>
  <div class="col">
      <div class="table-aii">
          <div class="table-header">
                  Bank Settings
          </div>
           <table id="dt-material-checkbox" class="table display" style="margin-left:1px;" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th class="th-sm"></th>
                  <th class="th-sm">Name</th>
                  <th class="th-sm">Setting</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  {{-- @foreach($items as $itm) --}}
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  {{-- @endforeach --}}
              </tbody>
            </table>
           
      </div>
  </div>
</div>

<div class="row">
  <div class="col">
      <div class="table-aii">
          <div class="table-header">
                  Info Settings
          </div>
           <table id="dt-material-checkbox" class="table display" style="margin-left:1px;" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th class="th-sm"></th>
                  <th class="th-sm">Name</th>
                  <th class="th-sm">Setting</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  {{-- @foreach($items as $itm) --}}
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  {{-- @endforeach --}}
              </tbody>
            </table>
           
      </div>
  </div>
  <div class="col">
      <div class="table-aii">
          <div class="table-header">
                  CS & Legal Settings
          </div>
           <table id="dt-material-checkbox" class="table display" style="margin-left:1px;" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th class="th-sm"></th>
                  <th class="th-sm">Name</th>
                  <th class="th-sm">Setting</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  {{-- @foreach($items as $itm) --}}
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  {{-- @endforeach --}}
              </tbody>
            </table>
           
      </div>
  </div>
</div>
    
@endsection