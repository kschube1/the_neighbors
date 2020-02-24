var tries = 0;
function reportcrime() {
    tries++;
    var countcorrectanswers = 0;
    var countredman = 0;
    var countpurpleman = 0;
    var countpinkman = 0;
    var countorangeman = 0;
    var countyellowman = 0;
    if (tries == 4) {
        window.location.href = "youdiditwrong.html";
    } 
    if (this.redmanc.value.localeCompare("murder") == 0) {
        countcorrectanswers++;
        countredman++;
       document.getElementById('redmanc').style.backgroundColor = "green";
    } else {
        document.getElementById('redmanc').style.backgroundColor = "red";
    }
    if (this.redmanm.value.localeCompare("bloodlust") == 0) {
        countcorrectanswers++;
        countredman++;
       document.getElementById('redmanm').style.backgroundColor = "green";
} else {
        document.getElementById('redmanm').style.backgroundColor = "red";
    }

    if(this.purplemanc.value.localeCompare("staying quiet") == 0) {
        countcorrectanswers++;
        countpurpleman++;
        document.getElementById('purplemanc').style.backgroundColor = "green";
    } else {
        document.getElementById('purplemanc').style.backgroundColor = "red";
    }
    if(this.purplemanm.value.localeCompare("peer pressure") == 0) {
        countcorrectanswers++;
        countpurpleman++;
        document.getElementById('purplemanm').style.backgroundColor = "green";
    } else {
        document.getElementById('purplemanm').style.backgroundColor = "red";
    }
    if(this.pinkmanc.value.localeCompare("theft") == 0) {
        countcorrectanswers++;
        countpinkman++;
        document.getElementById('pinkmanc').style.backgroundColor = "green";
    } else {
        document.getElementById('pinkmanc').style.backgroundColor = "red";
    } if(this.pinkmanm.value.localeCompare("greed") == 0) {
        countcorrectanswers++;
        countpinkman++;
        document.getElementById('pinkmanm').style.backgroundColor = "green";
    } else {
        document.getElementById('pinkmanm').style.backgroundColor = "red";
    } if(this.orangemanc.value.localeCompare("cannibalism") == 0) {
        countcorrectanswers++;
        countorangeman++;
        document.getElementById('orangemanc').style.backgroundColor = "green";
    } else {
        document.getElementById('orangemanc').style.backgroundColor = "red";
    } if(this.orangemanm.value.localeCompare("hunger") == 0) {
        countcorrectanswers++;
        countorangeman++;
        document.getElementById('orangemanm').style.backgroundColor = "green";
    } else {
        document.getElementById('orangemanm').style.backgroundColor = "red";
    } if(this.yellowmanc.value.localeCompare("planning crime") == 0) {
        countcorrectanswers++;
        countyellowman++;
        document.getElementById('yellowmanc').style.backgroundColor = "green";
    } else {
        document.getElementById('yellowmanc').style.backgroundColor = "red";
    } if(this.yellowmanm.value.localeCompare("revenge") == 0) {
        countcorrectanswers++;
        countyellowman++;
        document.getElementById('yellowmanm').style.backgroundColor = "green";
    } else {
        document.getElementById('yellowmanm').style.backgroundColor = "red";
    }

    if(countcorrectanswers == 10) {
        window.location.href = "youdiditright.html";
    } 

} //ends it all 

    //if countcorrect answers = 10
        //link to yay!! page - they win!!
    //else
        //show wrong answers
    //add link back to the neighborhood
    //add results as an event 
    //get rid of alerts
    //someday we could have an event for which correct suspect, could freeze ones they got right
    //dialogue pages