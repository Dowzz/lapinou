<?php 
use App\todolist;
$lignes= todolist::where('user_id',$user_id)->get();

?>

<div class="row" class="todotools"><i class="removeall">Effacer</i><i class="add">Ajouter</i></div>
<div class="row" id="liinputrow"><input id="todoinput" type="text" placeholder="Ajouter note"></div>

<input type="hidden" id="user_id" value="<?php echo $user_id ?>">

  <div class="row"  id="liinputrow">
  <ul class="todoul">
<?php foreach ($lignes as $ligne) {
  $id= $ligne->id;
  ?>
  <li class="todoli"><span class="todospan"><i class="fa fa-trash"></i></span><number></number><?php echo ($ligne->champ)?></li>
<?php 
}
?>

  </ul>
  </div>



<style>

.removeall {
  float :left;
  margin-right: 0%;
  line-height: 30px;
  padding-left: 0.5em;
  cursor: pointer;
  color: #9d9d9d;
}

.add {
  float :right;
  cursor: pointer;
  padding-right: 0.5em;
  color: #9d9d9d;

}

.todoul {
  list-style: none;
  margin: 0;
  padding: 0;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}

.todoli {
  background: #222222;
  max-height: 400px;
  line-height: 40px;
  color:  lightgray;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
}

.todoli:nth-child(2n) {
  background: #3b3b3b;
}
 

#todoinput {
  font-size: 15px;
  text-align: center;
  letter-spacing: 1px;
  background: #222222;
  width: 100%;
  border: none;
  box-sizing: border-box;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  color: white;
  display:none;
  padding: 5px 5px 5px 5px;
}

#todoinput:focus {
  background: #3b3b3b;
  outline:none;
  color: white;

}
.completed {
  text-decoration: line-through;
  color: gray;
}

.todoli:hover {
  cursor: pointer;
}

.todospan {

  height: 40px;
  margin-right: 20px;
  text-align: center;
  color: white;
  width: 0px;
  display: inline-block;
  transition: 0.2s linear;
  opacity: 0;
}

.todoli:hover .todospan {
  width: 40px;
  opacity: 1;
}

}</style>