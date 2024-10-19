document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('rate-button').addEventListener('click', function() {
      let points = prompt("Hoeveel punten geef je Owen zijn portfolio? (1-10)", "10");
      if (points !== null) {
        let reason = prompt("Waarom geef je deze rating?");
        if (reason !== null && reason.trim() !== "") {
          alert("Bedankt voor je feedback!\n\nRating: " + points + "/10\nReden: " + reason);
        } else {
          alert("Je hebt geen reden gegeven voor je rating.");
        }
      }
    });
  });
  
  
  document.getElementById('rate-button').addEventListener('click', function() {
    let points = prompt("Hoeveel punten geef je Owen zijn portfolio? (1-10)", "10");
    if (points !== null) {
      let reason = prompt("Waarom geef je deze rating?");
      if (reason !== null && reason.trim() !== "") {
        alert("Bedankt voor je feedback!\n\nRating: " + points + "/10\nReden: " + reason);
      } else {
        alert("Je hebt geen reden gegeven voor je rating.");
      }
    }
  });
