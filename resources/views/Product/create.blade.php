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
                <div class="box-tools pull-right">
                    <div class="actions">
                        <a class="btn btn-sm btn-default" href="{{route('product.index')}}"> <i class="fa fa-list"></i> </a>
                    </div>
                </div>
            </div>
            <div class="box-body">
              @include('message')
                <form method="post" action="{{ route('product.store') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Product Name <span style="color:red">*</span> </label>
                            <div class="col-md-6">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="name" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong class="help-block">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Categories </label>
                            <div class="col-md-6">

                                <select class="form-control" name="Category_id" >
                                    <option value="0" {{ old('parent') == 'parent_id' ? 'selected' : '' }}>Select Category</option>

                                    @foreach($prods as $parent )

                                    <option value="{{ $parent->id }}" {{ $parent->name == 'Category_id' ? 'selected' : '' }}>{{ $parent->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('category_id'))
                                    <span class="help-block">
                                        <strong class="help-block">{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-primary">Add</button>
                                <a href="{{ route('product.index') }}" class="btn btn-info">cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>

    </body>
</html>
