// select the file input
const fileInput = document.getElementById("file");
// on change event do
fileInput.addEventListener("change", function (event) {
  // select the file label
  const label = this.nextElementSibling;
  // get the selected file name
  let fileName = "";
  if (this.files && this.files.length) {
    fileName = event.target.value.split("\\").pop();
  } else {
    fileName = "Choose a file";
  }
  // update the label text with that name
  label.textContent = fileName;
});
