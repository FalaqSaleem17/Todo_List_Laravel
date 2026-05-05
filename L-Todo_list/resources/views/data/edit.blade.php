@extends('layouts.mylayout2')

@section('content')

<div class="row my-4">
    <div class="col-md-12">
        <div class="card my-4" style="background-color:#e2ddf9;">
            <div class="card-header text-center text-white" style="background-color:#090933">
                <h2><b> ToDo List Edit  </b></h2>
            </div>
            <div class="card-body my-2 text-center fs-3">
                <form method="post" action="{{ route('data.update')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $editdata->id }}">
                    <p> 
                        <b> Task Subject: </b>
                        <input type="text" name="subject" value="{{ $editdata->subject }}">
                    </p>
                    <p>
                        <b> Task Content: </b>
                        <input type="text" name="content" value="{{ $editdata->content }}">
                    </p>
                    <p>
                        <b> Task Done: </b>
                        <label class="me-3">
                            <input type="radio" name="approve" value="Yes" @checked($editdata->approve  == 'Yes')>
                            Yes
                        </label>
                        <label class="me-3">
                            <input type="radio" name="approve" value="No" @checked($editdata->approve  == 'No')>
                            No
                        </label>
                    </p>
                    <button class="text-white" style="background-color:#090933">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection