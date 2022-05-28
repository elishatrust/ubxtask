<!DOCTYPE html>
<html lang="en">

<head>
    <title>ubxtask</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container" style="padding: 5% 20%;">
        <div class="panel panel-default">
            <div class="panel-heading text-center py-4 fs-2">UPLOAD DATA FILE</div>
            <div class="panel-body ">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if (count($errors) > 0)
                    <div class="row">
                        <div class="col-md-8 col-md-offset-1">
                          <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              <h4><i class="icon fa fa-ban"></i> Error!</h4>
                              @foreach($errors->all() as $error)
                              {{ $error }} <br>
                              @endforeach
                          </div>
                        </div>
                    </div>
                    @endif

                    @if (Session::has('success'))
                        <div class="row">
                          <div class="col-md-8 col-md-offset-1">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5>{!! Session::get('success') !!}</h5>
                            </div>
                          </div>
                        </div>
                    @endif
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button type="submit" class="btn btn-success">Upload</button>
                </form>
            </div>
        </div>
        <div class="process-bill text-center">
            <a href="{{url('/pages/stage-0')}}" class="btn btn-success btn-block fs-3">Process Bill</a>
        </div>
    </div>
</body>

</html>
