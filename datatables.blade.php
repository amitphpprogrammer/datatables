@extends('layouts.datatable')

@section('content')

<span id="nameColumn"><i class="fa fa-plus-square" aria-hidden="true"></i>Name</span>
<span id="positionColumn"><i class="fa fa-plus-square" aria-hidden="true"></i>Position</span>
<span id="officeColumn"><i class="fa fa-plus-square" aria-hidden="true"></i>Office</span>
<span id="ageColumn"><i class="fa fa-plus-square" aria-hidden="true"></i>Age</span>
<span id="start_dateColumn"><i class="fa fa-plus-square" aria-hidden="true"></i>Start Date</span>
<span id="salaryColumn"><i class="fa fa-plus-square" aria-hidden="true"></i>Salary</span>

<table id="example" class="display nowrap dataTable dtr-inline" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
            <tr>
                <th class="nameView"><i class="fa fa-minus-square" aria-hidden="true"></i>Name</th>
                <th class="positionView"><i class="fa fa-minus-square" aria-hidden="true"></i>Position</th>
                <th class="officeView"><i class="fa fa-minus-square" aria-hidden="true"></i>Office</th>
                <th class="ageView"><i class="fa fa-minus-square" aria-hidden="true"></i>Age</th>
                <th class="start_dateView"><i class="fa fa-minus-square" aria-hidden="true"></i>Start date</th>
                <th class="salaryView"><i class="fa fa-minus-square" aria-hidden="true"></i>Salary</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_records as $data)
            <tr role="row" class="odd">
                <td class="nameView">{{ $data->name }}</td>
                <td class="positionView">{{ $data->position }}</td>
                <td class="officeView">{{ $data->office }}</td>
                <td class="ageView">{{ $data->age }}</td>
                <td class="start_dateView">{{ $data->start_date }}</td>
                <td class="salaryView">{{ $data->salary }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection


