let boutton = document.getElementById("bouton");

boutton.onclick = (e) => {
  let password = document.getElementById("motdepass").value,
    confpassword = document.getElementById("motdepasse").value;

  if (password !== "" && confpassword !== "") {
    if (password === confpassword) {
    } else {
      alert("mot de passe incorrect");
      e.preventDefault();
      let password1 = document.getElementById("motdepass"),
        confpassword1 = document.getElementById("motdepasse");
      password1.value = "";
      confpassword1.value = "";
    }
  } else {
    alert("input empty");
    e.preventDefault();
  }
};
