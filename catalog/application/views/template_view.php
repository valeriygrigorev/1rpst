<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
    $(function() {
		   $(".delete").on("click", function(){
		   $(this).closest("li").remove();
		   var url = "controllerDelAjax.php?id="+ $(this).attr("id");
		   $.ajax({
       url: url,
       dataType: "text",
        });
		  });	
		});
  
		$(document).ready(function() {
		  $("#ajax_add").submit(function(){
		  const inputDate = new Date(document.getElementById('addYear').value).toISOString().slice(0, 10); // введенная дата (обрезанная до год-месяц-день)
		  const currentDate = new Date().toISOString().slice(0, 10); // текущая дата (обрезанная до год-месяц-день)
		  const res = (inputDate < currentDate); // сравниваем
        if (res)
		    {
		    $.ajax({
		    url: "controllerAddAjax.php",
		    type: 'post',
		    data: {addJenre: $("#addJenre").val(),
		          addAuthor: $("#addAuthor").val(),
					    addName: $("#addName").val(),
					    addYear: $("#addYear").val()}, 
					    });
		    } 
				else 
				{
				alert("Год издания не должен быть больше текущего");
				}
			});	
		});	
 
    $(document).ready(function() {
		  $("#ajax_edit").submit(function(){
		  const inputDate = new Date(document.getElementById('addYear').value).toISOString().slice(0, 10); // введенная дата (обрезанная до год-месяц-день)
		  const currentDate = new Date().toISOString().slice(0, 10); // текущая дата (обрезанная до год-месяц-день)
		  const res = (inputDate < currentDate); // сравниваем
        if (res)
		    {
		    $.ajax({
		    url: "controllerEditAjax.php",
		    type: 'post',
		    data: {id: $("#id").val(), 
			        addJenre: $("#addJenre").val(),
		          addAuthor: $("#addAuthor").val(),
					    addName: $("#addName").val(),
					    addYear: $("#addYear").val()}, 
				      });
		    }
				else 
				{
				alert("Год издания не должен быть больше текущего");
				}				
			});	
		});	
    </script>
		
    <style>
		.book{
		font-size: 16px;
		margin: 10px;
		}
	
		h1{
		margin: 10px;
		}
	
		.add{
		margin: 10px;
		}

    </style>	
	  <title>Каталог книг</title>
</head>
  <body>
     <?php include "$content_view"; ?> 
	<footer>
  </footer>
  </body>
</html>