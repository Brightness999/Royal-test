@extends('layouts.app')

@section('content')

<h1>{{ Session::get('user_first_name') }} {{ Session::get('user_last_name') }}</h1>
<h1>Gender: {{ Session::get('user_gender') }}</h1>
<h1>Email: {{ Session::get('user_email') }}</h1>

@endsection