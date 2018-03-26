<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
</head>
<body>

  @foreach ($trs as $post)
      <h2>{{ $post->customer_id }}</h2>
      <p> {{ $post->nota }}</p>
      <p> {{ $post->company }}</p>
      <p> {{ $post->first_name }}</p>
      <p> {{ $post->product_name }}</p>
  @endforeach

</body>
</html>
