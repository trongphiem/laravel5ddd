<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Sample </div>
                <p><a href="{!!url('sample/form')!!}">Add New</a></p>
  <table class="table">
	  @foreach($list as $k=>$v)
	  <tr>
	  	<td>{!!$v->id!!}</td>
	  	<td>{!!$v->email!!}</td>
	  	<td>{!!$v->msg!!}</td>
	  </tr>
	  @endforeach
  </table>
   
    </div>
        </div>
    </body>
</html>
