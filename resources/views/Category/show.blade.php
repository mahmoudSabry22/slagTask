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
                    <a class="btn btn-sm btn-default" href="{{ route('category.create') }}"> <i class="fa fa-plus"></i> </a>
                    <a class="btn btn-sm btn-default" href="{{ route('category.edit', [$show->slag]) }}"> <i class="fa fa-edit"></i> </a>
                    <span  title="delete cat">
                        <a data-toggle="modal" data-target="#myModal{{ $show->slag }}" class="btn btn-sm btn-default" href=""> <i class="fa fa-trash"></i> </a>
                    </span>
                    <div class="modal fade" id="myModal{{ $show->slag }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal">x</button>
                                    <h4 class="modal-title">
                                        delete
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    ask {{ $show->name }} !
                                </div>
                                <div class="modal-footer">
                                    <form method="post" action="{{ route('category.destroy', [$show->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        <a class="btn btn-default" data-dismiss="modal">
                                            cancel
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-sm btn-default" href="{{ route('category.index') }}"> <i class="fa fa-list"></i> </a>
                </div>
            </div>
            <div class="box-body">
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <strong>Name : </strong>
                        {{ $show->name }}
                        <br><hr>
                    </div>

                    <div class="col-md-6">
                        <strong>Slag : </strong>
                        {{ $show->slag }}
                        <br><hr>
                    </div>
                    


                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    </body>
</html>
