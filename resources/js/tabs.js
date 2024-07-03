window.openTab = function openTab(evt, tab) {
    let i, tabContents, tabButtons;

    tabContents = document.getElementsByClassName("tabContent");
    for (i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.add("hidden");
    }

    tabButtons = document.getElementsByClassName("tabButton");
    for (i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove(
            "border-b-2",
            "border-gray-200",
            "text-text",
            "font-bold"
        );
        tabButtons[i].classList.add("text-text/50");
    }

    document.getElementById(tab).classList.remove("hidden");
    evt.currentTarget.classList.add(
        "border-b-2",
        "border-gray-200",
        "text-text",
        "font-bold"
    );
    evt.currentTarget.classList.remove("text-text/50");
};
