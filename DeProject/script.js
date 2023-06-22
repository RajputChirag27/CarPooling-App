// responsive Navbar function
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  document.addEventListener("DOMContentLoaded", function() {
    // Get the current date
    var today = new Date().toISOString().split('T')[0];
    
    // Set the minimum date for the datepicker
    document.getElementById("datePicker").setAttribute("min", today);
  });
  
  // Login Page Starts here
  const wrapper = document.querySelector(".wrapper");
const signHead = document.querySelector(".Signup header");
const loginHead = document.querySelector(".login header");

loginHead.addEventListener("click", () => {
  wrapper.classList.add("active");
});
signHead.addEventListener("click", () => {
  wrapper.classList.remove("active");
});

// Login Page Ends here

  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.2/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.22.2/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCeMfVlUI7VekR0r1Y5bDyvMFqWavUj8Is",
    authDomain: "peak-eon-336811.firebaseapp.com",
    projectId: "peak-eon-336811",
    storageBucket: "peak-eon-336811.appspot.com",
    messagingSenderId: "528967686392",
    appId: "1:528967686392:web:a7e8f4fe61651c6170830d",
    measurementId: "G-M057HXW5WW"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);