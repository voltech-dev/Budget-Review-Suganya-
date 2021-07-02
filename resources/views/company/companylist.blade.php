@extends('layouts.main')

@section('content')

<?php
$company =App\Models\company::get();
?>
<style>
td {
    align: center;
    font-size: 14px;
}

.text-center {
    text-align: center;
}
</style>

<!-- Page Header -->

<!-- /Page Header -->

<!-- Search Filter -->

<!-- /Search Filter -->

<div class="row">
    <div class="col-sm-12">

        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-center table-hover datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>SI</th>
                                <th>Company Name</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php  $i=0; $i++; ?>
                            @foreach($company as $comp)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><a href="{{url('/companyview/'.$comp->company_name)}}">{{$comp->company_name}}</td>
                                <td> <a href="{{ url('/company_edit/'.$comp->id) }}"
                                        class="btn btn-sm btn-white text-success mr-2"><i
                                            class="fas fa-edit mr-1"></i></a><a
                                        href="{{ url('/company_destroy/'.$comp->id) }}"
                                        class="btn btn-sm btn-white text-success mr-2"><i
                                            class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="text-center">
    <button onclick="location.href='{{ url('/companycreate/') }}'" style="text-center">
        Add Company</button>
</div>

@endsection