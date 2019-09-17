@extends('layouts.app')
@section('content')
		<section class="content">
      <div class="container">
          <!-- Default box -->
          <div class="box">
              <div class="box-header with-border">
                  <h3 class="box-title">{{$title}}</h3>
              </div>
              <div class="box-body">
                  <table class="table">
                    <thead>
                      <tr>
                        
                        <th>Name</th>
                        <th>Category</th>
                        
                        
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($index as $i)
                            <tr>
                                
                                <td>{{ ($i->name) }}</td>
                               <td>
                                <a href="{{route('category.show',[$i->category->slag])}}">  {{ $i->category->name }}</a>
                              </td>
                                
                                <td>
                                    <a href="{{ route('product.show', [$i->name]) }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                </td>
                                <td>
                                    <a href="{{ route('product.edit', [$i->id]) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('product.destroy', [$i->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
    </section>
@endsection

