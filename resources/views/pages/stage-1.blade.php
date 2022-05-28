@extends('layout.default')
@section('content')

<div class="card table-responsive pt-4">
    <div class="card-header">
        <h2 class="text-center py-4">VIEW DATA FROM DATABASE</h2>
    </div>
    <div class="card-body">
        <table class="table table-stripe">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cargo No</th>
                    <th>Cargo Type</th>
                    <th>Cargo Size</th>
                    <th>Weight(kg)</th>
                    <th>Remarks</th>
                    <th>Wharfage</th>
                    <th>Penalty</th>
                    <th>Storage</th>
                    <th>Electricity</th>
                    <th>Destuffing</th>
                    <th>Lifting</th>
                </tr>
            </thead>

            @foreach ($collection as $item)
            <tbody>
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->'Cargo no'}}</td>
                    <td>{{$item->'Cargo type'}}</td>
                    <td>{{$item->'Cargo size'}}</td>
                    <td>{{$item->'Weight(Kg)'}}</td>
                    <td>{{$item->'Remarks'}}</td>
                    <td>{{$item->'Wharfage'}}</td>
                    <td>{{$item->'Penalty'}}</td>
                    <td>{{$item->'Storage'}}</td>
                    <td>{{$item->'Electricity'}}</td>
                    <td>{{$item->'Destuffing'}}</td>
                    <td>{{$item->'Lifting'}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>

@endsection
