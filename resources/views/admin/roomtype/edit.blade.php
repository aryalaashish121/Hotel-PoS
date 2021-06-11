
@extends('layouts.app')



@section('content')
<div class="container-fluid">
    <div class="fade-in row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Room Types') }}</div>

                <div class="card-body justify-content-center">
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-header"><strong>{{__('Update New Room Type')}}</strong></div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{route('admin.roomtype.update',$roomType->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="card-body">
                        <div class="form-group">
                        <label class="form-col-form-label" for="inputSuccess1">{{__('Room Type Name')}}</label>
                        <input class="form-control" value="{{$roomType->name}}" name="name" id="roomtypename" type="text">
                        </div>
                        <div class="card-footer justify-content-center">
                            <button class="btn btn-block btn-outline-success active" type="submit" aria-pressed="true">{{__('Update')}}</button>
                            </div>
                        </div>
                        </form>
                        </div>
                        </div>
               
             
                </div>
            </div>
        </div>
    </div>
</div>

@endsection