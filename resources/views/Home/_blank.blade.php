@extends('layouts.FrontBase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon',Storage::URL($setting->icon))
@section('content')




@endsection
