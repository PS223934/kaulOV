function timedRedirect(destination, duration) {
    setInterval(()=> {
            window.location = destination
        }
    ,duration)
}
