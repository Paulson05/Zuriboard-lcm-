@extends('admin.index')

@section('content')





        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>#</th>
                <th>course</th>
                <th>task_title</th>
                <th>description</th>
                <th>task_file</th>
                <th>task_points</th>
                <th>time_status</th>
                <th>submission_status</th>
                <th>course</th>
                <th>task_title</th>
                <th>description</th>
                <th>task_file</th>
                <th>task_points</th>
                <th>time_status</th>

                <th></th>
            </tr>
            @foreach($users as $user)
                <tr>



                    <td>{{$user->id}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->middle_name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->gender}}</td>
                    <td>{{$user->age}}</td>
                    <td>{{$user->track}}</td>
                    <td>{{$user->experience}}</td>
                    <td>{{$user->employment}}</td>
                    <td>{{$user->education}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->student_id}}</td>
                    <td>{{$user->info}}</td>



                    <td>





{{--                        <a href="{{ route('tasks.show', ['task' =>$task->id])}}" title="show">--}}
{{--                            <i class="btn btn-danger fas fa-eye"></i>--}}
{{--                        </a>--}}
{{--                        <a href="" >--}}
{{--                            <i class="btn btn-danger fas fa-edit" ></i>--}}
{{--                        </a>--}}
{{--                        <form style="display: inline-block" method="post" action="{{ route('tasks.destroy',['task' => $task->id]) }}" >--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" class="btn btn-danger btn-sm p-0"><i class="btn btn-danger fas fa-trash-alt" ></i></button>--}}
{{--                        </form>--}}





                    </td>

                </tr>
            @endforeach
        </table>
    </div>
@endsection
