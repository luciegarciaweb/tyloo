@extends('layouts.backend')

@section('page-title')
    Edit Settings
@stop

@section('breadcrumb-title')
    Edit Settings
@stop

@section('content')
    <form role="form" action="{{ URL::route('admin.settings.update') }}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT">

        @include('errors.formErrors')

        <h1>TODO TODO TODO</h1>

        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
    </form>
@stop