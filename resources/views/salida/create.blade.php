@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Salida
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Salida</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('salidas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('salida.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
