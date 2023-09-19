<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body>
    <div class="w-full h-screen">
        @include("sections.header")
        @include("sections.info-tittle")
        @include("sections.jobs")
        @include("sections.form")
        @include("sections.footer")
    </div>
</body>
</html>