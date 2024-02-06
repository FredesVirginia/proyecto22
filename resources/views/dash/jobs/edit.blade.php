@extends('dash.layout.dash', [
    'title' => 'Dash | Yobbix',
    'breadcrumb' => [ "Dash" , "Vista Principal" ],
    'pageTitle' => 'Vista Principal',
])



@section('css')

{{-- <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'> --}}

@endsection

@section('js')

{{-- <script src= "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> --}}
{{-- https://jqueryui.com/datepicker/ --}}
<script>
    // $( function() {
    //     $( "#start_date" ).datepicker();
    //     $( "#end_date" ).datepicker();
    // } );
</script>

@endsection

@section('content')

    Crear formulario
    submit a ruta route('dash.jobs.create')

    title
    description
    start_date
    end_date
    salary_min
    salary_max

@endsection
