@extends('backend.layout.defaultView')

@section('content')

  <section class="vbox">
      <section class="scrollable padder">
          <div class="m-b-md">
             <h2 class="font-thin m-b">Category<span class="musicbar animate inline m-l-sm" style="width:20px;height:20px"> <span class="bar1 a1 bg-primary lter"></span> <span class="bar2 a2 bg-info lt"></span> <span class="bar3 a3 bg-success"></span> <span class="bar4 a4 bg-warning dk"></span> <span class="bar5 a5 bg-danger dker"></span> </span></h2>
          </div>
          @if (Session::has('message'))
            <div class="row wrapper">
              <div class="alert alert-info"><i class="icon-check icon"></i> {{ Session::get('message') }}</div>
            </div>
          @endif
        <section class="panel panel-default">
          <header class="panel-heading text-left bg-light"> Category of {{$category->category_name}} </header>
           <div class="row wrapper text-right">
            <div class="col-sm-3"></div>
            <div class="col-sm-4 m-b-xs"></div>
            <div class="col-sm-5 m-b-xs">
               <a href="{{url('category')}}" class="btn btn-s-md btn-info ">
               <i class="icon-globe-alt icon"></i>
               CATEGORIES</a>
            </div>
          </div>
           <div class="table-responsive">
              <table class="table table-striped b-t b-light">
                 <thead>
                    <tr>
                       <th style="width:20px;">Show</th>
                       <th>News Title</th>
                       <th>Summary News</th>
                    </tr>
                 </thead>
                 <tbody>
                 
                   @foreach($news as $value)
                   <tr>
                       <td>  <a class="btn btn-small btn-warning" href="{{ URL::to('news/' . $value->news_id) }}"><i class="icon-eyeglasses"></i></a></td>
                       <td>{{ $value -> title_news }}</td>
                       <td>{{ $value -> summary_news }}</td>
                    </tr>
                    @endforeach
                 </tbody>
              </table>
           </div>

           <footer class="panel-footer">
              <div class="row">
                 <div class="col-sm-4 text-center"> <small class="text-muted inline m-t-sm m-b-sm"></small> </div>
                 <div class="col-sm-4 text-right text-center-xs">
                    {{$news->links()}}
                 </div>
              </div>
           </footer>
        </section>
      </section>
  </section> 

@stop