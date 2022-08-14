<!DOCTYPE html>
<html>

<head>
    <title>feedier Feedbacks import</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                feedier Feedbacks import
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{ route('feedbacks.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="required" for="feedback">Feedback</label>
                        <input class="form-control {{ $errors->has('feedback') ? 'is-invalid' : '' }}" type="text"
                            name="feedback" id="feedback" value="" required>
                        @if($errors->has('feedback'))
                        <div class="invalid-feedback">
                            {{ $errors->first('feedback') }}
                        </div>
                        @endif
                        <span class="help-block">please add your feedback </span>
                    </div>
                    <br>
                    <button class="btn btn-success">Submit feedback</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>
