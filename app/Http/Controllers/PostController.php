<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\EventRequest; 

class PostController extends Controller
{
    public function index(Event $event)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('events/index')->with(['evnets' => $evnt->getPaginateByLimit(1)]);
    }
    public function show(Event $evet)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('events/show')->with(['evnet' => $evnt]);
    }
    public function create()//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('events/create');
    }
    public function store(Request $request, Event $event)
    {
    $input = $request['event'];
    $event->fill($input)->save();
    return redirect('/events/' . $event->id);
    }
}
