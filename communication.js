
//var subject , writer, password, content; //등록 누르면 저장할 변수
var view_sub, view_writer, view_content; //게시글을 볼 때 필요한 변수
var signal;

function regist(){
  subject = document.getElementById("Subject").value;
  writer = document.getElementById("Writer").value;
  password = document.getElementById("Password").value;
  content = document.getElementById("Content").value;
  signal = 1;
}

function view(){
  view_sub = document.getElementById("subject");
  view_writer = document.getElementById("writer");
  view_content = document.getElementById("content");

  view_sub.innerHTML = subject;
  view_writer.innerHTML = writer;
  view_content.innerHTML = content;
}
