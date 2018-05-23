<!DOCTYPE html>
<html>
  <head>
    <title>Presentasi Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container-fluid">
      <div class="header clearfix">
        @yield ('header')
      </div>

      <div class="jumbotron">
        @yield ('jumbotron')
      </div>

      <div class="row marketing">
        <div class="col-lg-5 col-sm-12">
          @yield ('section1')
        </div>
        <div class="col-lg-7 col-sm-12">
          @yield ('section2')
        </div>
      </div>
    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>