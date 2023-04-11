window.onfocus = function () {
    const title = document.title;
    document.title = title;
    console.log(title);
};

window.onblur = function () {
    document.title = "Pouquois tu nous quitte ? :(";
};