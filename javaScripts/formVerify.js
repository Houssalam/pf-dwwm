// document.addEventListener("DOMContentLoaded", function () {
//   const form = document.querySelector("form");
//   form.addEventListener("submit", function (event) {
//     event.preventDefault();

//     const firstName = form.elements["first-name"].value;
//     const lastName = form.elements["last-name"].value;
//     const pseudo = form.elements["pseudo"].value;
//     const birthDate = form.elements["birth-date"].value;
//     const address = form.elements["address"].value;
//     const phoneNumber = form.elements["phone-number"].value;
//     const email = form.elements["email"].value;
//     const password = form.elements["password"].value;
//     const passwordConfirm = form.elements["password-confirm"].value;
//     const profilePhoto = form.elements["photoprofil"].value;

//     if (
//       firstName === "" ||
//       lastName === "" ||
//       pseudo === "" ||
//       birthDate === "" ||
//       address === "" ||
//       phoneNumber === "" ||
//       email === "" ||
//       password === "" ||
//       passwordConfirm === "" ||
//       profilePhoto === ""
//     ) {
//       alert("Veuillez compléter tous les champs.");
//       return;
//     }

//     if (password !== passwordConfirm) {
//       alert("Les mots de passe ne correspondent pas.");
//       return;
//     }

//     const today = new Date();
//     const birthDateObj = new Date(birthDate);
//     const ageDiff = today - birthDateObj;
//     const ageDate = new Date(ageDiff);
//     const age = Math.abs(ageDate.getUTCFullYear() - 1970);
//     if (age < 18) {
//       alert("Vous devez avoir au moins 18 ans pour vous inscrire.");
//       return;
//     }

//     form.submit();
//   });
// });
