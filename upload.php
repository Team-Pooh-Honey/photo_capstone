<!DOCTYPE html>

<?php //Header and navigation
    include 'header.php';
    include 'nav.php';
?>
    
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js"></script>

    <main>
        <style>
            main {
                text-align: left;   
                padding: 60px;
                margin-top: 100px;
                margin-left: auto;
                margin-right: auto;
                border-color: #A49F9F;
                background-color: #dddddd;
        }
        </style>

        <h2>Upload your images!</h2>

        <p>IMAGE NAME</p>
        <input type="text" id="name" name="name" placeholder="Image 01"></input>

        <p>AUTHOR</p>
        <input type="text" id="author" name="author" placeholder="Jane Jill"></input>

        <p>DATE</p>
        <input type="date" id="date" name="date" placeholder="Date taken"></input>
        <div id="editor"></div>

        <p>DESCRIPTION</p>
        <textarea type="text" id="description" name="description" placeholder="Describe your Image!" rows="6" cols="50"></textarea>

        <form action="/submit-photo.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
        </form>

        <button type="submit" name="submit">SUBMIT</button>
        <action="submit-photo.php" method="POST">




        <script src="/ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
        <script>
            var editor = ace.edit("editor");
            editor.session.setMode("ace/mode/html");
        </script>
    </main>


</html>