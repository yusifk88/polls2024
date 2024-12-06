{{--@extends('errors::minimal')--}}

{{--@section('title', __('Not Found'))--}}
{{--@section('code', '404')--}}
{{--@section('message', __('Not Found'))--}}

<?php
$user = \Illuminate\Support\Facades\Auth::user();
?>

@include("welcome",["user"=>$user]);
