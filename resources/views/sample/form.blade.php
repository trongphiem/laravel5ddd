<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

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
                
  <form class="ui form" method="post" action="{{ url('/sample/save') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input name="_method" type="hidden" value="POST">
 <br />
 <br />
 	{{{$errors->first('email')}}}
 
    <table class="ui celled table">
        
        <tbody>
            <tr>
            			<td>Email </td> <td>
            		            			<input name="email" type="text" value="{{{ old('email') }}}"></td>
            </tr>
             <tr>
                <td>Text</td><td><input name="msg" type="text" value="{{{ old('msg') }}}"></td>
            </tr>
        </tbody>
    </table>
    <input type="submit" class="ui primary button" value="Confirm">
    
    </form>
   
    </div>
        </div>
    </body>
</html>
