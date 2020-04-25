// select the file input
const fileInput = document.getElementById("file");
// on change event do
fileInput.addEventListener("change", function (event) {
  // select the file label
  const label = this.nextElementSibling;
  // get the selected file name
  let fileName = "";
  if (this.files && this.files.length) {
    fileName = event.target.value.split("/").pop();
  } else {
    fileName = "Choose a file";
  }
  // update the label text with that name
  label.textContent = fileName;
});

// selecting the form
const form = document.getElementById("form");
form.addEventListener("submit", function (event) {
  event.preventDefault();
  // validating that the user has selected a file
  const files = fileInput.files;
  console.log(files);
  if (!files.length) {
    error("no file selected");
    return;
  }
  const file = files[0];
  const type = file.type.split("/").pop();
  console.log(type);
  const allowedTypes = ["pdf", "word", "doc", "xls", "txt"];
  let errors = [];
  if (file.size > 10 * 1024 * 1024) errors.push("file must be at most 10mb");
  if (!allowedTypes.includes(type))
    errors.push(`file must one of ${allowedTypes.join(",")} type(s)`);
  // check if there is an error:
  if (!errors.length) {
    error(errors);
  }
});

function error(msg = "Error, please try again") {
  if (!Array.isArray(msg)) alert(msg);
  else {
    const error_msgs = msg
      .map(function (err) {
        return `<li>${err}</li>`;
      })
      .join("");
    alert(`<ul>${error_msgs}</ul>`);
  }
}
