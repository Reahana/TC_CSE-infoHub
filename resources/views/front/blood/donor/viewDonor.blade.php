@extends('front.master')

@section('title')
    Donor Hub
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Donor info goes here</div>
                </div>
                <div class="ibox-body">
                    <table class="table table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Donor ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($donors as $donor)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$donor->donor_id}}</td>
                                <td>{{$donor->name}}</td>
                                <td> {{$donor->contact}}
                                    <a class="font-20" href="tel:{{$donor->contact}}"><i  class="fas fa-mobile-alt"></i></a>
                                </td>
                                <td>{{$donor->address}}</td>
                                @if($donor->status=='Available')
                                <td class="btn btn-success">{{$donor->status}}</td>
                                    @else
                                    <td class="btn btn-danger">{{$donor->status}}</td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection