@if(Session::has('error'))
    <p class="alert alert-danger">{{Session::get('error')}}</p>
@endif

@foreach($errors->all() as $error)
    <h2 style="text-align: center;"><p class="alert alert-danger">{{$error}}</p></h2>
@endforeach