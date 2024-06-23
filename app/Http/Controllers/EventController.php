<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest; 
use App\Models\Event;
use Cloudinary;
use App\Models\Category;

class EventController extends Controller
{
    public function index(Event $event)//インポートしたPostをインスタンス化して$eventとして使用。/indexはメゾッド
    {
        return view('events/index')->with(['events' => $event->getPaginateByLimit(3)]);
    //blade内で使う変数'events'と設定。'events'の中身にgetを使い、インスタンス化した$postを代入。//$postの中身を戻り値にする。
    //return view('posts.index')により、resources/views/posts/index.blade.phpファイルを返しています。
    }
    public function show(Event $event)
    {
        return view('events/show')->with(['event' => $event]);
 //'event'はbladeファイルで使う変数。中身は$eventはid=1のeventインスタンス。
    }
    public function create(Category $category)
    {
    return view('events.create')->with(['categories' => $category->get()]);
    }
    public function store(Event $event, EventRequest $request)
    {   //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $input = $request['event'];
        if($request->file('image')){ //画像ファイルが送られた時だけ処理が実行される
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image_url' => $image_url];
        }
        $event->fill($input)->save();
        return redirect('/events/' . $event->id);
    }
    public function edit(Event $event)
    {
    return view('events.edit')->with(['event' => $event]);
    }
    public function update(EventRequest $request, Event $event)
    {   
        $input_event = $request['event'];
        if($request->file('image')){ //画像ファイルが送られた時だけ処理が実行される
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input_event += ['image_url' => $image_url];
        }
        $event->fill($input_event)->save();

        return redirect('/events/' . $event->id);
    }
    public function delete(Event $event)
    {
    $event->delete();
    return redirect('/');
    }
}
?>
  
