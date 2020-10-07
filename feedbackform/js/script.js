console.log("Hello world!");
async function sendForm(form) {
    let formData = new FormData(form);
    let response = await fetch("form2_obr.php", {
        method: "POST",
        body: formData
    });
    let result = await response.text();
      if (result == "success") {
          alert("Thank you, your message has been sent.");
          } else {
           alert("We're sorry, but there was an error processing your request.");
      }
}