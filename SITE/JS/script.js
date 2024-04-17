let btn = document.querySelector("#conn");
btn.onclick = (e) => {
  let nom = document.getElementById("nom1").value,
    prenom = document.getElementById("prenom1").value,
    password = document.getElementById("motpass").value;

  if (nom !== "" && prenom !== "" && password !== "") {
  } else {
    alert("completer votre champ");
    e.preventDefault();
  }
};
