   <form name="toDoList" onsubmit="return false">
      <input id="todoinput" type="text" name="ListItem"/>
    </form>
    
    <div><button type="button" id="button">ajouter</div>
    <br/>
    <ol></ol>

    <style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400italic,400);

body {
font: normal normal 13px/16px "Open Sans", sans-serif;
background: #ccc;
}

.container{
padding: 20px;
width: 300px;
margin: 0 auto;
margin-top: 40px;
background: white;
border-radius: 5px;}

form {
display: inline-block;
}

#todoinput{
padding: 4px 15px 4px 5px;
}

#button{
display: inline-block;
background-color:#222222;
color:#ffffff;
border-radius: 10px;
text-align:center;
margin-top:2px;
padding: 5px 15px;
}

#button:hover{
cursor: pointer;
opacity: .8;}

ol {padding-left: 20px;}

ol li {padding: 5px;color:#000;}

ol li:nth-child(even){background: #dfdfdf;}

.strike{text-decoration: line-through;}

li:hover{
  cursor: pointer;
 }
</style>
      
      
    

