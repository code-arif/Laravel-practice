@extends('principal')

@section('title','TASK' )

{{--task input form START--}}
@section('banner')
    <section class="contact task-management " id="contact">
        <h2 class="heading"> User <span>Registration!!</span></h2>

        <form method="POST" action="{{route('task.create')}}">

            {{--csrf security--}}
            {{csrf_field()}}

            <div class="input-box">
                <input type="text" name="username" placeholder="username">
            </div>
            <div class="input-box">
                <input type="password" name="username" placeholder="password">
            </div>
            <div>
                <input type="submit" name="submit" class="btn" value="Login">
                <a class="btn" href="{{route('user.register.show')}}"> Back to Register </a>
            </div>
        </form>
    </section>
@endsection
{{--task input form END--}}
