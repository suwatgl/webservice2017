
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Justified Nav Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/docs/4.0/examples/justified-nav/justified-nav.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <header class="masthead">
        <h3 class="text-muted">Project name</h3>

        <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
              <li class="nav-item">
                <a class="nav-link" href="#" id="getHome">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="getSubject">Subject Plan </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="getStudents">Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="getFriends">Friends</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <main role="main">

        @include('home')

      </main>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Company 2017</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
     ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $("#getHome").click(function (event) {
        event.preventDefault();
        $.ajax({
        url: "/home",
        success: function (result) { $("main").empty().html(result); }
        });
    });
    $("#getSubject").click(function (event) {
        event.preventDefault();
        $.ajax({
        url: "/subjectplan",
        success: function (result) { $("main").empty().html(result); }
        });
    });
    $("#getStudents").click(function (event) {
        event.preventDefault();
        $.ajax({
        url: "/students",
        success: function (result) { $("main").empty().html(result); }
        });
    });
    $("#getFriends").click(function (event) {
        event.preventDefault();
        $.ajax({
        url: "/friends",
        success: function (result) { $("main").empty().html(result); }
        });
    });
    </script>
  
	</body>
</html>
