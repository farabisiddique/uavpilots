  @extends('layouts.app') 

  <script src="{{ asset('js/signup.js') }}" defer></script>

  @section('content')


    <form id="regForm" method="POST" action="{{ route('register') }}">
                @csrf

    <h1>Sign Up:</h1>
    <!-- One "tab" for each step in the form: -->
    

    <div class="tab">Login Info:
      <p><input placeholder="E-mail..." oninput="this.className = ''" name="email" id="email"></p>
      <p class="email_error"><!-- This email already exists --></p>
      <p><input placeholder="Password..." oninput="this.className = ''" name="password" type="password"></p>
      <p><input placeholder="Username...(has to be unique)" oninput="this.className = ''" name="username"></p>
      <p class="username_error"><!-- This username already exists --></p>

    </div>
    <div class="tab">Name:
      <p><input placeholder="First name..." oninput="this.className = ''" name="first_name"></p>
      <p><input placeholder="Last name..." oninput="this.className = ''" name="last_name"></p>
    </div>
    <div class="tab">Contact Info:
      <p><input placeholder="Country..." oninput="this.className = ''" name="country"></p>
      <p><input placeholder="State..." oninput="this.className = ''" name="state"></p>
      <p><input placeholder="Industry..." oninput="this.className = ''" name="industry"></p>
      <p><input placeholder="Description..." oninput="this.className = ''" name="description"></p>

    </div>
  <!--   <div class="tab">Birthday:
      <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
      <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
      <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
    </div> -->
    
    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="button" id="prevBtn">Previous</button>
        <button type="button" id="nextBtn">Next</button>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
  </form>



  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>

  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>

  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>

  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>

  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>

  <p>jsdghbvsdv</p>
  <p>jsdghbvsdv</p>










  @endsection




















