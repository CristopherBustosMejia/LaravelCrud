@extends('layouts.app')

@section('template_title')
    {{ $pilot->name ?? 'Show Pilot' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pilot</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pilots.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $pilot->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Team:</strong>
                            {{ $pilot->Team }}
                        </div>
                        <div class="form-group">
                            <strong>Number:</strong>
                            {{ $pilot->Number }}
                        </div>
                        <div class="form-group">
                            <strong>Teammate:</strong>
                            {{ $pilot->Teammate }}
                        </div>
                        <div class="form-group">
                            <strong>Td:</strong>
                            {{ $pilot->TD }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
