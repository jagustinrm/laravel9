<x-layouts.app name="title" meta-description="Register meta description">
   
    <h1>Register</h1>
    <form method="POST" action="{{route('register')}}"> 
        @csrf
        <div>
        <label>
            Name <br>
            <input name="name" type="text" value="{{old('name')}}">
        
            @error('name')
            <br>
            <small style="color: red">{{$message}} </small>
            @enderror
        </label><br>
        <label>
            Email <br>
            <input name="email" type="email" value="{{old('email')}}">
        
            @error('email')
            <br>
            <small style="color: red">{{$message}} </small>
            @enderror
        </label><br>
        <label>
            Password <br>
            <input name="password" type="password" value="{{old('password')}}">
        
            @error('password')
            <br>
            <small style="color: red">{{$message}} </small>
            @enderror
        </label><br>
        <label>
            Password confirmation <br>
            <input name="password_confirmation" type="password" value="{{old('password_confirmation')}}">
        
            @error('password_confirmation')
            <br>
            <small style="color: red">{{$message}} </small>
            @enderror
        </label><br>
    </div>



        <button type="submit">Register</button>
        <br>
    </form>
    <a href="{{route('login')}}">Login</a>
</x-layout.app> 