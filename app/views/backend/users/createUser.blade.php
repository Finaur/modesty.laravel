@extends('backend.layout.defaultView')

@section('content')

   <section class="vbox">
      <section class="scrollable padder">
         <div class="m-b-md">
            <h2 class="font-thin m-b">Create User<span class="musicbar animate inline m-l-sm" style="width:20px;height:20px"> <span class="bar1 a1 bg-primary lter"></span> <span class="bar2 a2 bg-info lt"></span> <span class="bar3 a3 bg-success"></span> <span class="bar4 a4 bg-warning dk"></span> <span class="bar5 a5 bg-danger dker"></span> </span></h2>
         </div>
         
         <!--{{ HTML::ul($errors->all()) }}-->
         <div class="row">
            <div class="col-sm-12">
               <section class="panel panel-default">
                  <header class="panel-heading font-bold"> 
                     Element of User
                  </header>
                  <div class="panel-body">
                    {{ Form::open(array('url' =>'user', 'files' => 'true')) }}
                        <div class="form-group @if ($errors->has('full_name')) has-error @endif">
                          <label class="col-sm-2 control-label">
                              Full Name
                          </label> 
                          <div class="col-sm-10"> 
                              <input type="text" name="full_name" class="form-control" placeholder="full name"> 
                              @if ($errors->has('full_name')) <p class="help-block">{{ $errors->first('full_name') }}</p> @endif
                          </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group @if ($errors->has('user_name')) has-error @endif">
                           <label class="col-sm-2 control-label">
                              User Name
                           </label> 
                           <div class="col-sm-10"> 
                              <input type="text" name="user_name" class="form-control" placeholder="user name"> 
                              @if ($errors->has('user_name')) <p class="help-block">{{ $errors->first('user_name') }}</p> @endif
                           </div>
                         </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group ">
                            <label class="col-sm-2 control-label">Status</label> 
                            <div class="col-sm-4">
                               <select name="user_status" class="form-control m-b">
                                    <option value="1">super admin</option>
                                    <option value="2">admin</option>
                               </select>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group @if ($errors->has('user_email')) has-error @endif">
                           <label class="col-sm-2 control-label">
                              email
                           </label> 
                           <div class="col-sm-10"> 
                              <input type="email" name="user_email" class="form-control" placeholder="email"> 
                              @if ($errors->has('user_email')) <p class="help-block">{{ $errors->first('user_email') }}</p> @endif
                           </div>
                         </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                         <div class="form-group">
                           <label class="col-sm-2 control-label">
                              image
                           </label> 
                           <div class="col-sm-10"> 
                              <input type="file" name="user_image" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline v-middle input-s"> 
                           </div>
                        </div>
                        
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group @if ($errors->has('password1')) has-error @endif">
                           <label class="col-sm-2 control-label">
                              password
                           </label> 
                           <div class="col-sm-10"> 
                              <input type="password" name="password1" class="form-control" placeholder="password"> 
                              @if ($errors->has('password1')) <p class="help-block">{{ $errors->first('password1') }}</p> @endif
                           </div>
                         </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group @if ($errors->has('password')) has-error @endif">
                           <label class="col-sm-2 control-label">
                              password
                           </label> 
                           <div class="col-sm-10"> 
                              <input type="password" name="password" class="form-control" placeholder="password"> 
                              @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
                           </div>
                         </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                           <div class="form-group">
                              <label class="col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                {{ Form::submit('Submit', array('class' => 'btn btn-s-md btn-primary')) }}
                                {{ Form::reset('Reset', array('class' => 'btn btn-s-md btn-info')) }}
                              </div>
                           </div>
                     {{ Form::close() }}
                  </div>
               </section>
            </div>
         </div>
      </section>
   </section>
   
@stop