<x-layout>

<section>
    <main>
    <form method="post" action="login">

    @csrf <!-- {{ csrf_field() }} -->
        <div class="container">
            <h1>LOGIN</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
   
    <div class="mb-6">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="email" name="email" id="email" value="{{ old('email') }}">
    </div> 

    @error('email')
        <p class="text-red-500 ">{{ $message }}</p>
    @enderror



    <div class="mb-6">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password"  required>
            </div> 
                  
        
                 
    <div class="mb-6">
            <button type="submit" class="registerbtn">LOGIN</button>
    </div>        
        </div>

        
        </form>
    </main>
</section>
</x-layout>