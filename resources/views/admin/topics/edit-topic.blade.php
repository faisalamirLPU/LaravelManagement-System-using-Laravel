@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


            <div class="container">
    <h1 class="text-center">Edit topics Details:-</h1>
    <form method="POST" action="{{route('admin-post-edit-add-new-topic')}}">
        @csrf
        <div class="mb-3">
            <label> <b>Topic Name</b></label>
            <input type="text" name="topic_name" class="form-control" required value={{$topic->topic_name}}>

        </div>
        <div class="mb-3">
            <label> <b>Topic reference article </b></label>
            <input type="text" name="reference_article" class="form-control" required value={{$topic->reference_article}}>

        </div>
        <div class="mb-3">
            <label> <b>Channel</b></label>
            <input type="checkbox" name="channel" class="checkbox" required value={{$topic->channel}}>
            <label for="vehicle1"> Channel Name</label><br>

        </div>
        <input type="submit" name="editTopic" value="Edit Topic" class="btn btn-success">

    </form>


                <div class="card-body">
            


    </div>
            </div>
        </div>
    </div>
</div>
@endsection
