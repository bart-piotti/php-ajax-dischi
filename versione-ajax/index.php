<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./dist/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    </head>
    <body>
        <select class="authors" name="">
            <option value="">Tutti gli artisti</option>
            <!-- <option value="Bon Jovi">Bon Jovi</option>
            <option value="Queen">Queen</option>
            <option value="Eric Clapton">Eric Clapton</option>
            <option value="Deep Purple">Deep Purple</option>
            <option value="Sting">Sting</option>
            <option value="Michael Jackson">Michael Jackson</option>
            <option value="Dave Weckl">Dave Weckl</option>
            <option value="Metallica">Metallica</option>
            <option value="Iron Maiden">Iron Maiden</option>
            <option value="Steve Gadd Band">Steve Gadd Band</option> -->
        </select>
        <div class="cds-container cds"></div>

    <script id="cd-card-template" type="text/x-handlebars-template">
        <div class="cd">
            <img src="{{poster}}" alt="">
            <h3>{{'title'}}</h3>
            <span class="author">{{author}}</span>
            <span class="year">{{year}}</span>
        </div>
    </script>
    <script src="./dist/script.js" charset="utf-8"></script>
    </body>
</html>
