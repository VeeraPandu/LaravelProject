<form action="/validate" mathod="POST">
    @csrf
{{--{{$errors}}--}}
<input type="text" name="name">
@error('name')
<div>{{$message}}</div>
@enderror

<input type="text" name="email">
@error('email')
<div>{{$message}}</div>
@enderror

<input type="password" name="password">
@error('password')
<div>{{$message}}</div>
@enderror

<input type='submit'>
</form>








{{-- <!DOCTYPE html>
<html>
    <body>
   <form>
    <h1>Login</h1>
    name:<input type="text" placeholder="Username" name="Uname">

    email :<input type="text" placeholder="email" name="mail">
    
    
    password : <input type="password" placeholder="Password" name="password">
    
    <input type="submit" name="submit">
    
    </body>
</html> --}}