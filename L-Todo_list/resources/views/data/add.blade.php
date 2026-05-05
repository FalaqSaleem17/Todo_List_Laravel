@extends('layouts.mylayout2')

@section('content')

<div class="row my-4">
    <div class="col-md-12">
        <div class="card" style="background-color:#e2ddf9;">
            <div class="card-header text-center text-white" style="background-color:#090933">
                <h3><b> ADD Task(s)</b></h3>
            </div>
            <div class="card-body">
                <div class="row my-2">
                    <div class="col-md-3">
                        <a href="{{ route('dashboard1')}}" class="btn text-white" style="background-color:#090933">back</a>
                    </div>
                </div>
                <div class="row my-2">
                    <form method="post" action="{{ route('adddata')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 my-2">
                                <div class="mb-3">
                                    <label for="sublabel" class="form-label"><b>Task Subject</b></label>
                                    <br>
                                    <input type="text" name="sub" id="sublabel" placeholder="Enter Task Subject here" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6 my-2">
                                <div class="mb-3">
                                    <label for="contlabel" class="form-label"><b>Task Content</b></label>
                                    <br>
                                    <input type="text" name="cont" id="contlabel" placeholder="Enter Task Content here" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 my-2">
                                <button class="btn text-white" style="background-color:#090933">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection