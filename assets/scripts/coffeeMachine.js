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

function coffeeMachineIgnition(status, message) {
  fetch("../process/coffee-machine.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      status: status,
      message: message,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      running(data);
    });
}

function running(data) {
  if (data.status == "machine on") {
    machineStatus.style.backgroundColor = "green";
    screenMessage.textContent = data.message;

    setTimeout(() => {
      screenMessage.textContent = data.pod;
    }, 3000);
  }
}

coffeePod.addEventListener("click", () => {
  coffeeMachinePod("pod ok", "pod inserted in the machine");
});

function coffeeMachinePod(status, message) {
  fetch("../process/coffee-machine.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      status: status,
      message: message,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      insertPod(data);
    });
}

function insertPod(data) {
  if (data.message === "pod ok") {
    screenMessage.textContent = data.message;

    setTimeout(() => {
      coffee.forEach((element) => {
        element.hidden = false;
      });
    }, 1000);

    setTimeout(() => {
      coffee.forEach((element) => {
        element.hidden = true;
      });
      screenMessage.textContent = data.result;
    }, 5000);
  } else {
    screenMessage.textContent = data.message;
  }
}
