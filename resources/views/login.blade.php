@extends('layout')
@section('content')
    <main>
        <div class="container">
            <div class="row"> 
                <div align="center">
                    <form align="center" class="col-xl-8 col-lg-8 col-md-10 col-sm-10 login " >
                        <div class="mb-3">
                            <label class="form-label">Username:</label>
                            <input type="text" name="username" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary" name="login_user">Log In</button>
                
                    </form>
                </div>
            </div>
        </div>
@stop