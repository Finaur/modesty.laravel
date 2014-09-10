@extends('backend.layout.defaultView')

@section('content')
	
	<section class="vbox">
      <section class="scrollable padder">
         <div class="m-b-md">
            <h2 class="font-thin m-b">Insert News<span class="musicbar animate inline m-l-sm" style="width:20px;height:20px"> <span class="bar1 a1 bg-primary lter"></span> <span class="bar2 a2 bg-info lt"></span> <span class="bar3 a3 bg-success"></span> <span class="bar4 a4 bg-warning dk"></span> <span class="bar5 a5 bg-danger dker"></span> </span></h2>
         </div>
         <!--{{ HTML::ul($errors->all()) }}-->
         <div class="row">
            <div class="col-sm-12">
               <section class="panel panel-default">
                  <header class="panel-heading font-bold"> 
                     Element
                  </header>
	                  <div class="panel-body">
	                    <div class="form-group ">
	                       <label class="col-sm-2 control-label">
	                          News Title
	                       </label> 
	                       <div class="col-sm-10"> 
	                          <p>{{$news -> title_news}}</p>
	                       </div>
	                     </div>
	                     <div class="line line-dashed b-b line-lg pull-in"></div>
	                    <div class="form-group">
	                       <label class="col-sm-2 control-label">
	                          Category
	                       </label> 
	                       <div class="col-sm-10"> 
	                          <p>{{$news -> category->category_name}}</p>
	                       </div>
	                     </div>
	                     <div class="line line-dashed b-b line-lg pull-in"></div>
	                     <div class="form-group">
	                       <label class="col-sm-2 control-label">
	                          Tags News
	                       </label> 
	                       <div class="col-sm-10">
	                       	@foreach ($news->tags as $value)
	                          <p>{{$value -> tags_name}}</p>
	                        @endforeach
	                       </div>
	                     </div>
	                     <div class="line line-dashed b-b line-lg pull-in"></div>
	                    <div class="form-group">
	                       <label class="col-sm-2 control-label">
	                          Content News
	                       </label> 
	                       <div class="col-sm-10"> 
	                          <p>{{$news->content_news}}</p>
	                       </div>
	                     </div>
	                     <div class="line line-dashed b-b line-lg pull-in"></div>
	                  </div>
	              
               </section>
            </div>
         </div>
      </section>
   </section>
   
@stop