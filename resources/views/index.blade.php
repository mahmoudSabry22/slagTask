@extends('layouts.app')
@section('content')
		<section class="content">
        <!-- Default box -->
        <div class="container">
          
          
          <div class="box">
              <div class="box-header with-border">
                  <h3 class="box-title ">{{$title}}</h3>
              </div>
              <div class="box-body">
                  <table class="table">
                    <thead>
                      <tr>
                        
                        <th><a href="{{route('product.index')}}">All Product</th>
                        	<th><a href="{{route('product.create')}}">create Product</th>
                      
                      </tr>
                    </thead>
                    <thead>
                      <tr>
                        
                        <th><a href="{{route('category.index')}}">All Category</th>
                        	<th><a href="{{route('category.create')}}">create Category</th>
                      
                      </tr>
                    </thead>
                   </table>
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </section>
    
@endsection
