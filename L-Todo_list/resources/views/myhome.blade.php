@extends('layouts.mylayout')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card my-5" style="background-color: #e2ddf9" >
            <div class="card-body Text-center">
                <div class="text-center mb-5" style="color:#575799">
                    <h1 class="fw-bold">Manage Your Tasks. Manage Your Time.</h1>
                    <p class="text-muted">
                        <b> A simple and powerful ToDo List application to organize your daily work, track progress, and stay productive.</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="text-center mb-4">
        <p class="fs-4" style="color:#090933">
            <b>
                This ToDo List system helps you manage your tasks efficiently by allowing you to add,
                update, track, and complete tasks in one place. Stay organized, reduce stress,
                and increase productivity with a simple task management system.
            </b>
        </p>
    </div>
</div>
</div>
<div class="row justify-content-center">
    <div class="row text-center g-4">
        <div class="col-md-3">
            <div class="card shadow-sm p-3 h-100" style="background-color:#D3D3FF">
                <h5>📝 Smart Task Management</h5>
                <p>Create, update, and delete tasks easily.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm p-3 h-100" style="background-color:#D3D3FF">
                <h5>📊 Task Tracking</h5>
                <p>Monitor task status (Pending / Completed).</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm p-3 h-100" style="background-color:#D3D3FF">
                <h5>⚡ Fast & Simple UI</h5>
                <p>Clean design for smooth user experience.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm p-3 h-100" style="background-color:#D3D3FF">
                <h5>🔐 Secure System</h5>
                <p>Login-based system to protect your tasks.</p>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center my-2">
    <div class="text-center mt-5">
        <h4 style="color:#090933">How It Works</h4>
        <p class="text-muted">
            <b> Login → Add Tasks → Manage Tasks → Complete Tasks → Stay Productive </b>
        </p>
    </div>
</div>
<div class="row justify-content-center my-2">
    <div class="text-center mt-4">
        <h4  style="color:#090933">Start organizing your life today</h4><br>
        <a href="login.php" class="btn text-white" style="background-color:#090933">Login</a>
        <a href="register.php" class="btn text-white" style="background-color:#090933">Create Account</a>
    </div>
</div><br>

@endsection('content')