<?php header ('Content-Type: text/css; charset: UTF-8'); ?>

body{
    background-color: #cceeff;
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
}

h2{ font-family: 'Helvetica Neue', sans-serif; }

.header { background-color: #99ddff; }

#emailValidacion{
    color:red;
}

.disabled {
  opacity: 0.6;
  cursor: not-allowed;
  pointer-events: none;
}

img {
    height: 16vh;
    width: 9vw;
}

.tableImg{ border-radius: 50%; }

.parentDiv {
    display: flex;
    justify-content: center;
    align-items: center;
}

.childDiv { margin: 1vh; }

.btn-paginacion{
    background-color: white;
}

.smallText{
    color: gray;
    font-size: 10px;
}

#buttonSubmit {
    margin-left: 36%;
    background-color: #4CAF50;
    color: white;
    font-size: 20px;
    padding: 3%;
    border-radius: 9px;
    transition-duration: 0.4s;
}

#buttonSubmit:hover {
  background-color: #ff9900;
  color: white;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: left;
  padding: 15px;
  margin-bottom: 3%;
}

table { width: 50% ; }

tr:hover {background-color: #b3e6ff;}

.searchButton{
    height: 27px;
    width: 33px;
    margin-bottom: -7px;
}

.searchButton:hover{
    transform: scale(1.5);
}

.editButton{
    height: 27px;
    width: 33px;
    opacity: 0.6;
    transition: 0.3s;
}
.editButton:hover{
    transform: scale(1.5);
    opacity: 1;
}

.deleteButton{
    height: 27px;
    width: 33px;
    opacity: 0.6;
    transition: 0.3s;
}
.deleteButton:hover{
    transform: scale(1.5);
    opacity: 1;
}

button{
    background-color: transparent;
    border: 0;
    cursor: pointer;
}

