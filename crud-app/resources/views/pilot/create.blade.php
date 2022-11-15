@extends('layouts.app')

@section('template_title')
    Create Pilot
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Pilot</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pilots.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pilot.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
