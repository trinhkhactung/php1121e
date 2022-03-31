@extends('index')

@section('title', 'Student')

@section('main_content')
    <p id="detail_show"></p>
    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <div>
                @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>
                            <button class="btn btn-success detail_student" value="{{$student->id}}">Detail</button>
                        </td>
                    </tr>
                @endforeach
            </div>

            {{ $students->links() }}
        </tbody>
    </table>
@endsection

@section('script_blade')
    <script>
        $('.detail_student').click(function () {
            let id = $(this).val();
            $.ajax({
                url : '{{route('admin.student.detail')}}',
                type : "GET",
                dataType : 'html',
                data : {id : id},

                success : function(data) {
                    console.log(data);
                    $("#detail_show").html(data);
                },

                error : function() {
                    console.log("error");
                }
            });
        })
    </script>
@endsection
