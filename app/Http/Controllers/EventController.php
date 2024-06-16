<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest; 
use App\Models\Event;

class EventController extends Controller
{
    public function index(Event $event)//インポートしたPostをインスタンス化して$eventとして使用。/indexはメゾッド
    {
    return view('events/index')->with(['events' => $event->getPaginateByLimit(1)]);
    //blade内で使う変数'events'と設定。'events'の中身にgetを使い、インスタンス化した$postを代入。//$postの中身を戻り値にする。
    //return view('posts.index')により、resources/views/posts/index.blade.phpファイルを返しています。
    }
    public function show(Event $event)
    {
    return view('events/show')->with(['event' => $event]);
 //'event'はbladeファイルで使う変数。中身は$eventはid=1のeventインスタンス。
    }
    public function create()//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('events/create');
    }
    public function store(Event $event, EventRequest $request)
    {
    $input = $request['event'];
    $event->fill($input)->save();
    return redirect('/events/' . $event->id);
    }
}
?>
  
