@extends('template.master')
@section('content')
{{auth()->user()->nome}}  
@stop