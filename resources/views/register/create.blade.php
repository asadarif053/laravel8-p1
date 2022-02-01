<x-layout>

<section>
    <main>
    <form method="post" action="register">

    @csrf <!-- {{ csrf_field() }} -->
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
    <div class="mb-6">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email"  value="{{ old('email') }}" required>
    </div>        

    <div class="mb-6">
            <label for="email"><b>Name</b></label>
            <input type="text" placeholder="Name" name="name" id="name" value="{{ old('name') }}" required>
    </div> 
    <div class="mb-6">
            <label for="email"><b>User Name</b></label>
            <input type="text" placeholder="UserName" name="username" id="username" value="{{ old('username') }}">
    </div> 

    @error('username')
        <p class="text-red-500 ">{{ $message }}</p>
    @enderror



    <div class="mb-6">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password"  required>
            </div> 
                  
            @if($errors->any())
                <ul>
                        @foreach($errors->all() as $error)
                                <li>{{ $error }} </li>
                        @endforeach


                </ul>       

                @endif
        
        
                 
    <div class="mb-6">
            <button type="submit" class="registerbtn">Register</button>
    </div>        
        </div>

        
        </form>
    </main>
</section>
</x-layout>