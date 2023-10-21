function isShow(e) {
    var shows = document.querySelector(".isShow")
    if (shows)
        shows.classList.remove("isShow")
    setTimeout(function () {
        if (location.href.includes(e)) {
            var slide = document.querySelector(`.${e}`)
            slide.classList.add("isShow")
        }
    },)

}