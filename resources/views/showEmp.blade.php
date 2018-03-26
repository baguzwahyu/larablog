<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="http://www.expertphp.in/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr class="heading">
                <th>No</th>
                <th>Company</th>
                <th>First Name</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($emp as $em)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{!! $em->company !!}</td>
                        <td>{!! $em->first_name !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $emp->links() !!}
    </div>
</div>
</body>
</html>
