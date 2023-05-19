@extends('masterLayout')

@section('banner')

    <section class="card">

        @if(session('taskCreateMessage'))
            <p class="taskCreateMessage"><i class="fa-solid fa-square-check"></i> {{session('taskCreateMessage')}} </p>
        @endif

        @if(session('successMessage'))
            <p class="successMessage"><i class="fa-solid fa-square-check"></i> {{session('successMessage')}} </p>
        @endif

        @if(session('deleteMessage'))<i class="fa-solid fa-pen-to-square"></i>
            <p class="deleteMessage"><i class="fa-solid fa-square-check"></i> {{session('deleteMessage')}} </p>
        @endif

        {{--        <p class="successMessage"> <i class="fa-solid fa-check"></i> --}}
        {{--            hello--}}
        {{--        </p>--}}

        @foreach($allTasks as $task)
            <div class="task-show">
                <div class="task-edit">
                    <div>
                        <p> Task ID: {{$task ->id }} </p>
                    </div>

                    <div>

                        @if($task->status == 'pending')
                            <a class="btn" href="{{ route('task.updateStatus',[$task->id,'complete']) }}">Mark As Complete</a>
                        @else
                            <a class="delete-btn" href="{{ route('task.updateStatus',[$task->id,'pending']) }}">Back to Pending</a>
                        @endif


                        <a class="btn" href="{{route('task.show',[$task ->id])}}"> Edit </a>
                        <a class="delete-btn" onclick="return confirm('Are you sure?')"
                           href="{{route('task.delete',[$task ->id])}}"> Delete </a>
                    </div>
                </div>

                <div class="task-title">
                    <h2><i class="fa-solid fa-pen-to-square"></i> {{$task->name}} </h2>
                </div>
                <div class="task-details">
                    <p> {{$task->details}} </p>
                </div>
            </div>
        @endforeach

    </section>
@endsection


