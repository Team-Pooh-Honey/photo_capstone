
//These are the variables we need to post images into the database
var name = $("#name").val();
var author = $("#author").val();
var date = $("#date").val();
var description = editor.getValue();

//Submit function
$("#submit").click(function() {
//TODO - What happens when it is clicked
});

//Post function
$.post( "submit-photo.php", { 
    name: name, 
    description: description, 
    author: author, 
    date: date 
}).done(function() {
window.location = "/index.php"; //redirect to homepage
});