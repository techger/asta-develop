<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\PushNotification;
use App\Table;
use Session;
use Carbon\Carbon;
use App\Log;
class PushNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables        = DB::select('SELECT * FROM poker, push_notifications WHERE poker.gameID = push_notifications.gameId ');
        $notifications = PushNotification::all();
        $table         = Table::where('dealerId', '=', Session::get('dealerId'))->where('tabletype', '!=', 'm')->where('clubId', '=', 0)->where('seasonId', '=', 0)->orderBy('bb', 'asc')->orderBy('tablename', 'asc')->get();
        return view('pages.notification.push_notification', compact('notifications','tables', 'table'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pk    = $request->pk;
        $name  = $request->name;
        $value = $request->value;
  
        PushNotification::where('id', '=', $pk)->update([
            $name =>$value
        ]);
  
        switch ($name) {
          case "title":
              $name = "Title";
              break;
          case "message":
              $name = "Message";
              break;
          case "gameId":
              $name = "Game Id";
              break;
          default:
            "";
      }
  
  
      Log::create([
        'operator_id' => Session::get('userId'),
        'menu_id'     => '17',
        'action_id'   => '2',
        'date'        => Carbon::now('GMT+7'),
        'description' => 'Edit '.$name.' Push Notification Id '.$pk.' to '. $value
      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
