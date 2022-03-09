@extends('admin.template')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
    <div class="container-fluid">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add New Topic</h6>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="p-4">

                                    <form method="POST" action="{{ route('admin-post-add-new-topic') }}">
                                        @csrf

                                        <div class="form-group">
                                            <input type="text" name="topic_name" class="form-control" required placeholder="Topic Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="reference_article" class="form-control" required placeholder="Topic reference Article">
                                        </div>
                                        <div class="form-group">
                                            <b>Channel</b> <br>
                                            <input type="checkbox" name="channel" class="checkbox" required>
                                            <label for="vehicle1"> Channel Name1</label> <br>

                                        </div>
                                        <div>
                                            <a align="center">
                                                <input type="submit" name="postTopic" value="Post Topic" class="btn btn-primary">
                                            </a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>

</div>
@endsection