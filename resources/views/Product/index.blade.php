<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>{{$title}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
		<section class="content">
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
                              <a href="{{route('category.show',[$i->theCategory->slag])}}">  {{ $i->theCategory->name }}</a>
                            </td>
                              
                              <td>
                                  <a href="{{ route('product.show', [$i->id]) }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
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
    </section>


    </body>
</html>
