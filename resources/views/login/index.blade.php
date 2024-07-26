@include('frontend.00_atas.header')


{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}

<section id="sec-0">
    
    @include('frontend.00_atas.header1')
    
        <header>
        
        @include('frontend.00_atas.header2_navbar')
            
        </header>
        <div class="div" style="
            justify-content: center;
            text-align:center;
        ">
                    <h2 style="
    margin-top: 10px;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    font-size: 14px;
    margin-left: 425px;
    color: #333;
    text-transform: uppercase;
    text-align: center;
    border: 2px solid black;
    padding: 10px;
    border-radius: 25px;
    width: 500px;
    background: linear-gradient(to right, #f0f0f0, #e0e0e0);
    transition: background 0.5s ease, color 0.5s ease;
    " onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow )'; this.style.color='white';">

Silahkan Login !
</h2>
</div>
<div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    margin-bottom: 0px;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: 75vh;
    margin-left: 100px;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; padding: 0; margin-top: 10px;">
<h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;">Kementrian Pekerjaan Umum Dan Penataan Ruang </h1>
    <div class="container">
        <div class="card" style="
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 20px auto;">


            {{-- ------------------------------------ FITUR TAMBAHAN ------------- --}}

            <div class="controls" style="  
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-radius:5px;
            ">

<div class="show-entries" style="border-radius: 10px;">
    <label for="entries" style="margin-right: 5px;">
        <style>
            .badge {
                background: linear-gradient(to right, yellow, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 10px;
                margin-left: 450px;
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background-color: white;
                color: black;
            }
        </style>
        <div class="badge"><i class="fas fa-edit me-2"></i>Halaman Login !</div></label>
  
</div>
</div>

{{-- =========================================================================== --}}

<style>
    /* Mengatur form dan input */
.form-group {
    margin-bottom: 1rem;
}

.font-semibold {
    font-weight: 600;
}

.text-center {
    text-align: center;
}

.btn-primary {
    display: inline-block;
    padding: 10px 22px;
    font-weight: bold;
    font-size: 14px;
    color: #fff;
    border-radius: 9999px;
    background-color: #0814b9;
    transition: background-color 0.3s, color 0.3s;
    text-decoration: none;
    border: none;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #000;
}

.form-control {
    padding: 10px;
    border-radius: 9999px;
    border: 1px solid #ddd;
    width: 100%;
}

.invalid-feedback {
    color: #dc3545;
}

@media (max-width: 576px) {
    .btn-primary {
        width: 100%;
    }
}

</style>


<form action="/login" method="post">
    @csrf
    <div class="form-group mt-0">
        <label class="font-semibold text-center d-block" for="email" style="font-family: 'Lato', sans-serif; font-weight: 700;">
            <i class="fas fa-envelope" style="margin-right: 10px; "></i> Email
        </label>
        <input
        style="margin-left:330px; width: 400px; text-align:left; padding: 0px 15px;"
        type="text"
        name="email"
        class="form-control rounded-full @error('email') is-invalid @enderror"
        id="email"
        placeholder="Email"
        required
        value="{{ old('email') }}"
    />

    @error('email')
        <div class="invalid-feedback mb-2">
            {{ $message }}
        </div>
    @enderror
    </div>

    <div class="form-group mt-0">
        <label class="font-semibold text-center d-block mb-2" for="password" style="font-family: 'Lato', sans-serif; font-weight: 700;">
            <i class="fas fa-key" style="margin-right: 10px;"></i> Password
        </label>
        <input
        style="margin-left:330px; width: 400px; text-align:left; padding: 0px 15px;"
        type="password"
        name="password"
        class="form-control rounded-full @error('password') is-invalid @enderror"
        id="password"
        placeholder="Password"
        required
    />

    @error('password')
        <div class="invalid-feedback mb-2">
            {{ $message }}
        </div>
    @enderror

    @if ($errors->has('loginError'))
        <div class="alert alert-danger">
            {{ $errors->first('loginError') }}
        </div>
    @endif
    </div>

    <div class="form-group mt-4 text-center" style="background-color: white;">
    <style>
            .masuk {
                background: linear-gradient(to right, yellow, black);
                color: white;
                padding: 10px 20px;
                border-radius: 35px;
                display: inline-block;
                border: none;
                font-size: 1rem;
                margin-right: 10px;
                /* margin-left: 450px; */
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .masuk:hover {
                /* background-color: white; */
                background: linear-gradient(to right, darkblue, white);
                color: black;
            }
        </style>
        <button type="submit" class="masuk" style="width: 300px; background-color: #FFCB0F; color: white; font-family: 'Lato', sans-serif; font-weight: 700;"><i class="fab fa-telegram" style="color: white; font-size: 16px; margin-right: 10px;"></i>Login</button>
        <div style="margin-top: 10px;">
            <a href="/404" class="text-black" style="font-family: 'Lato', sans-serif; font-weight: 700;">Register Here?</a>
        </div>
    </div>
</form>

                            {{-- =========================================================================== --}}
                        
                  
   




{{-- ------------------------------------ END FITUR ------------- --}}


           
        </div>
</div>
</div>



<br><br>
    </section>


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}






@include('frontend.00_atas.footer1')

    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
@include('frontend.00_atas.footer2')