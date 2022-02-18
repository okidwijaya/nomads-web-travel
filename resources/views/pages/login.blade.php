@extends('layouts.login')

@section('title')
Wisata Jateng
@endsection

@section('content')
  <!-- header -->
  <header class="text-center">
    <div class="wrapper">
        <form class="form-signin">       
          <h2 class="form-signin-heading">Silahkan login</h2>
          <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
          <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
          <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Ingat aku
          </label>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
        </form>
      </div>
</header>

<!-- main -->
<main>
    <section class="container">
        
    </section>
</main>
@endsection