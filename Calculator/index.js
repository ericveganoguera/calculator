//Take the html tags and id
const display = document.querySelector("#display");
const numberButtons = document.querySelectorAll(".number");
const clearButton = document.querySelectorAll(".clear");
const operatorButtons = document.querySelectorAll(".operator");
const equalButtons = document.querySelectorAll(".equal");
 
//Initialize logic variables
let operatorNotClicked = true;
let previousValue = "";
let operator = "";
let firstTimeEqual = true;
let operatorClicked = false;
let dotClicked = false;



// Add an event for each button
numberButtons.forEach((button) => {
  button.addEventListener("click", function () {
    const buttonValue = this.value;
    display.value += buttonValue;
  });
});

// Clear display and others things
clearButton.forEach((button) => {
  button.addEventListener("click", () => {
    display.value = "";
    previousValue = "";
    operator = "";
    operatorClicked = false;
    firstTimeEqual = true;
    dotClicked = false;
    removeClassVisible();
  });
});

//Add function for each button
operatorButtons.forEach((button) => {
  button.addEventListener("click", function () {
    const operatorButton = this.value;
    switch (operatorButton) {
      case "+":
      case "-":
      case "*":
      case "/":
      case "%":
      case "√":
        if (!operatorClicked && display.value) {
          previousValue = display.value;
          operator = button.value;
          display.value = "";
          operatorClicked = true;
          dotClicked = false;
          button.classList.add("active");
        }
        break;
      case ".":
        if (!dotClicked) {
            display.value += ".";
            dotClicked = true;
        }
        break;
      case "±":
        if (!isNaN(display.value) && display.value) {
          display.value = -display.value;
        }
        break;
    }
  });
});

//Make the result to the calculator for each operator clicked
equalButtons.forEach((button) => {
  button.addEventListener("click", function () {
    if (firstTimeEqual) {
      currentValue = display.value;
    }
    let result;
    if (previousValue && display.value && display.value != ".") {
      switch (operator) {
        case "+":
          result = parseFloat(previousValue) + parseFloat(currentValue);
          break;
        case "-":
          result = parseFloat(previousValue) - parseFloat(currentValue);
          break;
        case "*":
          result = parseFloat(previousValue) * parseFloat(currentValue);
          break;
        case "/":
          result = parseFloat(previousValue) / parseFloat(currentValue);
          break;
        case "√":
          result = Math.pow(previousValue, 1 / currentValue);
          break;
        case "%":
          result = (previousValue * currentValue) / 100;
          break;
      }
      previousValue = result;
      display.value = result;
      removeClassVisible();
      firstTimeEqual = false;
      operatorClicked = false;
      dotClicked = false;
    }
  });
});

//Remove the class visible 
function removeClassVisible() {
  operatorButtons.forEach((button) => {
    button.classList.remove("active");
  });
}