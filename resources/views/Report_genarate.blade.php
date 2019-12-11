@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div align="center" class="card-header" style="background-color:#004757" >Report_genarate</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  &nbsp;


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
