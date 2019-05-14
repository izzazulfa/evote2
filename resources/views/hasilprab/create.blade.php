@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Masukkan Identitas untuk melakukan Vote</div>
                    <div class="panel-body">
                        <br />


                        {!! Form::open(['url' => '/hasilprab', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('hasilprab.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
