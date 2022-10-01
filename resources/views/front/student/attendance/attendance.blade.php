@extends('front.master')

@section('title')
   Attendance
@endsection

@section('body')


    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                        @foreach($students as $student)
                    <h3 class=" my-5">Attendance of {{$student->name}}</h3>
                    @endforeach
                </div>
            <div class="ibox-body">

    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
        @foreach($attendances as $attendance )

        <thead>
        <tr>
            <th>Course Code</th>
            <th>Attendance Percentage (%)</th>



        </tr>

        </thead>
        <tbody>

       <tr>
           <td>530201</td>
           <td>{{$attendance->S3_530201}}</td>
       </tr>

       <tr>
           <td>530202</td>
           <td>{{$attendance->S3_530202}}</td>
       </tr>
       <tr>
           <td>530203</td>
           <td>{{$attendance->S3_530203}}</td>
       </tr>
       <tr>
           <td>530204</td>
           <td>{{$attendance->S3_530204}}</td>


       </tr>
       <tr>
           <td>530205</td>
           <td>{{$attendance->S3_530205}}</td>
       </tr>
       <tr>
           <td>530206</td>
           <td>{{$attendance->S3_530206}}</td>
       </tr>
       <tr>
           <td>530207</td>
           <td>{{$attendance->S3_530207}}</td>
       </tr>


        </tbody>
        @endforeach
    </table>
</div>
        </div>
        </div>
    </div>
@endsection