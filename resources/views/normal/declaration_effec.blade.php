
@extends('layouts.indexlaynor')

@section('title')
Dashboard
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Declarations traités</h4>
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
                        <th>
                            id agent traité
                        </th>
                        <th>
                            date de traitement
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
                            <td>
                            {{ $declarations->agent }}
                            </td>
                            <td>
                            {{ $declarations->updated_at }}
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
