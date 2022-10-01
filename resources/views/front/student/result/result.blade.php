@extends('front.master')

@section('title')
    Result
@endsection

@section('body')


    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    @foreach($students as $student)
                    <h3 class=" my-5">Incourse Marks of {{$student->name}} </h3>
                        @endforeach
                </div>
                <div class="ibox-body">

                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        @foreach($incourses as $incourse )

                            <thead>
                            <tr>
                                <th>Course Code</th>
                                {{--<th>Course Name</th>--}}
                                <th>InCourse Marks</th>

                                {{--<th>Semester Result</th>--}}


                            </tr>

                            </thead>

                            <tbody>
                            {{--@if($student->semester == 5)--}}
                            <tr>
                                <td>530201</td>
                                <td>{{$incourse->S3_530201}}</td>

                                {{--<td rowspan="7" valign="middle" align="center" >--}}
                                    {{--<a href="http://results.nu.ac.bd/index_cp.php" class="btn btn-primary" target="_blank">--}}
                                        {{--Click Here</a></td>--}}
                            </tr>

                            <tr>
                                <td>530202</td>
                                <td>{{$incourse->S3_530202}}</td>
                            </tr>
                            <tr>
                                <td>530203</td>
                                <td>{{$incourse->S3_530203}}</td>
                            </tr>
                            <tr>
                                <td>530204</td>
                                <td>{{$incourse->S3_530204}}</td>


                            </tr>
                            <tr>
                                <td>530205</td>
                                <td>{{$incourse->S3_530205}}</td>
                            </tr>
                            <tr>
                                <td>530206</td>
                                <td>{{$incourse->S3_530206}}</td>
                            </tr>
                            <tr>
                                <td>530207</td>
                                <td>{{$incourse->S3_530207}}</td>
                            </tr>
                            {{--@endif--}}

                            </tbody>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection