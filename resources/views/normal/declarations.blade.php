
@extends('layouts.indexlaynor')

@section('title')
Dashboard
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Declarations en cours</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th>
                            matricule
                        </th>
                        <th>
                            type_panne
                        </th>
                        <th>
                            localisation
                        </th>
                        <th>
                            date
                        </th>
                       
                        
                        </thead>
                        <tbody>
                        @foreach($declarations as $declarations)
                        <tr>
                            <td>
                            {{ $declarations->matricule }}
                            </td>
                            <td>
                            {{ $declarations->type_panne }}
                            </td>
                            <td>
                            {{ $declarations->localisation }}
                            </td>
                            <td>
                            {{ $declarations->date }}
                            </td>
                            
                            <td class="text-right">
                            <form action="/declanor/{{ $declarations->id }}/{{ Auth::user()->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <button type="submit" class="btn btn-danger">Traiter</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>
@endsection
@section('script')

@endsection
