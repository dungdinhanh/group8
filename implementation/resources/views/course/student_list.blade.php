<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Autocomplete - Default functionality</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
    <script>
    </script>
</head>
<body>
<div class="ui star rating" data-rating="3"></div>
<div class="ui modal">
    <i class="close icon"></i>
    <div class="header">
        Profile Picture
    </div>
    <div class="image content">
        <div class="ui medium image">
            <img src="/images/avatar/large/chris.jpg">
        </div>
        <div class="description">
            <div class="ui header">We've auto-chosen a profile image for you.</div>
            <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
            <p>Is it okay to use this photo?</p>
        </div>
    </div>
    <div class="actions">
        <div class="ui black deny button">
            Nope
        </div>
        <div class="ui positive right labeled icon button">
            Yep, that's me
            <i class="checkmark icon"></i>
        </div>
    </div>
</div>
<div class="ui dropdown">
    <div class="text">File</div>
    <i class="dropdown icon"></i>
    <div class="menu">
        <div class="item">New</div>
        <div class="item">
            <span class="description">ctrl + o</span>
            Open...
        </div>
        <div class="item">
            <span class="description">ctrl + s</span>
            Save as...
        </div>
        <div class="item">
            <span class="description">ctrl + r</span>
            Rename
        </div>
        <div class="item">Make a copy</div>
        <div class="item">
            <i class="folder icon"></i>
            Move to folder
        </div>
        <div class="item">
            <i class="trash icon"></i>
            Move to trash
        </div>
        <div class="divider"></div>
        <div class="item">Download As...</div>
        <div class="item">
            <i class="dropdown icon"></i>
            Publish To Web
            <div class="menu">
                <div class="item">Google Docs</div>
                <div class="item">Google Drive</div>
                <div class="item">Dropbox</div>
                <div class="item">Adobe Creative Cloud</div>
                <div class="item">Private FTP</div>
                <div class="item">Another Service...</div>
            </div>
        </div>
        <div class="item">E-mail Collaborators</div>
    </div>
</div>


</body>
</html>