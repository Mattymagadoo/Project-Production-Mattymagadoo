require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function myFunction() {
    document.getElementById("demo").innerHTML = "Paragraph changed.";
  }