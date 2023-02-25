const colorPicker = document.querySelector('#colorPicker');
const colorCode = document.querySelector('#colorCode');

colorPicker.addEventListener('input', () => {
  const color = colorPicker.value;
  colorCode.value = color;
});

document.getElementById("myInput").addEventListener("paste", function(event) {
   // code untuk mengubah teks
});

let pastedText = event.clipboardData.getData('text');

let modifiedText = pastedText.toUpperCase();


document.getElementById("modifiedInput").value = modifiedText;

