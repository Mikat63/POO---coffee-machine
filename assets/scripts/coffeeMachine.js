const CoffeeForce = document.querySelector("#coffee-force");
const coffeeTtype = document.querySelector("#coffee-type");
const onOffMachine = document.querySelector("#on-off-machine");
const machineStatus = document.querySelector("#machine-status");
const screenMessage = document.querySelector("#screen-message");
const coffee = document.querySelectorAll(".coffee");
const coffeePod = document.querySelector("#coffee-pod");

machineStatus.style.backgroundColor = "red";

onOffMachine.addEventListener("click", () => {
  coffeeMachineIgnition("on/off", "user on or off the coffee machine");
});

function coffeeMachineIgnition() {
  fetch("../process/ignition-machine.php", {
    method: "GET",
  })
    .then((response) => response.json())
    .then((data) => {
      running(data);
    });
}

function running(data) {
  data.status == true
    ? (machineStatus.style.backgroundColor = "green")
    : (machineStatus.style.backgroundColor = "red");

  coffeePod.classList.remove("no-click");
  screenMessage.textContent = data.message;

  if (data.status == false) {
    setTimeout(() => {
      coffeePod.classList.add("no-click");
      screenMessage.textContent = "";
    }, 3000);
  }
}

coffeePod.addEventListener("click", () => {
  coffeeMachinePod();
});

function coffeeMachinePod() {
  fetch("../process/insert-pod.php", {
    method: "GET",
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);

      insertPod(data);
    });
}

function insertPod(data) {
  if (data.status == true) {
    screenMessage.textContent = data.message;

    setTimeout(() => {
      machineStatus.style.backgroundColor = "orange";
      coffee.forEach((element) => {
        element.hidden = false;
      });
    }, 1000);

    setTimeout(() => {
      coffee.forEach((element) => {
        element.hidden = true;
      });

      screenMessage.textContent = "Votre café est prêt";
      machineStatus.style.backgroundColor = "green";
    }, 10000);
  } else {
    screenMessage.textContent = data.message;
  }
}
