<!DOCTYPE html>
<html>
<head>
    <title>Warm UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-md">
        <a href="/" class="navbar-brand">WARM-UP</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="/userlist" class="nav-link">Users</a></li>
                <li class="nav-item"><a href="/postslist" class="nav-link">Posts</a></li>
              
            </ul>
        </div>
    </nav>
    @yield('content')
    @yield('styles')
    @yield('javascript')

</body>

</html>
