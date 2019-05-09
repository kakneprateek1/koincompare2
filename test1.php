<html>
    <head>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="test.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="dropdown.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="knockout.js"></script>
        
    </head>

    <body>
        

        <div class="container" style="width:600px;">
           <input type="text"  id="qty1" >
            <select  id="exchange" class="form-control input-lg">
                <option value="" >Select exchange</option>
            </select>
            <br />
            <select  id="coin" class="form-control input-lg">
                <option value="">Select coin</option>
            </select>
            <br />
            <input type="text"  id="qty" class="form-control input-lg">
            <br />

            <button id="formsubmit">Send Data</button></br>
            
            <textarea id="response"></textarea>
        </div>
    </body>
</html>