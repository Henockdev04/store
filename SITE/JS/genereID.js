let userID = document.querySelector("#userID");
idgen = "";
function idGenerate() {
  let num = "0123456789";
  for (let i = 0; i < 9; i++) {
    idgen += num.charAt(Math.floor(Math.random() * 9));
    console.log(idgen);
    userID.value = idgen;
  }
  return idgen;
}
idGenerate();
