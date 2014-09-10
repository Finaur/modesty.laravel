@extends('backend.layout.defaultView')

@section('content')

  <section class="vbox">
      <section class="scrollable padder">
          <div class="m-b-md">
             <h2 class="font-thin m-b">USERS<span class="musicbar animate inline m-l-sm" style="width:20px;height:20px"> <span class="bar1 a1 bg-primary lter"></span> <span class="bar2 a2 bg-info lt"></span> <span class="bar3 a3 bg-success"></span> <span class="bar4 a4 bg-warning dk"></span> <span class="bar5 a5 bg-danger dker"></span> </span></h2>
          </div>
          <div class="alert alert-info"><i class="fa fa-ban-circle"></i><i class=" icon-info icon"></i> <strong>Information!</strong> <a href="#" class="alert-link">Super Admin</a> area. </div>
          @if (Session::has('message'))
            <div class="row wrapper">
              <div class="alert alert-info"><i class="icon-check icon"></i> {{ Session::get('message') }}</div>
            </div>
          @endif
        <section class="panel panel-default">
          <header class="panel-heading text-left bg-light"> Management Users </header>
          <div class="row wrapper text-right">
            <div class="col-sm-3"></div>
            <div class="col-sm-4 m-b-xs"></div>
            <div class="col-sm-5 m-b-xs">
               <a href="{{url('user/create')}}" class="btn btn-s-md btn-info ">
               <i class="icon-user-follow icon"></i>
               Create New Users</a>
            </div>
          </div>
           <div class="table-responsive">
              <table class="table table-striped b-t b-light">
                 <thead>
                    <tr>
                       <th style="width:165px;">users</th>
                       <th>Full name</th>
                       <th>user name</th>
                       <th>email</th> 
                       <th>status</th>
                       <th style="width:165px;">Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach($user as $value)
                      <tr>
                        <td><span class="thumb-sm avatar pull-left pull-right h2 text-muted m-l"> <img src="{{ asset('assets/image/'.$value->user_image)}}" alt="..."><i class="on b-light right sm"></i></span> </td>
                        <td>{{$value -> full_name}}</td>
                        <td>{{$value -> user_name}}</td>
                        <td>{{$value -> user_email}}</td>
                        <td>
                            @if($value->user_status == 1)
                              <label class="btn btn-sm btn-info active"><i class="fa fa-check text-active"></i> super admin </label></td>
                            @else
                              <label class="btn btn-sm btn-info active"><i class="fa fa-check text-active"></i> admin </label></td>
                            @endif
                        <td><a href="#" class="btn btn-sm btn-icon btn-info"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-icon btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                      </tr>
                    @endforeach
                 </tbody>
                    
              </table>
           </div>
           <footer class="panel-footer">
              <div class="row">
                 <div class="col-sm-4 text-center"> <small class="text-muted inline m-t-sm m-b-sm"></small> </div>
                 <div class="col-sm-4 text-right text-center-xs">

                 </div>
              </div>
           </footer>
        </section>
      </section>
  </section> 

@stop