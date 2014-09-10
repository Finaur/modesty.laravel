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
                     {{ Form::model($news, array('route' => array('news.update', $news->news_id), 'method' => 'PUT')) }}
                        <div class="form-group @if ($errors->has('news_title')) has-error @endif">
                           <label class="col-sm-2 control-label">
                              News Title
                           </label> 
                           <div class="col-sm-10"> 
                              <input type="text" name="news_title" class="form-control" placeholder="title news" value = "{{$news->title_news}}"> 
                              @if ($errors->has('news_title')) <p class="help-block">{{ $errors->first('news_title') }}</p> @endif
                           </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Select</label> 
                            <div class="col-sm-4">
                               <select name="category_id" class="form-control m-b">
                                  @foreach($category_news as $value)
                                    <option value="{{$value->category_id}}" {{($news->category_id == $value->category_id) ? "selected='true'" : "" }}">{{$value->category_name}}</option>
                                  @endforeach
                               </select>
                            </div>
                        </div>
                         <div class="line line-dashed b-b line-lg pull-in"></div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Tags News</label> 
                            <div class="col-sm-10">
                               <select name="tags_id[]" style="width:260px" multiple class="chosen-select">
                                  @foreach($news->tags as $value)
                                    @if($news->tags_id == $value->tags_id)
                                      <option  value="{{$value->tags_id}}" >{{$value->tags_name}}</option>
                                    @else
                                       <option value="{{$value->tags_id}}" selected >{{$value->tags_name}}</option>
                                    @endif 
                                  @endforeach
                                  @foreach($tags_news as $value)
                                      <option  value="{{$value->tags_id}}" >{{$value->tags_name}}</option>
                                  @endforeach
                               </select>
                               <a href="{{url('tags/create/news')}}" class="btn btn-s-md btn-info "><i class="icon-tag icon"></i> add tags</a>
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                          <div class="form-group @if ($errors->has('summary_news')) has-error @endif">
                           <label class="col-sm-2 control-label">
                              Summary News
                           </label> 
                           <div class="col-sm-10">
                              <textarea name="summary_news" class="form-control" value ="{{$news->summary_news}}">{{$news->summary_news}}</textarea>
                              @if ($errors->has('summary_news')) <p class="help-block">{{ $errors->first('summary_news') }}</p> @endif 
                           </div>
                         </div>
                         <div class="line line-dashed b-b line-lg pull-in"></div>
                        <!--Wyswyg bootstrap editor-->
                        <div class="form-group @if ($errors->has('content_news')) has-error @endif">
                           <label class="col-sm-2 control-label">
                              Content News
                           </label> 
                           <div class="col-sm-10"> 
                            <textarea name="content_news"  class="ckeditor" value = "{{$news->content_news}}">{{$news->content_news}}</textarea> 
                             @if ($errors->has('content_news')) <p class="help-block">{{ $errors->first('content_news') }}</p> @endif 
                           </div>
                        </div>
                        <!-- End ofWyswyg bootstrap editor-->
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