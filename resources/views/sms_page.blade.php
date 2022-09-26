<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMS -Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container text-center mt-5">
    <hr>
    <div class="row">
        <div class="col-md-6 offset-3">
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
                    <form action="{{ route('send.sms') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-group" name="number" >
                            <button type="submit" class="btn btn-primary">Send SMS</button>
                        </div>
                    </form>
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
