function actualizeLabelColor(labelId) {
    for (let i = 1; i <= 5; i++) {
        let label = document.getElementById("label" + i);
        label.style.background = "transparent";
        label.style.borderColor = "#FFF";

    }
    let selectedLabel = document.getElementById("label" + labelId);
    selectedLabel.style.background = "#FF9D02";
    selectedLabel.style.borderColor = "#FF9D02";

    let s1 = document.getElementById("s1")
    if (labelId == "1") {
        s1.style.marginLeft = "0";
    } else if (labelId == "2") {
        s1.style.marginLeft = "-20%";
    } else if (labelId == "3") {
        s1.style.marginLeft = "-40%";
    } else if (labelId == "4") {
        s1.style.marginLeft = "-60%";
    } else {
        s1.style.marginLeft = "-80%";
    }
}
let defaultLabel = document.querySelector("#label1");
defaultLabel.style.background = "#FF9D02";
defaultLabel.style.borderColor = "#FF9D02";
