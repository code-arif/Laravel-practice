@extends('masterLayout')

@section('banner')
    <section class="contact task-management " id="contact">
        <h2 class="heading"> Task <span>Manager!!</span></h2>

        <form method="POST" action="{{route('task.update',[$task->id])}}">

            {{--csrf security--}}
            {{csrf_field()}}

            <div class="input-box">
                <input type="text" name="name" value="{{$task->name}}" placeholder="Task Name">
            </div>
            <div>
                <textarea name="details" id="" cols="30" rows="10" placeholder="Task Details"> {{$task->details}} </textarea>
                <input type="submit" name="submit" class="btn" value="Update Task">
            </div>
        </form>
    </section>
@endsection
