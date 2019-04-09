var totalGoals = 6;
var completedGoals = 0;
var percentCompleted = 0;
var i;

function round(value, decimals) {
  return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
}

function updateBar(){
    percentCompleted = round(((completedGoals / totalGoals) * 100 * 5), 1);
    document.getElementById("innerBar").style.width = percentCompleted;

    if (percentCompleted == 500) {
      document.getElementById("innerBar").style.border = "2px solid #FFC107";
    }
}

var icons = document.getElementsByClassName("smallGoalIcon");
for (i = 0; i < icons.length; i++) {
  icons[i].addEventListener("click", function (event) {
    var target = event.target;
    clickIcon(target);
  });

}

function clickIcon(target) {
  var target = event.target;
  if (!target.classList.contains("completed")) {
    target.classList.add("completed");
    completedGoals++;
    updateBar();
  }
  else {
    target.classList.remove("completed");
    completedGoals--;
    updateBar();
  }
  var siblings = getSiblings(target.parentNode, smallGoalFilter);
  var metaComplete = 0;
  for (i = 0; i < siblings.length; i++) {
    if (siblings[i].firstElementChild.classList.contains("completed")) {
      metaComplete++;
      //console.log(metaComplete);
    }
    else {
      continue;
    }
  }

  if (metaComplete == 3) {
    target.parentNode.parentNode.firstElementChild.firstElementChild.classList.add("completed");
  }
  else {
    target.parentNode.parentNode.firstElementChild.firstElementChild.classList.remove("completed");
  }


}

function getSiblings(el, filter) {
    var siblings = [];
    el = el.parentNode.firstElementChild;
    do { if (!filter || filter(el)) siblings.push(el); } while (el = el.nextElementSibling);
    return siblings;
}

function smallGoalFilter(el) {
    return el.classList.contains("smallGoalContainer");
}
