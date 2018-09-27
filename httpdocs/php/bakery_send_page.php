<!DOCTYPE html>
<html lang="en">
<head>
    <title>BPdogtraining login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css">

    <script src="../lib/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../lib/jquery-ui.min.js"></script>
    <script src="../lib/js-cookie.js"></script>


</head>
<body>
    <section>
        <form style="padding: 30px;">
            <div class="radio">
                <label><input name="sandwich-menu" type="radio" value="1">The Babe</label>
            </div>

            <div class="radio">
                <label><input name="sandwich-menu" type="radio" value="2">Italian Dream</label>
            </div>

            <div class="radio">
                <label><input name="sandwich-menu" type="radio" value="3">Veggie Delight</label>
            </div>

            <div class="radio">
                <label><input name="sandwich-menu" type="radio" value="4">Bacon Babe</label>
            </div>
            <input class="form-control btn btn-primary" type="submit" id="submit-btn" value="Submit">
        </form>
    </section>


    <script type="text/javascript">
        $("#submit-btn").click(function() {
            var sandwich = $("input[name='sandwich-menu']:checked").val();
            alert(sandwich);
        });
    </script>


</body>
</html>