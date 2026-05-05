
@extends('layouts.mylayout2')

@section('content')
<div class="row justify-content-center my-4">
    <div class="col-md-12">
        <div class="card my-4" style="background-color:#e2ddf9;">
            <div class="card-header text-center text-white" style="background-color:#090933">
                <h2><b> <i class="fa fa-th-list"></i> ToDo List </b></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('adddata')}}" class="btn text-white" style="background-color:#090933"> ADD+</a>
                    </div>
                    <div class="col-md-12">
                    @if(session()->has('message'))
                    <div class="alert alert-success">{{ session('message') }} </div>
                    @endif
                    </div>
                </div>
                <div class="row my-2">
                    <div class="card-body">
                        <div>
                            <table class="table">
                                <thead>
                                    <tr>    
                                    <th scope="col" style="background-color:#090933; color:white;"> Task Subject </th>
                                    <th scope="col" style="background-color:#090933; color:white;"> Task Content </th>
                                    <th scope="col" style="background-color:#090933; color:white;"> Task Done </th>
                                    <th scope="col" style="background-color:#090933; color:white;"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($showdatas as $showdata)
                                    <tr>
                                        <td style="background-color: #eeebfa;">{{ $showdata->subject }}</td>
                                        <td style="background-color: #eeebfa;">{{ $showdata->content }}</td>
                                        <td style="background-color: #eeebfa;">{{ $showdata->approve }}</td>
                                        <td style="background-color: #eeebfa;">
                                            <a href="{{ url('/')}}/edit/{{ $showdata->id }}" class="btn text-white" style="background-color:#090933"> <i class="fas fa-edit"></i> </a>
                                            <a href="{{ url('/')}}/delete/{{ $showdata->id }}" class="btn text-white" style="background-color:#090933" onclick="return confirm('Do you want to delete this item?');"> <i class="fas fa-trash-alt"></i>  </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
            

        