@extends('layouts.mylayout2')

@section('content')
<div class="container">
    <div class="row justify-content-center my-4">
        <div class="col-md-12">
            <div class="card" style="background-color:#e2ddf9;">
                <div class="card-body">
                    <div class="row text-center">
                        <h1><b> Welcome to Your ToDo Dashboard </b></h1>
                    </div>
                    <div class="row my-4 text-center">
                        <p> Stay organized and manage your daily tasks efficiently. This dashboard helps you track, update, and complete your tasks in one place. </p>
                        <br>
                        <p><b>
                            “Small steps every day lead to big results.”
                            <br>
                            Stay focused. Stay productive. 🚀
                        </b></p>
                    </div>
                    <div class="row my-5 mx-4">
                        <div class="col-md-6">
                            <h3> What You Can Do </h3>
                            <p>➕ Add New Task – Create and schedule new tasks</p>
                            <p>📋 View All Tasks – See your pending and completed tasks</p>
                            <p>✏️ Edit Task – Update task details anytime</p>
                            <p>✅ Mark as Completed – Track finished tasks</p>
                            <p>🗑️ Delete Task – Remove tasks you no longer need</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <br><br><br>
                            <h3> Create Your ToDo List Now! </h3>
                            <br>
                            <a href="{{ route('dashboard1')}}" class="btn text-white" style="background-color:#090933">CREATE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
-->