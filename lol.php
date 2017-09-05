<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SoftAOX | Insert Checkbox values in Database using Ajax, Jquery & PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
<input type="checkbox" class="get_value" value="DayTime"><label>from 15 till 18</label><br/>
<input type="checkbox" class="get_value" value="NightTime"><label>from 12 till 23</label><br/>
<input type="checkbox" class="get_value" value="MorningTime"><label>from 9 till 12</label><br/>
<br/>
<button type="button" name="submit" id="submit">Save</button>
<br/>
<h4 id="result"></h4>
<script>
    $(document).ready(function(){
        $('#submit').click(function(){
            var insert = [];
            $('.get_value').each(function(){
                if($(this).is(":checked"))
                {
                    insert.push($(this).val());
                }
            });
            insert = insert.toString();
            $.ajax({
                url: "insert.php",
                method: "POST",
                data:{insert:insert},
                success:function(data){
                    $('#result').html(data);
                }
            });
        });
    });
</script>
</body>
</html>