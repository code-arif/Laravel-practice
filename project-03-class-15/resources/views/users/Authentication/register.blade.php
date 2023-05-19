@extends('principal')

@section('title','TASK' )

{{--task input form START--}}
@section('banner')
    <section class="contact task-management " id="contact">
        <h2 class="heading"> User <span>Registration!!</span></h2>

        @include('errors.error')

        <form method="POST" action="{{route('user.register')}}">

            {{--csrf security--}}
            {{csrf_field()}}

            <div class="input-box">
                <input type="text" name="username" placeholder="username">
            </div>
            <div class="input-box">
                <input type="email" name="username" placeholder="email">
            </div>
            <div class="input-box">
                <input type="password" name="username" placeholder="password">
            </div>
            <div class="input-box">
                <input type="password"  name="username" placeholder="confirm password">
            </div>
            <div>
                <input type="submit" name="submit" class="btn" value="Register">
            </div>
        </form>
    </section>
@endsection
{{--task input form END--}}
