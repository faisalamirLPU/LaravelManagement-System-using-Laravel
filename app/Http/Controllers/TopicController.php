<?php

namespace App\Http\Controllers;

use App\Models\Topic;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    //

    function getAddNewTopic() {
        return view('admin.topics.add-topic');
    }


    function postAddNewTopic(Request $request) {

        $post=new Topic;

        //$request->topic_name
        $post->topic_name=$request->post('topic_name');
        $post->reference_article=$request->post('reference_article');
        $post->channel=$request->post('channel');
        $post->save();

        echo"<h1>Topic added successfully...</h1>";

        return redirect('home');
    }

    function show(Topic $topic)
    {
        $topic=Topic::all();
        return view('admin.topics.show-topic',['topics'=>$topic]);


    }

    function destroy(Topic $topic,$id)
    {
        $topic=Topic::find($id);
        $topic->delete();
        return redirect('show-topic');

    }

    function getEdit(Topic $topic,$id) 
    {
        $topic=Topic::find($id);
        return view('admin.topics.edit-topic',compact('topic','id')); //,compact('topic','id')
    }
}
