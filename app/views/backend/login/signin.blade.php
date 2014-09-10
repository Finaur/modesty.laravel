@extends('backend.layout.loginView')

@section('content')
	<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
         <div class="container aside-xl">
            <a class="navbar-brand block" href="index.html"><span class="h1 font-bold">Modesty</span></a> 
            @if (Session::has('message'))
            <div class="row wrapper">
              <div class="alert alert-danger"><i class=" fa-times-circle fa"></i> {{ Session::get('message') }}</div>
            </div>
            @endif
            <section class="m-b-lg">
               <header class="wrapper text-center"> <strong>Sign in to get in touch</strong> </header>
               {{ Form::open(array('url' => 'login')) }}
                  <div class="form-group  @if ($errors->has('user_name')) has-error @endif"> 
                     <input name="user_name" type="username" placeholder="username" class="form-control rounded input-lg text-center no-border"> 
                     @if ($errors->has('password')) <p class="help-block">{{ $errors->first('user_name') }}</p> @endif
                  </div>
                  <div class="form-group @if ($errors->has('password')) has-error @endif"> 
                     <input name="password" type="password" placeholder="Password" class="form-control rounded input-lg text-center no-border"> 
                     @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                  </div>
                  <div class="checkbox i-checks m-b"> 
                     <label class="m-l"> 
                        <input type="checkbox" name="remember" id="remember"><i></i> Remember me </label> </div>
                  <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign in</span></button> 
                  
                  <div class="line line-dashed"></div>
                  <p class="text-muted text-center"><small></small></p>
                  
               </form>
            </section>
         </div>
    </section>
      <!-- footer --> 
	  <footer id="footer">
	     <div class="text-center padder">
	        <p> <small>Web app framework base on Bootstrap<br>&copy; 2014</small> </p>
	     </div>
	  </footer>
@stop