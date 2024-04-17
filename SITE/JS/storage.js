//localStorage.setItem("document", "La carte d'identite nationale");
session_start();
$IDuser = $_SESSION["IDuser"];

let documents = localStorage.getItem("document");
console.log(documents);
//localStorage.removeItem("document");
let mylink = document.querySelectorAll(".link");

mylink.forEach((val, i, arr) => {
  //console.log(arr);
  val.onclick = () => {
    let docName = mylink[i].innerHTML;
    // alert("click " + docName);
    localStorage.setItem("document", `${docName}`);
  };
});
let send = document.querySelector(".live");

send.onclick = () => {
  let doc = localStorage.getItem("document");
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "document.php?nom=" + doc, true);
  xhr.onload = () => {
    if (xhr.status === 200) {
      alert("Demande envoyé");
      console.log(doc);
    } else {
      alert("error");
    }
  };
  xhr.send();
  location.reload();
};
