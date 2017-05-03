  <div class="row"><i class="removeall">Effacer</i><i class="add">ajouter</i></div>


  <div class="row"><input id="todoinput" type="text" placeholder="ajouter note"></div>
  <div class="row">
  <ul class="todoul">

  </ul>
  </div>



<style>

.removeall {
  float :left;
  margin-right: 0%;
  line-height: 30px;
  padding-left: 1.5em;
  cursor: pointer;
}

.add {
  float :right;
  cursor: pointer;
  padding-right: 1.5em;

}

.todoul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.todoli {
  background: #222222;
  max-height: 400px;
  line-height: 40px;
  color:  lightgray;
}

.todoli:nth-child(2n) {
  background: #3b3b3b;
}
 

#todoinput {
  font-size: 15px;
  text-align: center;
  letter-spacing: 1px;
  background: #3b3b3b;
  width: 100%;
  border: none;
  box-sizing: border-box;
  padding: 13px 13px 13px 20px;
  color: white;
  display:none;
}

#todoinput:focus {
  background: #3b3b3b;
  outline:none;
  border: 2px solid #9d9d9d;
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