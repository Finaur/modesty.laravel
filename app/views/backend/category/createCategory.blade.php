@extends('backend.layout.defaultView')

@section('content')

   <section class="vbox">
      <section class="scrollable padder">
         <div class="m-b-md">
            <h2 class="font-thin m-b">Create Category<span class="musicbar animate inline m-l-sm" style="width:20px;height:20px"> <span class="bar1 a1 bg-primary lter"></span> <span class="bar2 a2 bg-info lt"></span> <span class="bar3 a3 bg-success"></span> <span class="bar4 a4 bg-warning dk"></span> <span class="bar5 a5 bg-danger dker"></span> </span></h2>
         </div>
         <!--{{ HTML::ul($errors->all()) }}-->
         <div class="row">
            <div class="col-sm-12">
               <section class="panel panel-default">
                  <header class="panel-heading font-bold"> 
                     Element
                  </header>
                  <div class="panel-body">
                     {{ Form::open(array('url' =>'category/insert', 'files' => 'true')) }}
                        <div class="form-group @if ($errors->has('category_name')) has-error @endif">
                           <label class="col-sm-2 control-label">
                              Category Name
                           </label> 
                           <div class="col-sm-10"> 
                              <input type="text" name="category_name" class="form-control" placeholder="Category name"> 
                              @if ($errors->has('category_name')) <p class="help-block">{{ $errors->first('category_name') }}</p> @endif
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