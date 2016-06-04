<!DOCTYPE HTML">
<html>
    <head>
        <title>Exp.test</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    </head>
    <body>
        <h4>Assignment</h4>
        <div class="select_container">
            <label>Call centr:</label>
            <select id="callcenter" class="selectpicker btn">
                <option></option>
                <?php foreach ($cCenters as $center) : ?>
                    <?php echo '<option data-query_id="' . $center['id'] . '">' . $center['name'] . '</option>'; ?>
                <?php endforeach; ?>
            </select>
            <hr>
            <label>Desk:</label>
            <select id="desk" class="selectpicker btn">
                <option></option>
            </select>
            <hr>
            <label>Team:</label>
            <select id="team" class="selectpicker btn">
                <option></option>
            </select>
            <hr>
            <label>Sales:</label>
            <select id="sale" class="selectpicker btn">
                <option></option>
            </select>
            <hr>
            <label>Lead Status:</label>
            <select id="lead_status" class="selectpicker btn">
                <option></option>
            </select>
        </div>
        <div class="btn_container">
            <button class="btn btn-success btn_save" type="button">Save</button>
            <button class="btn btn_close" type="button">Close</button>
        </div>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>


