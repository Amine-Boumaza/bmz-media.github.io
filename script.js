// const navLinks = document.getElementById('navLinks');

//  function showMenu(){
//     navLinks.style.right = "0";
//  }
//  function hideMenu(){
//     navLinks.style.right ="-12.5em";
//  }

// const form = document.querySelector("form"),
//   statusTxt = form.querySelector(".button-area span");
// form.onsubmit = (e) => {
//   e.preventDefault();
//   statusTxt.style.color = "#fff";
//   statusTxt.style.display = "block";

//   let xhr = new XMLHttpRequest();

//   xhr.open("POST", "message.php", true);

//   xhr.onload = () => {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       let response = xhr.response;
//       statusTxt.innerText = response;
//       if (response.indexOf("there was an error sending your email")) {
//         statusTxt.style.color = "red";
//       } else {
//         form.reset();
//       }
//     }
//   };
//   let formData = new FormData(form);

//   xhr.send(formData);
// };
