<x-layouts.app name="title" meta-description="login meta description">
   
    <h1>Login</h1>
    <form method="POST" action="{{route('login')}}"> 
        @csrf
        <div>
        
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
        <label class="flex items-center">
        <input name="remember" type="checkbox" value="{{old('password_confirmation')}}">
            <span class="ml-2 cursor-pointer">
            Recuérdame <br>
            </span>
        </label><br>
    </div>



        <button type="submit">Login</button>
        <br>
    </form>
    <a href="{{route('register')}}">Register</a>
</x-layout.app> 