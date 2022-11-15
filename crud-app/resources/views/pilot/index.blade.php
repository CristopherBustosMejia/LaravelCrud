@extends('layouts.app')

@section('template_title')
    Pilot
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pilot') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pilots.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Team</th>
										<th>Number</th>
										<th>Teammate</th>
										<th>Td</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pilots as $pilot)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $pilot->Name }}</td>
											<td>{{ $pilot->Team }}</td>
											<td>{{ $pilot->Number }}</td>
											<td>{{ $pilot->Teammate }}</td>
											<td>{{ $pilot->TD }}</td>

                                            <td>
                                                <form action="{{ route('pilots.destroy',$pilot->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pilots.show',$pilot->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pilots.edit',$pilot->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pilots->links() !!}
            </div>
        </div>
    </div>
@endsection
