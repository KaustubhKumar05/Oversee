const panel = document.getElementsByClassName("panel")[0],
    ongoing = document.getElementById("ongoing"),
    upcoming = document.getElementById("upcoming"),
    completed = document.getElementById("completed"),
    ongoingView = document.getElementById("ongoingView"),
    upcomingView = document.getElementById("upcomingView"),
    completedView = document.getElementById("completedView");

let btn = [ongoing, completed, upcoming],
    views = [upcomingView, ongoingView, completedView];


document.addEventListener('click', (e) => {
    if (e.target.id == 'closeBtn')
        panel.classList.remove('view');
    else if (e.target.id == 'menuBtn')
        panel.classList.add('view');
})

upcoming.addEventListener('click', () => {
    btn.forEach(choice => choice.classList.remove("selected"))
    views.forEach(choice => choice.classList.remove("show"))
    upcoming.classList.add("selected");
    upcomingView.classList.add("show");
})

ongoing.addEventListener('click', () => {
    btn.forEach(choice => choice.classList.remove("selected"))
    views.forEach(choice => choice.classList.remove("show"))
    ongoing.classList.add("selected");
    ongoingView.classList.add("show");
})

completed.addEventListener('click', () => {
    btn.forEach(choice => choice.classList.remove("selected"))
    views.forEach(choice => choice.classList.remove("show"))
    completed.classList.add("selected");
    completedView.classList.add("show");
})