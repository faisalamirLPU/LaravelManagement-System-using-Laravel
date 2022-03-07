<!-- <!DOCTYPE html>
<html>
<head>
    
    <title>Psot Topics</title> -->
<!-- CSS only 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head> -->

@extends('layouts.app')

@section('content')
<div class="container">
<a class="btn btn-secondary" href="{{route('admin-show-topic')}}">Show</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="container">
                    <h1 class="text-center">Add topics Details:-</h1>
                    <form method="POST" action="{{route('admin-post-add-new-topic')}}">
                        @csrf
                        <div class="mb-3">
                            <label> <b>Topic Name</b></label>
                            <input type="text" name="topic_name" class="form-control" required>

                        </div>
                        <div class="mb-3">
                            <label> <b>Topic reference article </b></label>
                            <input type="text" name="reference_article" class="form-control" required>

                        </div>
                        <div class="mb-3">
                            <label> <b>Channel</b></label>
                            <input type="checkbox" name="channel" class="checkbox" required>
                            <label for="vehicle1"> Channel Name</label><br>

                        </div>
                        <input type="submit" name="postTopic" value="Post Topic" class="btn btn-primary">
                        <!-- <a class="btn btn-success" href="{{route('admin-show-topic')}}">Show</a> -->

                    </form>


                    <div class="card-body">



                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection